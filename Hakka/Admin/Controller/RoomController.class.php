<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * 房源推荐控制器
 */
class RoomController extends BaseController{

    /**
     * 房源推荐列表
     */
    public function index(){
        $this->assign('o','o');
        $this->assign('p','p');
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
            $room = M("room");
            $where['a.title'] = array('like','%'.$like.'%');
            $counts = $room->count();
            $count = $room->alias('a')->where($where)->count();
            $info = $room->alias('a')
                ->field('a.*')
                ->where($where)
                ->limit($start,$length)
                ->order('sequencing desc')
                ->select();
            foreach($info as $k=>$v){
//                $content = htmlspecialchars_decode($v['content']);
                $info[$k]['content'] = getSubstr($v['content'],0,15);
                if($v['type'] == '1'){
                    $info[$k]['type'] = '精装';
                }else{
                    $info[$k]['type'] = '清水';
                }
                if($v['is_recommend'] == '1'){
                    $info[$k]['is_recommend'] = '是';
                }else{
                    $info[$k]['is_recommend'] = '否';
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
            $room = M("room");
            $count = $room->count();
            $info = $room->alias('a')
                ->limit($start,$length)
                ->order('sequencing desc')
                ->select();
            foreach($info as $k=>$v){
//                $content = htmlspecialchars_decode($v['content']);
                $info[$k]['content'] = getSubstr($v['content'],0,15);
                if($v['type'] == '1'){
                    $info[$k]['type'] = '精装';
                }else{
                    $info[$k]['type'] = '清水';
                }
                if($v['is_recommend'] == '1'){
                    $info[$k]['is_recommend'] = '是';
                }else{
                    $info[$k]['is_recommend'] = '否';
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
     * 删除
     */
    public function dete(){
        $id = I('get.');
        $where['id'] = $id['id'];
        $room = M("room");
        $data = $room->where($where)->delete();
        if (!$data) {
            $this->error('删除失败');exit;
        }
        $this->success('操作成功',U('Admin/Room/index'));exit;
    }


    /*
     * 房源推荐添加
     */
    public function add(){
        if(IS_POST) {
            $data = I();
            $data['nettop'] = 4;
            $data['time'] = time();
            $room = M("room");
            $add = $room->add($data);
            if (!$add) {
                $this->error('添加失败');exit;
            }
            $res = uploadTicketFile();
            if (!$res) {
                $this->error('首页图片上传失败');exit;
            }
            $arrNew=array();
            $arrNew['img'] = $res[0]['url'];
            $room->where(array('id'=>$add))->save($arrNew);

            foreach($res as $k=>$v){
                $img[$k]=$v['url'];
            }
            unset($img[0]);
            foreach($img as $k=>$v){
                $room_img = M("room_img");
                $add_img['room_id'] = $add;
                $add_img['img'] = $v;
                $room_img->add($add_img);
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Room/index.html'</script>";
        }
        $this->assign('o','o');
        $this->assign('q','q');
        $this->display();
    }


    /*
     * 房源推荐修改
     */
    public function edit(){
        if(IS_POST) {
            $data = I();
            $room = M("room");
            $where['id'] = $data['id'];
            $room->where($where)->save($data);
            $res = uploadFile("room");
            if($res) {
                foreach($res as $k=>$v){
                    if($v['key'] == 'img1'){
                        $arrNew = array();
                        $arrNew['img'] = C('HTML_URL') . "/Public/uploads/room/" . $res[0]['savename'];
                        if (!$room->where($where)->save($arrNew)) {
                            $this->error('首页图片修改失败');
                            exit;
                        }
                    }
                    if($v['key'] == 'mytext'){
                        $img = C('HTML_URL')."/Public/uploads/room/".$v['savename'];
                        $room_img = M("room_img");
                        $add_img['room_id'] = $data['id'];
                        $add_img['img'] = $img;
                        $room_img->add($add_img);
                    }
                }
            }
            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Room/index.html'</script>";
        }
        //回显信息
        $id = I();
        $where['id'] = $id['id'];
        $room = M("room");
        $info = $room->where($where)->find();
        $this->assign('info',$info);
        //回显展示图片
        $room_img = M("room_img");
        $img = $room_img->where(array("room_id"=>$id['id']))->select();
        $this->assign('img',$img);

        $this->assign('o','o');
        $this->assign('p','p');
        $this->display();
    }

    /*
     * 删除展示照片
     */
    public function detes(){
        $id = I('get.');
        $where['id'] = $id['id'];
        $room_img = M("room_img");
        $data = $room_img->where($where)->delete();
        if (!$data) {
            $this->error('删除失败');exit;
        }
        $this->success('删除成功',U('Admin/Room/index'));exit;
    }
}