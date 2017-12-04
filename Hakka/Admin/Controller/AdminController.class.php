<?php

namespace Admin\Controller;

use Think\Controller;
use Think\Verify;

class AdminController extends Controller {
    /**
     * 管理员登陆
     */
    public function login(){
        if(IS_POST){
//            $verify = new Verify();
//            if (!$verify->check(I('post.vertify'), "admin_login")) {
//                $this->error('验证码错误，请重新登陆...');
//            }
            $condition['user_name'] = I('post.username','','strip_tags');
            $condition['password'] = I('post.password','','strip_tags');
            if(!empty($condition['user_name']) && !empty($condition['password'])){
                $condition['password'] = md5($condition['password']);
               	$admin = M('admin');
                $admin_info = $admin->where($condition)->find();
                if(is_array($admin_info)){
                    session('admin_id',$admin_info['admin_id']);
                    session('user_name',$admin_info['user_name']);
                    session('last_login',$admin_info['last_login']);
                    session('passwordXc',$admin_info['password']);
                    M('admin')->where("admin_id = ".$admin_info['admin_id'])->save(array('last_login'=>time()));
                    $this->redirect('Index/index', array(), 0, '登陆成功，页面跳转中...');
                }else{
                    $this->error("账号密码不正确！");
                }
            }else{
                $this->error("账号密码不正确！");
            }
        }
        
        $this->display();
    }
    
    /**
     * 退出登陆
     */
    public function logout(){
        session_unset();
        session_destroy();
        $this->success("退出成功",U('Admin/Admin/login'));
    }
    
    /**
     * 验证码获取
     */
    public function vertify()
    {
        $config = array(
			'codeSet' =>'0123456789',
            'fontSize' => 30,
            'length' => 4,
            'useCurve' => true,
            'useNoise' => false,
        );
        $Verify = new Verify($config);
        $Verify->entry("admin_login");
    }

	/**
	 * 管理员修改密码
	 */
	public function editpassword(){
		if(IS_POST){
            $post = I('post.');
            $admin = M("admin");
            $where['admin_id'] = 1;
            $paw = $admin->where($where)->find();
            if($paw['password'] != md5($post['passwordx'])){
                $this->error("修改失败，密码错误");
            }
            $pwd = $post['password2'];
            $save['password'] = md5($pwd);
            $data = $admin->where($where)->save($save);
            if(!$data){
                $this->error("修改失败");
            }
            session_unset();
            session_destroy();

            echo "<script>window.parent.location.href='".C("HTML_URL")."/Admin/Index/index.html'</script>";
            exit;

        }
		$this->display();
	}
}