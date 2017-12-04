<?php
/*
 *
 */
namespace Home\Controller;
use Think\Controller;

class CorrController extends WxController
{
    public function gy(){
        $clid = I('get.');
            $news = M("news");
            $click = $news->where(array("id" => $clid['id']))->find();
            $dj = $click['click'] + 1;
            $news->where(array("id" => $clid['id']))->save(array('click' => $dj));
            $data = $news->alias('a')
                ->field('a.*,b.classname')
                ->join('hak_classs as b   ON b.id = a.clas_id')
                ->where(array("a.id" => $clid['id']))
                ->find();
            $data['content'] = htmlspecialchars_decode($data['content']);
            $this->assign('data', $data);
            $this->display();
    }

    public function dz(){
        $clid = I('post.');
        $news = M("news");
        $zan = $news->where(array("id" => $clid['id']))->find();
        $dz = $zan['zan'] + 1;
        $news->where(array("id" => $clid['id']))->save(array('zan' => $dz));
    }

    public function gywm(){
        $id = I('get.');
        if(!$id['clid']) {
            $classs = M("classs");
            //得到菜单栏
            $data = $classs->where(array("is_an" => 1))->select();
            $news = M("news");
            //得到分类
            $clid = $news->where(array("id" => $id['id']))->find();
            //得到分类下所有数据
            $info = $news
                ->page(1, 10)
                ->where(array("clas_id" => $clid['clas_id']))
                ->order('sequencing desc')
                ->select();
            $this->assign('clid', $clid['clas_id']);
            $this->assign('data', $data);
            $this->assign('info', $info);
            $this->display();
        }else{
            $classs = M("classs");
            //得到菜单栏
            $data = $classs->where(array("is_an" => 1))->select();
            $news = M("news");
            //得到分类下所有数据
            $info = $news
                ->page(1, 10)
                ->where(array("clas_id" => $id['clid']))
                ->order('sequencing desc')
                ->select();
            $this->assign('clid', $id['clid']);
            $this->assign('data', $data);
            $this->assign('info', $info);
            $this->display();
        }
    }

    public function lists(){
        $post = I('post.');
        $news = M("news");
        $count = $news->where(array("clas_id" => $post['clid']))->count();
        $info = $news->alias('a')
            ->field('a.title,a.id,a.picture,a.addtime')
            ->where(array("a.clas_id" => $post['clid']))
            ->page(($post['Page']),10)
            ->order('sequencing desc')
            ->select();
        foreach($info as $k=>$v){
            $info[$k]['addtime'] = date("Y-m-d H:i",$v['addtime']);
        }
        echo json_encode(array(
            'PageCount' => ceil($count/10),
            'DataList' => $info,
        ));
    }
}

