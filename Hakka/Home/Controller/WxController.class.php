<?php

namespace Home\Controller;
use Think\Controller;

/**
 * 基础控制器
 */
class WxController extends Controller {
    
    /**
     * 初始化操作
     */
    public function _initialize() 
    {
        require_once "jssdk.php";
        $jssdk = new \JSSDK(C("appID"),C("appsecret"));
        $signPackage = $jssdk->GetSignPackage();
        $this->assign('signPackage', $signPackage);
    }

}