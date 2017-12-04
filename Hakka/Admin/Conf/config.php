<?php
return array(
	'URL_MODEL'=>2,
	'LAYOUT_ON' => false,
	'URL_HTML_SUFFIX'       =>  'html',// URL伪静态后缀设置  默认为html
	'TMPL_TEMPLATE_SUFFIX'  =>  '.html',     // 默认模板文件后缀

	// 表单令牌验证相关的配置参数
	'TOKEN_ON'      =>    true,  // 是否开启令牌验证 默认关闭
	'TOKEN_NAME'    =>    '__hash__',    // 令牌验证的表单隐藏字段名称，默认为__hash__
	'TOKEN_TYPE'    =>    'md5',  //令牌哈希验证规则 默认为MD5
	'TOKEN_RESET'   =>    true,  //令牌验证出错后是否重置令牌 默认为true

	'LOAD_EXT_CONFIG'=>'db', // 加载数据库配置文件

	'SHOW_PAGE_TRACE' => true,

	'UPLOAD_FILE_QINIU'     => array (
		'maxSize'           => 5 * 1024 * 1024,//文件大小
		'rootPath'          => './',
		'saveName'          => array ('uniqid', ''),
		'exts'              => ['jpg', 'gif', 'png', 'jpeg'],  // 设置附件上传类型
		'driver'            => 'Qiniu',//七牛驱动
		'driverConfig'      => array (
		'secrectKey'        => 'E9-YOI52RmHC2-vb_auha5IPChp7cbwR8lKdtn72',
		'accessKey'        => 'JJfTnWuM2Yp9-I8BmX4o1BgfpuyQx0cSGNOh6VPm',
		'domain'           => 'oie4y017g.bkt.clouddn.com',
		'bucket'           => 'shop',
		)
	),
);