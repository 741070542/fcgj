<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

/**
 * 新闻分类控制器
 */
class ClasssController extends BaseController{

    /**
     * 新闻分类列表
     */
    public function index(){
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
                $data[$k]['fathers'] = 2;
            }
        }
        $this->assign('info',$data);
        $this->assign('c','c');
        $this->assign('d','d');
        $this->display();
    }


//    /**
//     * 数据
//     */
//    public function lists(){
//        $p = I();
//        $like = $p['search']['value'];
//        if($like){
//            $start = $p['start'];
//            $length = $p['length'];
//            $classs = M("classs");
//            $where['classname'] = array('like','%'.$like.'%');
//            $counts = $classs->count();
//            $count = $classs->where($where)->count();
//            $info = $classs->where($where)->limit($start,$length)->order('sorting desc')->select();
//            $result = array_values($info);
//            echo json_encode(array(
//                'draw' => $p['draw'],
//                'recordsTotal' => $counts,
//                'recordsFiltered' => $count,
//                'data' => $result,
//            ));
//        }else {
//            $start = $p['start'];
//            $length = $p['length'];
//            $classs = M("classs");
//            $count = $classs->count();
//            $info = $classs->limit($start,$length)->order('sorting desc')->select();
//            $result = array_values($info);
//            echo json_encode(array(
//                'draw' => $p['draw'],
//                'recordsTotal' => $count,
//                'recordsFiltered' => $count,
//                'data' => $result,
//            ));
//        }
//    }

    /*
     * 删除
     */
    public function dete(){
        $id = I('get.');
        $where['id'] = $id['id'];
        $classs = M("classs");
        $father = $classs->where($where)->find();
        if($father['father'] == '0'){
            $fs = $classs->where(array('father'=>$id['id']))->find();
            if($fs){
                $this->error('删除失败，存在子分类');exit;
            }
        }
        $news = M("news");
        $wheren['clas_id'] = $id['id'];
        $datanews = $news->where($wheren)->find();
        if($datanews){
            $this->error('删除失败，此分类下存在新闻');exit;
        }
        $data = $classs->where($where)->delete();
        $this->assign('c','c');
        if (!$data) {
            $this->error('删除失败');exit;
        }
        $this->success('操作成功',U('Admin/Classs/index'));exit;
    }

    /*
     * 添加新闻分类
     */
    public function add(){
        if(IS_POST) {
            $data = I();
            $classs = M("classs");
            $edit = $classs->add($data);
            if (!$edit) {
                $this->error('添加');exit;
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Classs/index.html'</script>";
        }
        $classs = M("classs");
        $info = $classs->where(array('father'=>'0'))->select();
        array_unshift($info,array('classname'=>'顶级分类','id'=>'0'));
        $this->assign('c','c');
        $this->assign('e','e');
        $this->assign('info',$info);
        $this->display();
    }

    /*
     * 修改新闻分类
     */
    public function edit(){
        if(IS_POST) {
            $data = I();
            //修改留言状态
            $where['id'] = $data['id'];
            $classs = M("classs");
            unset($data['id']);
            $edit = $classs->where($where)->save($data);
            if (!$edit) {
                $this->error('回复失败');exit;
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Classs/index.html'</script>";
        }
        //获得修改数据的id
        $get = I();
        $id = $get['id'];
        //得到所有的分类且组合数组结构使之能够符合前端显示顺序
        $classs = M("classs");
        $info = $classs->where(array('id'=>$id))->find();
        if($info['father'] == '0'){
            $data = $classs->where(array('id'=>$id))->select();
            $data[0]['classname'] = '顶级分类';
        }else{
            $data = $classs->where(array('father'=>'0'))->select();
        }
        //使修改的默认选中
        foreach($data as $k=>$v){
            if($v['id'] == $info['father']){
                $data[$k]['mr'] = 'mr';
            }else{
                $data[$k]['mr'] = 'k';
            }
        }
        $this->assign('info',$data);
        $this->assign('infos',$info);
        $this->assign('c','c');
        $this->assign('d','d');
        $this->display();
    }
}