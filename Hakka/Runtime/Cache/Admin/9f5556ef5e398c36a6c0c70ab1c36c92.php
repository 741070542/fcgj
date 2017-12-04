<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form class="" action="<?php echo U('Admin/Up/add');?>" method="post" enctype="multipart/form-data">
        <input type="file" name="img[]" accept="image/gif,image/jpeg,image/jpg,image/png" class="" required/>
        <input type="file" name="img[]" accept="image/gif,image/jpeg,image/jpg,image/png" class="" required/>
        <input type="file" name="add[]" accept="image/gif,image/jpeg,image/jpg,image/png" class="" required/>
        <button class="btn btn-primary">提交</button>&nbsp;
    </form>
</body>
</html>