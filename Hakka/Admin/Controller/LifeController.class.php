<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 生活配套控制器
 */
class LifeController extends BaseController{

    /**
     * 生活配套控列表
     */
    public function index(){
        $this->assign('i','i');
        $this->assign('j','j');
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
            $life = M("life");
            $where['a.title'] = array('like','%'.$like.'%');
            $counts = $life->count();
            $count = $life->alias('a')->where($where)->count();
            $info = $life->alias('a')
                ->field('a.*,d.name')
                ->join('hak_lifeclas as d   ON d.id = a.lifeclas_id')
                ->where($where)
                ->limit($start,$length)
                ->order('sequencing desc')
                ->select();
            foreach($info as $k=>$v){
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
            $life = M("life");
            $count = $life->count();
            $info = $life->alias('a')
                ->field('a.*,d.name')
                ->join('hak_lifeclas as d   ON d.id = a.lifeclas_id')
                ->limit($start,$length)
                ->order('sequencing desc')
                ->select();
            foreach($info as $k=>$v){
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
        $life = M("life");
        $data = $life->where($where)->delete();
        if (!$data) {
            $this->error('删除失败');exit;
        }
        $this->success('操作成功',U('Admin/Life/index'));exit;
    }


    /*
     * 生活配套添加
     */
    public function add(){
        if(IS_POST) {
            $data = I();
            $data['time'] = time();
            $data['content'] = $data['editorValue'];
            $life = M("life");
            $add = $life->add($data);
            if (!$add) {
                $this->error('添加失败');exit;
            }
            $res = uploadTicketFile();
            if (!$res) {
                $this->error('首页图片上传失败');exit;
            }
            $arrNew=array();
            foreach($res as $k=>$v){
                $arrNew[$k]=$v['url'];
            }
            if (!$life->where(array('id'=>$add))->save($arrNew)) {
                $this->error('首页图片上传失败');exit;
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Life/index.html'</script>";
        }
        $lifeclas = M("lifeclas");
        $data = $lifeclas->select();
        $this->assign('clas',$data);

        $this->assign('i','i');
        $this->assign('k','k');
        $this->display();
    }


    /*
     * 生活配套修改
     */
    public function edit(){
        if(IS_POST) {
            $data = I();
            $data['content'] = $data['editorValue'];
            $news = M("news");
            $where['id'] = $data['id'];
            unset($data['id']);
            $save = $news->where($where)->save($data);
            if (!$save) {
                $this->error('修改失败');exit;
            }

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
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Life/index.html'</script>";
        }
        //回显信息
        $id = I();
        $where['id'] = $id['id'];
        $life = M("life");
        $info = $life->where($where)->find();
        $info['content'] = htmlspecialchars_decode($info['content']);
        $this->assign('info',$info);
        //回显分类
        $lifeclas = M("lifeclas");
        $info1 = $lifeclas->select();

        //使修改所属分类默认选中
        foreach($info1 as $k=>$v){
            if($v['id'] == $info['lifeclas_id']){
                $info1[$k]['mr'] = 'mr';
            }else{
                $info1[$k]['mr'] = 'k';
            }
        }
        $this->assign('clas',$info1);

        $this->assign('i','i');
        $this->assign('j','j');
        $this->display();
    }
}