<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 商务服务控制器
 */
class AffairsController extends BaseController{

    /**
     * 商务服务列表
     */
    public function index(){
        $this->assign('u','u');
        $this->assign('v','v');
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
            $affairs = M("affairs");
            $where['a.title'] = array('like','%'.$like.'%');
            $counts = $affairs->count();
            $count = $affairs->alias('a')->where($where)->count();
            $info = $affairs->alias('a')
                ->field('a.*')
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
            $affairs = M("affairs");
            $count = $affairs->count();
            $info = $affairs->alias('a')
                ->field('a.*')
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
        $affairs = M("affairs");
        $data = $affairs->where($where)->delete();
        if (!$data) {
            $this->error('删除失败');exit;
        }
        $this->success('删除成功',U('Admin/Affairs/index'));exit;
    }


    /*
     * 商务服务添加
     */
    public function add(){
        if(IS_POST) {
            $data = I();
            $data['content'] = $data['editorValue'];
            $affairs = M("affairs");
            $add = $affairs->add($data);
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
            if (!$affairs->where(array('id'=>$add))->save($arrNew)) {
                $this->error('首页图片上传失败');exit;
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Affairs/index.html'</script>";
        }
        $this->assign('u','u');
        $this->assign('w','w');
        $this->display();
    }


    /*
     * 商务服务修改
     */
    public function edit(){
        if(IS_POST) {
            $data = I();
            $data['content'] = $data['editorValue'];
            $affairs = M("affairs");
            $where['id'] = $data['id'];
            unset($data['id']);
            $affairs->where($where)->save($data);
            $res = uploadTicketFile();
            if($res) {
                $arrNew = array();
                foreach ($res as $k => $v) {
                    $arrNew[$k] = $v['url'];
                }
                if (!$affairs->where($where)->save($arrNew)) {
                    $this->error('首页图片上传失败');
                    exit;
                }
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Affairs/index.html'</script>";
        }
        //回显新闻信息
        $id = I();
        $where['id'] = $id['id'];
        $affairs = M("affairs");
        $info = $affairs->where($where)->find();
        $info['content'] = htmlspecialchars_decode($info['content']);
        $this->assign('info',$info);

        $this->assign('u','u');
        $this->assign('v','v');
        $this->display();
    }
}