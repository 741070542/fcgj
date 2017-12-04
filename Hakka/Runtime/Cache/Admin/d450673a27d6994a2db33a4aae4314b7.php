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


        <li class="nav-parent"><a href=""><i class="fa fa-bug"></i> <span>Bug Tracker</span></a>
          <ul class="children">
            <li><a href="bug-tracker.html"><i class="fa fa-caret-right"></i> Summary</a></li>
            <li><a href="bug-issues.html"><i class="fa fa-caret-right"></i> Issues</a></li>
            <li><a href="view-issue.html"><i class="fa fa-caret-right"></i> View Issue</a></li>
          </ul>
        </li>


        <li><a href="maps.html"><i class="fa fa-map-marker"></i> <span>Maps</span></a></li>
        <li class="nav-parent"><a href=""><i class="fa fa-file-text"></i> <span>Pages</span></a>
          <ul class="children">
            <li><a href="calendar.html"><i class="fa fa-caret-right"></i> Calendar</a></li>
            <li><a href="media-manager.html"><i class="fa fa-caret-right"></i> Media Manager</a></li>
            <li><a href="timeline.html"><i class="fa fa-caret-right"></i> Timeline</a></li>
            <li><a href="blog-list.html"><i class="fa fa-caret-right"></i> Blog List</a></li>
            <li><a href="blog-single.html"><i class="fa fa-caret-right"></i> Blog Single</a></li>
            <li><a href="people-directory.html"><i class="fa fa-caret-right"></i> People Directory</a></li>
            <li><a href="profile.html"><i class="fa fa-caret-right"></i> Profile</a></li>
            <li><a href="invoice.html"><i class="fa fa-caret-right"></i> Invoice</a></li>
            <li><a href="search-results.html"><i class="fa fa-caret-right"></i> Search Results</a></li>
            <li><a href="blank.html"><i class="fa fa-caret-right"></i> Blank Page</a></li>
            <li><a href="notfound.html"><i class="fa fa-caret-right"></i> 404 Page</a></li>
            <li><a href="locked.html"><i class="fa fa-caret-right"></i> Locked Screen</a></li>
            <li><a href="signin.html"><i class="fa fa-caret-right"></i> Sign In</a></li>
            <li><a href="signup.html"><i class="fa fa-caret-right"></i> Sign Up</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href="layouts.html"><i class="fa fa-laptop"></i> <span>Skins &amp; Layouts</span></a>
          <ul class="children">
            <li><a href="layouts.html"><i class="fa fa-caret-right"></i> General Layouts</a></li>
            <li><a href="horizontal-menu.html"><i class="fa fa-caret-right"></i> Top Menu</a></li>
            <li><a href="horizontal-menu2.html"><i class="fa fa-caret-right"></i> Top Menu w/ Sidebar</a></li>
            <li><a href="fixed-width.html"><i class="fa fa-caret-right"></i> Fixed Width Page</a></li>
            <li><a href="fixed-width2.html"><i class="fa fa-caret-right"></i> Fixed Width w/ Menu</a></li>
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
          <li style="color: royalblue">修改密码</li>
        </ol>
      </div>
    </div>

  <div class="contentpanel">

    <div class="panel panel-default">
      <div class="panel-body panel-body-nopadding">
        <form class="form-horizontal form-bordered" action="<?php echo U('Admin/Admin/editpassword');?>" method="post">

          <div class="form-group">
            <label class="col-sm-3 control-label">账号</label>
            <div class="col-sm-6">
              <input type="text" placeholder="<?php echo session('user_name');?>" class="form-control" disabled="" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">原密码</label>
            <div class="col-sm-6">
              <input name="passwordx" type="password" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">新密码</label>
            <div class="col-sm-6">
              <input name="password2" type="password" class="form-control" required/>
            </div>
          </div>

          <div class="panel-footer">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <button class="btn btn-primary">提交</button>&nbsp;
                <button class="btn btn-default">取消</button>
              </div>
            </div>
          </div>

        </form>

      </div><!-- panel-body -->
    </div><!-- panel -->
  </div><!-- panel -->



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

<script src="/Public/js/custom.js"></script>

<script type="text/javascript" src="/Public/layer/2.4/layer.js"></script>


  <script>

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

jQuery(document).ready(function() {

  var table = $('#table1').DataTable({
    "sPaginationType": "full_numbers",
    "processing": true,
    "serverSide": true,
    "search": {
      "search": ""
    },
    ajax: {url: "<?php echo U('Admin/Admin/editpassword');?>", dataType: 'json'},
    "columns": [
      {"data":"id"},
      {"data":"phone"},
      {"data":"name"},
      {"data":"source"},
      {"data":"reservation"},
      {"data":"message"},
      {"data":"time"},
      {data: null, render: function (data, type, full, meta) {
        console.log(full.id);
        var html = '';
        if (type = "display") {
          html =
                  '<a class="btn btn-success" href="/Admin/Message/edit/id/'+full.id+'" >'+'<i class="fa fa-pencil"></i></a>'+ '&nbsp;&nbsp;&nbsp;'+
                  '<a class="btn btn-danger" onclick="picture_del('+full.id+')">'+'<i class="fa fa-trash-o"></i></ a>';
        }
        return html;
      }
      }
    ],
    "columnDefs": [
      {targets: [0,1,2,3,4,5,6,7], "orderable": false}
    ],
    "language": {
      "paginate": {
        "first": "首页",
        "previous": "上一页",
        "next": "下一页",
        "last": "末页"
      }
    }
  });
});
  </script>


</body>
</html>