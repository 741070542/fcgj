<?php


namespace Admin\Controller;
use Think\Controller;

/**
 * 基础控制器
 */
class BaseController extends Controller {
    
    /**
     * 初始化操作
     */
    public function _initialize() 
    {
        // 判断用户是否登录
        $sess = session();
        $admin = M("admin");
        $where['admin_id'] = $sess['admin_id'];
        $where['password'] = $sess['passwordXc'];
        $data = $admin->where($where)->find();
        if(!$data){
            $this->redirect('Admin/Admin/login');
            exit;
        }
    }

}