<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="/Public/css/images/favicon.png" type="image/png">

  <title>复城国际</title>

  <link href="/Public/css/style.default.css" rel="stylesheet">
  <link href="/Public/css/jquery.datatables.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="/Public/js/html5shiv.js"></script>
  <script src="/Public/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>



<!-- Preloader -->
<div id="preloader">
  <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>


<section>

  <div class="leftpanel">

    <div class="logopanel">
      <h1><span>[</span> 复城国际 <span>]</span></h1>
    </div><!-- logopanel -->

    <div class="leftpanelinner">
      <h5 class="sidebartitle">导航</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li <?php if(($c) == "a"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Index/index');?>"><i class="fa fa-home"></i><span>首页</span></a></li>
        <li <?php if(($c) == "b"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Message/index');?>"><i class="fa fa-envelope-o"></i> <span> 客户留言</span></a></li>


        <li class="nav-parent <?php if(($c) == "c"): ?>nav-active active<?php endif; ?>"><a href=""><i class="fa fa-suitcase"></i> <span>新闻分类</span></a>
          <ul class="children" <?php if(($c) == "c"): ?>style="display: block"<?php endif; ?>>
            <li <?php if(($d) == "d"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Classs/index');?>"><i class="fa fa-caret-right"></i>新闻分类列表</a></li>
            <li <?php if(($e) == "e"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Classs/add');?>"><i class="fa fa-caret-right"></i>新增新闻分类</a></li>
          </ul>
        </li>

        <li class="nav-parent <?php if(($f) == "f"): ?>nav-active active<?php endif; ?>"><a href=""><i class="fa fa-camera-retro"></i> <span>新闻动态</span></a>
          <ul class="children" <?php if(($f) == "f"): ?>style="display: block"<?php endif; ?>>
            <li <?php if(($g) == "g"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/News/index');?>"><i class="fa fa-caret-right"></i>新闻列表</a></li>
            <li <?php if(($h) == "h"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/News/add');?>"><i class="fa fa-caret-right"></i>新增新闻</a></li>
          </ul>
        </li>

        <li class="nav-parent <?php if(($i) == "i"): ?>nav-active active<?php endif; ?>"><a href=""><i class="fa fa-coffee"></i> <span>生活配套</span></a>
          <ul class="children" <?php if(($i) == "i"): ?>style="display: block"<?php endif; ?>>
            <li <?php if(($j) == "j"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Life/index');?>"><i class="fa fa-caret-right"></i>生活配套列表</a></li>
            <li <?php if(($k) == "k"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Life/add');?>"><i class="fa fa-caret-right"></i>新增生活配套</a></li>
          </ul>
        </li>

        <li class="nav-parent <?php if(($l) == "l"): ?>nav-active active<?php endif; ?>"><a href=""><i class="fa fa-th-large"></i> <span>租贷顾问</span></a>
          <ul class="children" <?php if(($l) == "l"): ?>style="display: block"<?php endif; ?>>
            <li <?php if(($m) == "m"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Lease/index');?>"><i class="fa fa-caret-right"></i>生活配套列表</a></li>
            <li <?php if(($n) == "n"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Lease/add');?>"><i class="fa fa-caret-right"></i>新增生活配套</a></li>
          </ul>
        </li>

        <li class="nav-parent <?php if(($o) == "o"): ?>nav-active active<?php endif; ?>"><a href=""><i class="fa fa-bank"></i> <span>房源推荐</span></a>
          <ul class="children" <?php if(($o) == "o"): ?>style="display: block"<?php endif; ?>>
            <li <?php if(($p) == "p"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Room/index');?>"><i class="fa fa-caret-right"></i>房源列表</a></li>
            <li <?php if(($q) == "q"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Room/add');?>"><i class="fa fa-caret-right"></i>新增房源</a></li>
          </ul>
        </li>

        <li class="nav-parent <?php if(($r) == "r"): ?>nav-active active<?php endif; ?>"><a href=""><i class="fa fa-picture-o"></i> <span>相册</span></a>
          <ul class="children" <?php if(($r) == "r"): ?>style="display: block"<?php endif; ?>>
            <li <?php if(($s) == "s"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Album/index');?>"><i class="fa fa-caret-right"></i>相册列表</a></li>
            <li <?php if(($j) == "j"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Album/add');?>"><i class="fa fa-caret-right"></i>新增相册</a></li>
          </ul>
        </li>

        <li class="nav-parent <?php if(($u) == "u"): ?>nav-active active<?php endif; ?>"><a href=""><i class="fa fa-briefcase"></i> <span>商务服务</span></a>
          <ul class="children" <?php if(($u) == "u"): ?>style="display: block"<?php endif; ?>>
            <li <?php if(($v) == "v"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Affairs/index');?>"><i class="fa fa-caret-right"></i>商务服务列表</a></li>
            <li <?php if(($w) == "w"): ?>class="active"<?php endif; ?>><a href="<?php echo U('Admin/Affairs/add');?>"><i class="fa fa-caret-right"></i>新增商务服务</a></li>
          </ul>
        </li>



      </ul>
      <!-- infosummary -->

    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->

  <div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>

      <div class="header-right">
        <ul class="headermenu">
          <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
              <img src="/Public/images/photos/loggeduser.png" alt="" />
              <?php echo session("user_name");?>
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
              <li><a href="<?php echo U('Admin/Admin/editpassword');?>"><i class="glyphicon glyphicon-cog"></i>修改密码</a></li>
              <li><a href="<?php echo U('Admin/Admin/logout');?>"><i class="glyphicon glyphicon-log-out"></i>注销</a></li>
            </ul>
          </div>
        </ul>
      </div><!-- header-right -->

    </div><!-- headerbar -->



    

    <div class="pageheader">
      <h2><i class="fa fa-table"></i> 复城国际 <span>复城国际后台管理系统</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">你在这里:</span>
        <ol class="breadcrumb">
          <li style="color: royalblue">商务服务</li>
        </ol>
      </div>
    </div>

    <div class="contentpanel">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <a href="" class="panel-close">&times;</a>
            <a href="" class="minimize">&minus;</a>
          </div><!-- panel-btns -->
          <h3 class="panel-title">商务服务</h3>
        </div>
        <div class="panel-body">
          <br />
          <div class="table-responsive">
            <table class="table" id="table1">
              <thead>
              <tr>
                <th>标题</th>
                <th>人均消费</th>
                <th>联系方式</th>
                <th>首页图片</th>
                <th>地址</th>
                <th>营业时间</th>
                <th>内容</th>
                <th>点击量</th>
                <th>排序值</th>
                <th>操作</th>
              </tr>
              </thead>
            </table>
          </div><!-- table-responsive -->
        </div><!-- panel-body -->
      </div><!-- panel -->
    </div><!-- contentpanel -->



  </div><!-- mainpanel -->
</section>
<script src="/Public/js/jquery-1.11.1.min.js"></script>
<script src="/Public/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/Public/js/bootstrap.min.js"></script>
<script src="/Public/js/modernizr.min.js"></script>
<script src="/Public/js/jquery.sparkline.min.js"></script>
<script src="/Public/js/toggles.min.js"></script>
<script src="/Public/js/retina.min.js"></script>
<script src="/Public/js/jquery.cookies.js"></script>


<script src="/Public/js/jquery.datatables.min.js"></script>
<script src="/Public/js/select2.min.js"></script>

<script src="/Public/js/jquery-ui-1.10.3.min.js"></script>
<script src="/Public/js/bootstrap-timepicker.min.js"></script>
<script src="/Public/js/jquery.maskedinput.min.js"></script>
<script src="/Public/js/jquery.tagsinput.min.js"></script>
<script src="/Public/js/jquery.mousewheel.js"></script>
<script src="/Public/js/dropzone.min.js"></script>
<script src="/Public/js/colorpicker.js"></script>

<script src="/Public/js/custom.js"></script>

<script type="text/javascript" src="/Public/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/utf8-php/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/utf8-php/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/Public/utf8-php/lang/zh-cn/zh-cn.js"></script>


  <script>
    /*删除*/
    function picture_del(obj,id){
      layer.confirm('确认要删除吗？',function(index){
        $.ajax({
          type: 'POST',
          url: '/Admin/Affairs/dete/id/'+id,
          dataType: 'json',
          success: function(data){
            if(data.status == 1){
              $(obj).parents("tr").remove();
              layer.msg('已删除!',{icon:1,time:1000});
            }else{
              layer.msg(data.info,{icon:2,time:1000});
            }
          },
          error:function(data) {
            console.log(data.msg);
          },
        });
      });
    }


jQuery(document).ready(function() {

  var table = $('#table1').DataTable({
    "sPaginationType": "full_numbers",
    "ordering":false,
    "processing": true,
    "serverSide": true,
    "search": {
      "search": ""
    },
    ajax: {url: "<?php echo U('Admin/Affairs/lists');?>", dataType: 'json'},
    "columns": [
      {"data":"title"},
      {"data":"consumption"},
      {"data":"phone"},
      {data: null, render: function (data, type, full, meta) {
        console.log(full.id);
        var html = '';
        if (type = "display") {
          html = '<a href="'+full.img+'" target="_blank"><img src="'+full.img+'" style="width: 50px"></a>';
        }
        return html;
      }
      },
      {"data":"address"},
      {"data":"hours"},
      {"data":"content"},
      {"data":"click"},
      {"data":"sequencing"},
      {data: null, render: function (data, type, full, meta) {
        console.log(full.id);
        var html = '';
        if (type = "display") {
          html =
                  '<a class="btn btn-success" href="/Admin/Affairs/edit/id/'+full.id+'" >'+'<i class="fa fa-pencil"></i></a>'+ '&nbsp;&nbsp;&nbsp;'+
                  '<a class="btn btn-danger" onclick="picture_del(this,'+full.id+')">'+'<i class="fa fa-trash-o"></i></ a>';
        }
        return html;
      }
      }
    ],
    "columnDefs": [
      {targets: [0,1,2,3,4,5,6,7,8,9], "orderable": false}
    ],
    "language": {
      "paginate": {
        "first": "首页",
        "previous": "上一页",
        "next": "下一页",
        "last": "末页"
      },
      "sLengthMenu": "每页显示 _MENU_ 条记录",
      "sZeroRecords": "对不起，查询不到任何相关数据",
      "sInfo": "当前显示 _START_ 到 _END_ 条，共 _TOTAL_ 条记录",
      "sInfoEmtpy": "找不到相关数据",
      "sInfoFiltered": "数据表中共为 _MAX_ 条记录",
      "sProcessing": "正在加载中...",
      "sSearch": "搜索标题"
    }
  });
});
  </script>


</body>
</html>