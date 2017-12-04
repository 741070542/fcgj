<?php
/*
 *
 */
namespace Home\Controller;

use Think\Controller;

class FctController extends WxController
{
    public function fct1(){
        $this->display();
    }

    public function map(){
        $this->display();
    }

    public function floo(){
        $this->display();
    }

    public function album(){
        $album = M("album");
        $data = $album->where(array("is_en"=>1))->order('sequencing desc')->select();
        $this->assign('info', $data);
        $this->display();
    }

    public function img(){
        $id = I('get.');
        $album_img = M("album_img");
        $data = $album_img->where(array("album_id"=>$id['id']))->order('sequencing desc')->select();
        $this->assign('info', $data);
        $this->display();
    }

    public function message(){
        $this->display();
    }
    public function order(){
        $data = I();
        $add['name'] = $data['n'];
        $add['phone'] = $data['p'];
        $add['message'] = $data['c'];
        $add['time'] = time();
        $message = M("message");
        $edit = $message->add($add);
        if (!$edit) {
            echo 400;
        }else{
            echo 200;
        }
    }


}

