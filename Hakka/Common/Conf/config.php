<?php

$domin = array(
    "x",
    "localhost",
);
$status = array_search($_SERVER["SERVER_NAME"], $domin);

return array(
    "URL_MODEL" => 2,
    'DB_TYPE' => 'mysql',
    'DB_HOST' => "localhost",
    'DB_NAME' => "fcgj",
    'DB_USER' => "root",
    'DB_PWD' =>'root',
    'DB_PORT' => 3306,
    'DB_PREFIX' => 'hak_',
//模板配置
//    'LAYOUT_ON' => true,
//    'LAYOUT_NAME' => 'layout',
    'SYSLINK' => 'http://ssk.ulittile.com/',
    'LOAD_EXT_FILE' => 'pay', //自动加载Common目录下载PHP文件

    'SYS_CONFIG'=>[
        'VERINME'=>'',
        'VERIPWD'=>'',
        'VERIURL'=>'http://106.ihuyi.cn/webservice/sms.php?',
    ],
    'HTML_URL' => 'http://www.fcgj.com:8080',
    'appID' => 'wxe6309a2a21df1f53',
    'appsecret' => '38d59526851d0fbfc57a598b512f83f2',


);
