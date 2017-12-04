<?php
/*
 *租贷顾问
 */
namespace Home\Controller;

use Think\Controller;

class LeaseController extends WxController
{

    public function lease(){
        $lease = M("lease");
        //得到所有数据
        $info = $lease
            ->page(1, 10)
            ->order('sequencing desc')
            ->select();
        foreach($info as $k=>$v){
            $info[$k]['content'] = htmlspecialchars_decode($v['content']);
        }
        $this->assign('info', $info);
        $this->display();
    }

    public function lists(){
        $post = I('post.');
        $lease = M("lease");
        $count = $lease->count();
        $info = $lease->alias('a')
            ->field('a.*')
            ->page(($post['Page']),10)
            ->order('sequencing desc')
            ->select();
        foreach($info as $k=>$v){
            $info[$k]['content'] = htmlspecialchars_decode($v['content']);
        }
        echo json_encode(array(
            'PageCount' => ceil($count/10),
            'DataList' => $info,
        ));
    }

    public function ation(){
        $id = I('get.');
        $lease = M("lease");
        $info = $lease->where(array("id"=>$id['id']))->find();
        $info['content'] = htmlspecialchars_decode($info['content']);
        $this->assign('info', $info);
        $this->display();
    }
}

