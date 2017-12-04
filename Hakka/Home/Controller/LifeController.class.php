<?php
/*
 *生活配套
 */
namespace Home\Controller;

use Think\Controller;

class LifeController extends WxController
{
    public function index(){
        $id = I('get.');
        $lifeclas = M("lifeclas");
        //得到菜单栏
        $data = $lifeclas->select();
        array_unshift($data,array('name'=>'全部','id'=>''));
        $this->assign('data', $data);
        $life = M("life");
        //得到分类下所有数据
        if($id['clid'] != ''){
            $info = $life->page(1, 10)
                ->where(array("lifeclas_id" => $id['clid']))
                ->order('sequencing desc')
                ->select();
            $this->assign('clid', $id['clid']);
            $this->assign('info', $info);
            $this->display();
        }else{
            $info = $life->page(1, 10)
                ->order('sequencing desc')
                ->select();
            $this->assign('clid', $id['clid']);
            $this->assign('info', $info);
            $this->display();
        }
    }

    public function lists(){
        $post = I('post.');
        $life = M("life");
        if($post['clid'] != ''){
            $count = $life->where(array("lifeclas_id" => $post['clid']))->count();
            $info = $life->alias('a')
                ->where(array("a.lifeclas_id" => $post['clid']))
                ->page(($post['Page']),10)
                ->order('sequencing desc')
                ->select();
            echo json_encode(array(
                'PageCount' => ceil($count/10),
                'DataList' => $info,
            ));
        }else{
            $count = $life->count();
            $info = $life->alias('a')
                ->page(($post['Page']),10)
                ->order('sequencing desc')
                ->select();
            echo json_encode(array(
                'PageCount' => ceil($count/10),
                'DataList' => $info,
            ));
        }
    }


    public function ation(){
        $id = I('get.');
        $life = M("life");
        $info = $life->where(array("id"=>$id['id']))->find();
        $info['content'] = htmlspecialchars_decode($info['content']);
        $this->assign('info', $info);
        $this->display();
    }

    public function bus(){
        $affairs = M("affairs");
        //得到分类下所有数据
        $info = $affairs->page(1, 10)
            ->order('sequencing desc')
            ->select();
        $this->assign('info', $info);
        $this->display();
    }

    public function buslists(){
        $post = I('post.');
        $affairs = M("affairs");
        $count = $affairs->count();
        $info = $affairs->alias('a')
            ->page(($post['Page']),10)
            ->order('sequencing desc')
            ->select();
        echo json_encode(array(
            'PageCount' => ceil($count/10),
            'DataList' => $info,
        ));
    }

    public function busation(){
        $id = I('get.');
        $affairs = M("affairs");
        $info = $affairs->where(array("id"=>$id['id']))->find();
        $info['content'] = htmlspecialchars_decode($info['content']);
        $this->assign('info', $info);
        $this->display();
    }
}

