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
          <li style="color: royalblue">房源推荐</li>
        </ol>
      </div>
    </div>

  <div class="contentpanel">

    <div class="panel panel-default">
      <div class="panel-body panel-body-nopadding">
        <form class="form-horizontal form-bordered" action="<?php echo U('Admin/Room/add');?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label class="col-sm-3 control-label">标题</label>
            <div class="col-sm-6">
              <input name="tiele" type="text" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">简介</label>
            <div class="col-sm-6">
              <input name="profile" type="text" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">总楼层</label>
            <div class="col-sm-6">
              <input name="floor" type="number" min="1" max="10000" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">几层</label>
            <div class="col-sm-6">
              <input name="few" type="number" min="1" max="10000" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">门牌号</label>
            <div class="col-sm-6">
              <input name="addresses" type="text" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">面积</label>
            <div class="col-sm-6">
              <input name="area" type="number" min="1" max="100000000" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">房源类型</label>
            <div class="col-sm-6">
              <select name="type" id="type" class="form-control">
                <option value="1">精装</option>
                <option value="2">清水</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">户型</label>
            <div class="col-sm-6">
              <input name="family" type="text" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">净高层</label>
            <div class="col-sm-6">
              <input name="nettop" type="text" value="4" class="form-control" disabled=""/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">物业费</label>
            <div class="col-sm-6">
              <input name="cost" type="number" min="1" max="100000000" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">最小租金</label>
            <div class="col-sm-6">
              <input name="small_rent" type="number" min="1" max="100000000" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">最大租金</label>
            <div class="col-sm-6">
              <input name="large_rent" type="number" min="1" max="100000000" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">朝向</label>
            <div class="col-sm-6">
              <input name="toward" type="text" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">备注</label>
            <div class="col-sm-6">
              <input name="remark" type="text" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">是否推荐</label>
            <div class="col-sm-6">
              <select name="is_recommend" id="is_recommend" class="form-control">
                <option value="1">是</option>
                <option value="2">否</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">点击量</label>
            <div class="col-sm-6">
              <input name="click" type="number" min="1" max="100000000" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">排序值</label>
            <div class="col-sm-6">
              <input name="sequencing" type="number" min="1" max="100000000" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">首页图片</label>
            <div class="col-sm-6">
              <input type="file" name="img1[]" accept="image/gif,image/jpeg,image/jpg,image/png" class="form-control" required/>
              标题图片(宽:425px,高:300px)
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">展示图片</label>
            <div class="col-sm-6">
              <div id="InputsWrapper">
              </div>
              <a href="#" id="AddMoreFileBox" class="btn btn-primary">添加更多的展示图片</a>
            </div>
          </div>

          <!--<div class="form-group">-->
            <!--<label class="col-sm-3 control-label">展示图片</label>-->
            <!--<div class="col-sm-6">-->
              <!--<input type="file" id="inputs" name="img2[]" accept="image/gif,image/jpeg,image/jpg,image/png" multiple="multiple">-->
              <!--<div id='dd'></div>-->
              <!--<div class="showimgdiv" id="fileList" ></div>-->
            <!--</div>-->
          <!--</div>-->

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

<script src="/Public/js/jquery-ui-1.10.3.min.js"></script>
<script src="/Public/js/bootstrap-timepicker.min.js"></script>
<script src="/Public/js/jquery.maskedinput.min.js"></script>
<script src="/Public/js/jquery.tagsinput.min.js"></script>
<script src="/Public/js/jquery.mousewheel.js"></script>
<script src="/Public/js/dropzone.min.js"></script>
<script src="/Public/js/colorpicker.js"></script>

<script src="/Public/js/custom.js"></script>

<script type="text/javascript" src="/Public/layer/2.4/layer.js"></script>
<!--<script type="text/javascript" src="/Public/utf8-php/ueditor.config.js"></script>-->
<!--<script type="text/javascript" src="/Public/utf8-php/ueditor.all.min.js"> </script>-->
<!--<script type="text/javascript" src="/Public/utf8-php/lang/zh-cn/zh-cn.js"></script>-->
<script type="text/javascript" charset="utf-8" src="/Public/utf8_qiniu_ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/utf8_qiniu_ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/Public/utf8_qiniu_ueditor/lang/zh-cn/zh-cn.js"></script>


  <script>
    $(document).ready(function() {
      var MaxInputs    = 8; //maximum input boxes allowed
      var InputsWrapper  = $("#InputsWrapper"); //Input boxes wrapper ID
      var AddButton    = $("#AddMoreFileBox"); //Add button ID
      var x = InputsWrapper.length; //initlal text box count
      var FieldCount=1; //to keep track of text box added
      $(AddButton).click(function (e) //on add input button click
      {
        if(x <= MaxInputs) //max input box allowed
        {
          FieldCount++; //text box added increment
          //add input box
          $(InputsWrapper).append('<div><br><input type="file" name="mytext[]" style="display: inline-block;vertical-align: middle;width: 200px" id="field_'+ FieldCount +'" value="file '+ FieldCount +'"/><a href="#" class="removeclass"><input type="button" class="btn btn-primary" value="删除"></a></div>');
          x++; //text box increment
        }
        return false;
      });
      $("body").on("click",".removeclass", function(e){ //user click on remove text
        if( x > 1 ) {
          $(this).parent('div').remove(); //remove text box
          x--; //decrement textbox
        }
        return false;
      })
    });
  </script>
  <script>
//    $(document).ready(function () {
//      $("#inputs").change(function () {
//        var fil = this.files;
//        for (var i = 0; i < fil.length; i++) {
//          reads(fil[i]);
//        }
//      });
//    });
//    function reads(fil){
//      var reader = new FileReader();
//      reader.readAsDataURL(fil);
//      reader.onload = function()
//      {
//        document.getElementById("dd").innerHTML += "<img style = 'width:50px;height:50px' src='"+reader.result+"'> &nbsp;";
//      };
//    }
  </script>



</body>
</html>