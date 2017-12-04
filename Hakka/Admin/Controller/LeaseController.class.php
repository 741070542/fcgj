<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 租贷顾问控制器
 */
class LeaseController extends BaseController{

    /**
     * 租贷顾问列表
     */
    public function index(){
        $this->assign('l','l');
        $this->assign('m','m');
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
            $lease = M("lease");
            $where['a.name'] = array('like','%'.$like.'%');
            $counts = $lease->count();
            $count = $lease->alias('a')->where($where)->count();
            $info = $lease->alias('a')
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
            $lease = M("lease");
            $count = $lease->count();
            $info = $lease->alias('a')
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
        $lease = M("lease");
        $data = $lease->where($where)->delete();
        if (!$data) {
            $this->error('删除失败');exit;
        }
        $this->success('操作成功',U('Admin/Lease/index'));exit;
    }


    /*
     * 租贷顾问添加
     */
    public function add(){
        if(IS_POST) {
            $data = I();
            $data['time'] = time();
            $data['content'] = $data['editorValue'];
            $lease = M("lease");
            $add = $lease->add($data);
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
            if (!$lease->where(array('id'=>$add))->save($arrNew)) {
                $this->error('首页图片上传失败');exit;
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Lease/index.html'</script>";
        }
        $this->assign('l','l');
        $this->assign('n','n');
        $this->display();
    }


    /*
     * 租贷顾问修改
     */
    public function edit(){
        if(IS_POST) {
            $data = I();
            $data['content'] = $data['editorValue'];
            $lease = M("lease");
            $where['id'] = $data['id'];
            unset($data['id']);
            $lease->where($where)->save($data);
            $res = uploadTicketFile();
            if($res) {
                $arrNew = array();
                foreach ($res as $k => $v) {
                    $arrNew[$k] = $v['url'];
                }
                if (!$lease->where($where)->save($arrNew)) {
                    $this->error('首页图片上传失败');
                    exit;
                }
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Lease/index.html'</script>";
        }
        //回显信息
        $id = I();
        $where['id'] = $id['id'];
        $lease = M("lease");
        $info = $lease->where($where)->find();
        $info['content'] = htmlspecialchars_decode($info['content']);
        $this->assign('info',$info);

        $this->assign('l','l');
        $this->assign('m','m');
        $this->display();
    }
}