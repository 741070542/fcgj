<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Public/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>商户列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 商家管理 <span class="c-gray en">&gt;</span> 商家列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form action="<?php echo U('Admin/Merchants/lists');?>" method="post">
	<div class="text-c">
		<input type="text" name="name" id="" placeholder=" 商家名称" style="width:250px" class="input-text">
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜商家</button>
	</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"><a class="btn btn-primary radius" onclick="picture_add('添加商户','<?php echo U('Admin/Merchants/add');?>')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加商户</a></span> <span class="r">共有数据：<strong><?php echo ($cont); ?></strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover">
			<thead>
				<tr class="text-c">
					<!--<th width="40"><input name="" type="checkbox" value=""></th>-->
					<th width="80">ID</th>
					<th width="100">商家名称</th>
					<th width="100">商家logo</th>
					<th width="100">商家地址</th>
					<th width="100">商家经度</th>
					<th width="100">商家维度</th>
					<th width="100">手机号码</th>
					<th width="100">添加时间</th>
					<th width="100">推广费用</th>
					<th width="100">冻结金额</th>
					<th width="100">商家余额</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tbody>
				<tr class="text-c">
					<!--<td><input name="" type="checkbox" value=""></td>-->
					<td><?php echo ($list["id"]); ?></td>
					<td><?php echo ($list["name"]); ?></td>
					<td><img width="60" src="<?php echo ($list["logo"]); ?>"></td>
					<td><?php echo ($list["address"]); ?></td>
					<td><?php echo ($list["lon"]); ?></td>
					<td><?php echo ($list["lat"]); ?></td>
					<td><?php echo ($list["phone"]); ?></td>
					<td><?php echo date("Y-m-d H:i",$list['times']);?></td>
					<td><?php echo ($list["promote"]); ?></td>
					<td><?php echo ($list["freeze"]); ?></td>
					<td><?php echo ($list["balance"]); ?></td>
					<td class="td-manage"><a style="text-decoration:none" class="ml-5" onClick="picture_edit('商家编辑','<?php echo U('Admin/Merchants/edit',array('id'=>$list['id']));?>')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,'<?php echo U('Admin/Merchants/dete',array('id'=>$list['id']));?>')" href="javascript:;" title="冻结"><i class="Hui-iconfont">&#xe706;</i></a></td>
				</tr>
			</tbody><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
	</div>
	<?php echo ($page); ?>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/Public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/Public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/Public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8]}// 制定列不参与排序
	]
});

/*编辑*/
function picture_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*删除*/
function picture_del(obj,id){
	layer.confirm('确认要冻结吗？',function(index){
		$.ajax({
			type: 'POST',
			url: id,
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已冻结!',{icon:1,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});
	});
}
/*添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
</script>
</body>
</html>