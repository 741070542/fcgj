<?php
/*
 *推荐房源顾问
 */
namespace Home\Controller;

use Think\Controller;

class RecomController extends WxController
{

    public function index(){
        $get = I("get.");
        if(!$get['sort']){
            $order = 'sequencing desc';
        }
        if($get['sort'] == "1"){
            $order = 'area asc';
            $this->assign('sort', $get['sort']);
        }
        if($get['sort'] == "2"){
            $order = "few asc";
            $this->assign('sort', $get['sort']);
        }
        $room = M("room");
        //得到所有数据
        $info = $room
            ->page(1, 10)
            ->order($order)
            ->select();
        $this->assign('info', $info);
        $this->display();
    }

    public function lists(){
        $post = I('post.');
        if($post['s'] == 1){
            $order = 'area asc';
        }
        if($post['s'] == 2){
            $order = 'few asc';
        }
        if($post['s'] == ''){
            $order = 'sequencing desc';
        }
        $room = M("room");
        $count = $room->count();
        $info = $room->alias('a')
            ->field('a.*')
            ->page(($post['Page']),10)
            ->order($order)
            ->select();
        echo json_encode(array(
            'PageCount' => ceil($count/10),
            'DataList' => $info,
        ));
    }

    public function ation(){
        $id = I('get.');
        $room = M("room");
        $info = $room->where(array("id"=>$id['id']))->find();

        $room_img = M("room_img");
        $img = $room_img->where(array('room_id'=>$id['id']))->select();
        $this->assign('info', $info);
        $this->assign('img', $img);
        $this->display();
    }

    public function order(){
        $data = I();
        $add['name'] = $data['n'];
        $add['phone'] = $data['p'];
        $add['message'] = $data['c'];
        $add['time'] = time();
        $add['source'] = $data['id'];
        $message = M("message");
        $edit = $message->add($add);
        if (!$edit) {
            echo 400;
        }else{
            echo 200;
        }
    }

    public function baidu(){
        $this->display();
    }
}

