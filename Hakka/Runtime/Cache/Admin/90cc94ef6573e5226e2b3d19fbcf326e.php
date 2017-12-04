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
<title>广告列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 广告管理 <span class="c-gray en">&gt;</span> 广告列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<form action="<?php echo U('Admin/Adver/lists');?>" method="post">
	<div class="text-c">
		<input type="text" name="title" id="" placeholder=" 广告标题" style="width:250px" class="input-text">
		<input type="text" name="name" id="" placeholder=" 商家名称" style="width:250px" class="input-text">
				<span class="select-box inline">
					<select name="status" class="select">
						<option value="">所有</option>
						<option value="1"<?php if(I('status') == 1): ?>selected<?php endif; ?>>腕表珠宝眼镜</option>
						<option value="2"<?php if(I('status') == 2): ?>selected<?php endif; ?>>车</option>
						<option value="3"<?php if(I('status') == 3): ?>selected<?php endif; ?>>餐饮</option>
						<option value="4"<?php if(I('status') == 4): ?>selected<?php endif; ?>>服装</option>
						<option value="5"<?php if(I('status') == 5): ?>selected<?php endif; ?>>家居生活</option>
						<option value="6"<?php if(I('status') == 6): ?>selected<?php endif; ?>>电器</option>
						<option value="7"<?php if(I('status') == 7): ?>selected<?php endif; ?>>健康医疗</option>
						<option value="8"<?php if(I('status') == 8): ?>selected<?php endif; ?>>婚纱婚庆</option>
						<option value="9"<?php if(I('status') == 9): ?>selected<?php endif; ?>>鞋包美妆</option>
						<option value="10"<?php if(I('status') == 10): ?>selected<?php endif; ?>>房子</option>
						<option value="11"<?php if(I('status') == 11): ?>selected<?php endif; ?>>其他</option>
					</select>
				</span>
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜广告</button>
	</div>
	</form>
	<div class="cl pd-5 bg-1 bk-gray mt-20"><a class="btn btn-primary radius" onclick="picture_add('添加图文广告','<?php echo U('Admin/Adver/add');?>')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加图文广告</a> <a class="btn btn-primary radius" onclick="picture_add('添加视频广告','<?php echo U('Admin/Adver/adds');?>')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加视频广告</a></span> <span class="r">共有数据：<strong><?php echo ($cont); ?></strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover">
			<thead>
				<tr class="text-c">
					<th width="100">标题</th>
					<th width="100">城市</th>
					<th width="100">分类</th>
					<th width="100">商家名称</th>
					<th width="100">商家地址</th>
					<th width="100">商家手机</th>
					<th width="100">添加时间</th>
					<th width="100">点击量</th>
					<th width="100">点赞数</th>
					<th width="100">剩余推广费用</th>
					<th width="100">广告类型</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tbody>
				<tr class="text-c">
					<td><?php echo ($list["title"]); ?></td>
					<td><?php echo ($list["area"]); ?></td>
					<td><?php echo ($list["classname"]); ?></td>
					<td><?php echo ($list["name"]); ?></td>
					<td><?php echo ($list["address"]); ?></td>
					<td><?php echo ($list["phone"]); ?></td>
					<td><?php echo date("Y-m-d H:i",$list['time']);?></td>
					<td><?php echo ($list["click"]); ?></td>
					<td><?php echo ($list["goods"]); ?></td>
					<td><?php echo ($list["money"]); ?></td>
					<td>
						<?php switch($list["type"]): case "1": ?>图文广告<?php break;?>
							<?php case "2": ?>视频广告<?php break;?>
							<?php default: ?>其他<?php endswitch;?>
					</td>
					<td class="td-manage">
						<a onclick="is_status('<?php echo ($list["id"]); ?>','2')" class="btn btn-success-outline size-MINI radius" style="text-decoration:none" href="javascript:;" title="置顶"><i class="Hui-iconfont">置顶</i></a>
						<a style="text-decoration:none" class="ml-5" onClick="member_edit('查看得钱用户','<?php echo U('Admin/Adver/details',array('id'=>$list['id']));?>')" href="javascript:;" title="查看得钱用户"><i class="Hui-iconfont">&#xe709;</i></a>
						<a style="text-decoration:none" class="ml-5" onClick="picture_edit('广告编辑','<?php echo U('Admin/Adver/edit',array('id'=>$list['id']));?>')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
						<a style="text-decoration:none" class="ml-5" onClick="picture_del(this,'<?php echo U('Admin/Adver/dete',array('id'=>$list['id']));?>')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe706;</i></a>
					</td>
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

function member_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}

/*删除*/
function picture_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'POST',
			url: id,
			dataType: 'json',
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
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
		content: url,
		end: function () {
			location.reload();
		}
	});
	layer.full(index);
}

function shuaxin() {
	location.replace(location.href);
}

function is_status(id, s) {
	layer.confirm('确认要该操作？',function(index){
		$.ajax({
			type: 'post',
			url: '<?php echo U("Admin/Adver/do_is_status");?>',
			data: {
				uid: id,
				status: s
			},
			success:function(data) {
				if (data == 1) {
					shuaxin();
				} else {
					layer.msg(data, {icon: 2, time: 2000});
				}
			}
		});
	});
}
</script>
</body>
</html>