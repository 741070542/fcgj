<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 新闻控制器
 */
class NewsController extends BaseController{

    /**
     * 新闻列表
     */
    public function index(){
        $this->assign('f','f');
        $this->assign('g','g');
        $this->display();
    }


    /**
     * 数据
     */
    public function lists(){
        $p = I();
        $like = $p['search']['value'];
        if($like){
            $start = $p['start'];
            $length = $p['length'];
            $news = M("news");
            $where['a.title'] = array('like','%'.$like.'%');
            $counts = $news->count();
            $count = $news->alias('a')->where($where)->count();
            $info = $news->alias('a')
                ->field('a.*,d.classname')
                ->join('hak_classs as d   ON d.id = a.clas_id')
                ->where($where)
                ->limit($start,$length)
                ->order('sorting desc')
                ->select();
            foreach($info as $k=>$v){
                if($v['status'] == '1'){
                    $info[$k]['status'] = '是';
                }else{
                    $info[$k]['status'] = '否';
                }
//                $content = htmlspecialchars_decode($v['content']);
                $info[$k]['content'] = getSubstr($v['content'],0,15);
            }
            $result = array_values($info);
            echo json_encode(array(
                'draw' => $p['draw'],
                'recordsTotal' => $counts,
                'recordsFiltered' => $count,
                'data' => $result,
            ));
        }else {
            $start = $p['start'];
            $length = $p['length'];
            $news = M("news");
            $count = $news->count();
            $info = $news->alias('a')
                ->field('a.*,d.classname')
                ->join('hak_classs as d   ON d.id = a.clas_id')
                ->limit($start,$length)
                ->order('sorting desc')
                ->select();
            foreach($info as $k=>$v){
                if($v['status'] == '1'){
                    $info[$k]['status'] = '是';
                }else{
                    $info[$k]['status'] = '否';
                }
//                $content = htmlspecialchars_decode($v['content']);
                $info[$k]['content'] = getSubstr($v['content'],0,15);
            }
            $result = array_values($info);
            echo json_encode(array(
                'draw' => $p['draw'],
                'recordsTotal' => $count,
                'recordsFiltered' => $count,
                'data' => $result,
            ));
        }
    }

    /*
     * 删除
     */
    public function dete(){
        $id = I('get.');
        $where['id'] = $id['id'];
        $news = M("news");
        $data = $news->where($where)->delete();
        if (!$data) {
            $this->error('删除失败');exit;
        }
        $this->success('操作成功',U('Admin/News/index'));exit;
    }


    /*
     * 新闻添加
     */
    public function add(){
        if(IS_POST) {
            $data = I();
            $data['addtime'] = time();
            $data['content'] = $data['editorValue'];
            $news = M("news");
            $add = $news->add($data);
            if (!$add) {
                $this->error('添加失败');exit;
            }
            $res = uploadTicketFile();
            if (!$res) {
                $this->error('标题图片上传失败');exit;
            }
            $arrNew=array();
            foreach($res as $k=>$v){
                $arrNew[$k]=$v['url'];
            }
            if (!$news->where(array('id'=>$add))->save($arrNew)) {
                $this->error('标题图片上传失败');exit;
            }
            $news_rec = M("news_rec");
            foreach($data['select'] as $k=>$v){
                $arr['news_id'] = $add;
                $arr['rec_id'] = $v;
                $news_rec->add($arr);
            }

            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/News/index.html'</script>";
        }
        $classs = M("classs");
        $info1 = $classs->where(array('father'=>'0'))->order('sorting desc')->select();
        $data = array();
        foreach($info1 as $k=>$v){
            $info2 = $classs->where(array('father'=>$v['id']))->order('sorting desc')->select();
            foreach($info2 as $k2=>$v2){
                array_unshift($data,$v2);
            }
            array_unshift($data,$v);
        }
        foreach($data as $k=>$v){
            if($v['father'] !== '0'){
                $data[$k]['classname'] = "--".$v['classname'];
            }
        }
        $this->assign('clas',$data);

        //新闻推荐
        $news = M("news");
        $recom = $news->alias('a')
            ->field('a.id,a.title')
            ->select();
        array_unshift($recom,array('id'=>'','title'=>''));
        $this->assign('recom',$recom);


        $this->assign('f','f');
        $this->assign('h','h');
        $this->display();
    }


    /*
     * 新闻修改
     */
    public function edit(){
        if(IS_POST) {
            $data = I();
            $data['content'] = $data['editorValue'];
            $news = M("news");
            $where['id'] = $data['id'];
            $id = $data['id'];
            unset($data['id']);
            $news->where($where)->save($data);
            $res = uploadTicketFile();
            if($res) {
                $arrNew = array();
                foreach ($res as $k => $v) {
                    $arrNew[$k] = $v['url'];
                }
                if (!$news->where($where)->save($arrNew)) {
                    $this->error('标题图片上传失败');
                    exit;
                }
            }
            $news_rec = M("news_rec");
            $news_rec->where(array("news_id"=>$id))->delete();
            foreach($data['select'] as $k=>$v){
                $arr['news_id'] = $id;
                $arr['rec_id'] = $v;
                $news_rec->add($arr);
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/News/index.html'</script>";
        }
        //回显新闻信息
        $id = I();
        $where['id'] = $id['id'];
        $news = M("news");
        $info = $news->where($where)->find();
        $info['content'] = htmlspecialchars_decode($info['content']);
        $this->assign('info',$info);
        //回显分类
        $classs = M("classs");
        $info1 = $classs->where(array('father'=>'0'))->order('sorting desc')->select();
        $data = array();
        foreach($info1 as $k=>$v){
            $info2 = $classs->where(array('father'=>$v['id']))->order('sorting desc')->select();
            foreach($info2 as $k2=>$v2){
                array_unshift($data,$v2);
            }
            array_unshift($data,$v);
        }
        foreach($data as $k=>$v){
            if($v['father'] !== '0'){
                $data[$k]['classname'] = "--".$v['classname'];
            }
        }
        //使修改新闻所属分类默认选中
        foreach($data as $k=>$v){
            if($v['id'] == $info['clas_id']){
                $data[$k]['mr'] = 'mr';
            }else{
                $data[$k]['mr'] = 'k';
            }
        }
        $this->assign('clas',$data);

        //推荐新闻
        $news = M("news");
        $recom = $news->alias('a')
            ->field('a.id,a.title')
            ->select();
        foreach($recom as $k=>$v){
            $news_rec = M("news_rec");
            $arry['news_id'] = $id['id'];
            $arry['rec_id'] = $v['id'];
            $data_rec = $news_rec->where($arry)->select();
            if($data_rec){
                $recom[$k]['rec'] = 's';
            }else{
                $recom[$k]['rec'] = 'c';
            }
        }
        array_unshift($recom,array('id'=>'','title'=>''));
        $this->assign('recom',$recom);

        $this->assign('f','f');
        $this->assign('g','g');
        $this->display();
    }
}