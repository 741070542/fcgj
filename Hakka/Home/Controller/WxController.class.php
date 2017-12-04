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
        $jssdk = new \JSSDK("wxe6309a2a21df1f53", "38d59526851d0fbfc57a598b512f83f2");
        $signPackage = $jssdk->GetSignPackage();
        $this->assign('signPackage', $signPackage);
    }

}