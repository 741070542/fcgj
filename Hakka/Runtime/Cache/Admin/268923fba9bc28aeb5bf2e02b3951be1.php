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
          <li style="color: royalblue">新闻列表</li>
        </ol>
      </div>
    </div>

  <div class="contentpanel">

    <div class="panel panel-default">
      <div class="panel-body panel-body-nopadding">
        <form class="form-horizontal form-bordered" action="<?php echo U('Admin/News/edit');?>" method="post" enctype="multipart/form-data">

          <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">

          <div class="form-group">
            <label class="col-sm-3 control-label">所属分类</label>
            <div class="col-sm-6">
              <select name="clas_id" class="form-control">
                <?php if(is_array($clas)): $i = 0; $__LIST__ = $clas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><option value="<?php echo ($list["id"]); ?>" <?php if(($list["mr"]) == "mr"): ?>selected = "selected"<?php endif; ?>><?php echo ($list["classname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">标题</label>
            <div class="col-sm-6">
              <input name="title" value="<?php echo ($info["title"]); ?>" type="text" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">标题图片</label>
            <div class="col-sm-6">
              <input name="picture" type="file" accept="image/gif,image/jpeg,image/jpg,image/png" class="form-control"/>
              <a href="<?php echo ($info["picture"]); ?>" target="_blank"><img src="<?php echo ($info["picture"]); ?>" style="width: 50px"></a>
              标题图片(宽:425px,高:300px)
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">时间</label>
            <div class="col-sm-6">
              <input name="time" value="<?php echo ($info["time"]); ?>" type="date" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">内容</label>
            <div class="col-sm-6">
              <script id="editor" type="text/plain" style="width:100%;height:400px;"><?php echo ($info["content"]); ?></script>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">点赞</label>
            <div class="col-sm-6">
              <input name="zan" value="<?php echo ($info["zan"]); ?>" type="number" name="points" min="1" max="100000000" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">点击量</label>
            <div class="col-sm-6">
              <input name="click" value="<?php echo ($info["click"]); ?>" type="number" name="points" min="1" max="100000000" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">排序值</label>
            <div class="col-sm-6">
              <input name="sequencing" value="<?php echo ($info["sequencing"]); ?>" type="number" name="points" min="1" max="100000000" class="form-control" required/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label">推荐新闻</label>
            <div class="col-sm-6">
              <select class="select2" name="select[]" multiple="multiple" data-placeholder="">
                <?php if(is_array($recom)): $i = 0; $__LIST__ = $recom;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lists): $mod = ($i % 2 );++$i;?><option value="<?php echo ($lists["id"]); ?>" <?php if(($lists["rec"]) == "s"): ?>selected = "selected"<?php endif; ?>><?php echo ($lists["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
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


  <script type="text/javascript">
    jQuery(document).ready(function(){

      "use strict";
      // Select2
      jQuery(".select2").select2({
        width: '100%'
      });

    });
  </script>

  <script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    //    var ue = UE.getEditor('editor');

    var ue = UE.getEditor('editor');


    function isFocus(e){
      alert(UE.getEditor('editor').isFocus());
      UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
      UE.getEditor('editor').blur();
      UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
      var value = prompt('插入html代码', '');
      UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
      enableBtn();
      UE.getEditor('editor');
    }
    function getAllHtml() {
      alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
      var arr = [];
      arr.push("使用editor.getContent()方法可以获得编辑器的内容");
      arr.push("内容为：");
      arr.push(UE.getEditor('editor').getContent());
      alert(arr.join("\n"));
    }
    function getPlainTxt() {
      var arr = [];
      arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
      arr.push("内容为：");
      arr.push(UE.getEditor('editor').getPlainTxt());
      alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
      var arr = [];
      arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
      UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
      alert(arr.join("\n"));
    }
    function setDisabled() {
      UE.getEditor('editor').setDisabled('fullscreen');
      disableBtn("enable");
    }

    function setEnabled() {
      UE.getEditor('editor').setEnabled();
      enableBtn();
    }

    function getText() {
      //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
      var range = UE.getEditor('editor').selection.getRange();
      range.select();
      var txt = UE.getEditor('editor').selection.getText();
      alert(txt)
    }

    function getContentTxt() {
      var arr = [];
      arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
      arr.push("编辑器的纯文本内容为：");
      arr.push(UE.getEditor('editor').getContentTxt());
      alert(arr.join("\n"));
    }
    function hasContent() {
      var arr = [];
      arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
      arr.push("判断结果为：");
      arr.push(UE.getEditor('editor').hasContents());
      alert(arr.join("\n"));
    }
    function setFocus() {
      UE.getEditor('editor').focus();
    }
    function deleteEditor() {
      disableBtn();
      UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
      var div = document.getElementById('btns');
      var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
      for (var i = 0, btn; btn = btns[i++];) {
        if (btn.id == str) {
          UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        } else {
          btn.setAttribute("disabled", "true");
        }
      }
    }
    function enableBtn() {
      var div = document.getElementById('btns');
      var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
      for (var i = 0, btn; btn = btns[i++];) {
        UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
      }
    }

    function getLocalData () {
      alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
      UE.getEditor('editor').execCommand( "clearlocaldata" );
      alert("已清空草稿箱")
    }
  </script>


</body>
</html>