<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;

/**
 * 相册控制器
 */
class AlbumController extends BaseController{

    /**
     * 相册列表
     */
    public function index(){
        $this->assign('r','r');
        $this->assign('s','s');
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
            $album = M("album");
            $where['a.name'] = array('like','%'.$like.'%');
            $counts = $album->count();
            $count = $album->alias('a')->where($where)->count();
            $info = $album->alias('a')
                ->field('a.*')
                ->where($where)
                ->limit($start,$length)
                ->order('sequencing desc')
                ->select();
            foreach($info as $k=>$v){
                if($v['is_en'] == '1'){
                    $info[$k]['is_en'] = '是';
                }else{
                    $info[$k]['is_en'] = '否';
                }
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
            $album = M("album");
            $count = $album->count();
            $info = $album->alias('a')
                ->limit($start,$length)
                ->order('sequencing desc')
                ->select();
            foreach($info as $k=>$v){
                if($v['is_en'] == '1'){
                    $info[$k]['is_en'] = '是';
                }else{
                    $info[$k]['is_en'] = '否';
                }
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
     * 删除相册
     */
    public function dete(){
        $id = I('get.');
        $where['id'] = $id['id'];
        $album = M("album");
        $data = $album->where($where)->delete();
        if (!$data) {
            $this->error('删除失败');exit;
        }
        $this->success('操作成功',U('Admin/Album/index'));exit;
    }


    /*
     * 相册添加
     */
    public function add(){
        if(IS_POST) {
            $data = I();
            $album = M("album");
            $add = $album->add($data);
            if (!$add) {
                $this->error('添加失败');exit;
            }
            $res = uploadTicketFile();
            if (!$res) {
                $this->error('封面图片上传失败');exit;
            }
            $arrNew=array();
            foreach($res as $k=>$v){
                $arrNew[$k]=$v['url'];
            }
            if (!$album->where(array("id"=>$add))->save($arrNew)) {
                $this->error('封面图片上传失败');exit;
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Album/index.html'</script>";
        }
        $this->assign('r','r');
        $this->assign('j','j');
        $this->display();
    }


    /*
     * 相册修改
     */
    public function edit(){
        if(IS_POST) {
            $data = I();
            $album = M("album");
            $where['id'] = $data['id'];
            $album->where($where)->save($data);
            $res = uploadTicketFile();
            if($res) {
                $arrNew=array();
                foreach($res as $k=>$v){
                    $arrNew[$k]=$v['url'];
                }
                if (!$album->where(array("id"=>$data['id']))->save($arrNew)) {
                    $this->error('封面图片上传失败');exit;
                }
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Album/index.html'</script>";
        }
        //回显信息
        $id = I();
        $where['id'] = $id['id'];
        $album = M("album");
        $info = $album->where($where)->find();
        $this->assign('info',$info);

        $this->assign('r','r');
        $this->assign('s','s');
        $this->display();
    }

    /*
     * 添加相册图片
     */
    public function add_img(){
        if(IS_POST) {
            $data = I();
            $album_img = M("album_img");
            $add = $album_img->add($data);
            if (!$add) {
                $this->error('添加失败');exit;
            }
            $res = uploadTicketFile();
            if (!$res) {
                $this->error('图片上传失败');exit;
            }
            $arrNew=array();
            foreach($res as $k=>$v){
                $arrNew[$k]=$v['url'];
            }
            if (!$album_img->where(array("id"=>$add))->save($arrNew)) {
                $this->error('封面图片上传失败');exit;
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Album/index.html'</script>";
        }
        $id = I();
        $this->assign('id',$id['id']);
        $this->assign('r','r');
        $this->assign('s','s');
        $this->display();
    }


    /*
     * 相册图片
     */
    public function part(){
        $id = I();
        $album_img = M("album_img");
        $where['album_id'] = $id['id'];
        $count = $album_img->where($where)->count();
        $page = new Page($count, 15);
        $data = $album_img->where($where)->limit($page->firstRow, $page->listRows)->select();
        $this->assign('info',$data);
        $this->assign('page', $page->show());// 赋值分页输出
        $this->assign('r','r');
        $this->assign('s','s');
        $this->display();
    }

    /*
     * 相册图片删除
     */
    public function dete_img(){
        $id = I('get.');
        $album_img = M("album_img");
        $where['id'] = $id['id'];
        $data = $album_img->where($where)->delete();
        if (!$data) {
            $this->error('删除失败');exit;
        }
        $this->success('删除成功',U('Admin/Album/part'));exit;
    }
}