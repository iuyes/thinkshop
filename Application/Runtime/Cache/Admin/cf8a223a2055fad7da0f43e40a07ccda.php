<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<title>ThinkShop电子商务系统</title>
		<script type='text/javascript' src='/thinkshop/Application/Admin/View/Static/js/jquery.min.js'></script>
<link href='/thinkshop/Application/Admin/View/Static/hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<link href='/thinkshop/Application/Admin/View/Static/css/extend.css' rel='stylesheet' media='screen'>
<script src='/thinkshop/Application/Admin/View/Static/hdjs/js/hdjs.js'></script>
<script src='/thinkshop/Application/Admin/View/Static/hdjs/js/slide.js'></script>
<script src='/thinkshop/Application/Admin/View/Static/hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = '/thinkshop/';
		ROOT = '/thinkshop/';
		WEB = '/thinkshop/';
		URL = 'http://localhost/hdcms/index.php?a=Admin';
</script>
	</head>
	<body>

<div class="wrap">
    <div class="menu_list">
        <ul>
            <li><a href="<?php echo U('Articleclass/index');?>" >分类列表</a></li>
            <li><a href="" class="action">修改分类</a></li>
        </ul>
    </div>
    <div class="title-header">修改分类</div>
    <form method="post" class="hd-form" action="<?php echo U('Articleclass/update');?>" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" />
        <table class="table1">
            <tr>
                <th class="w100">上级</th>
                <td>
                    <select name="parent_id" class="w200">
                                <option value="0">一级栏目</option>
                                    <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($info['parent_id']==$v['id']): ?>selected="selected"<?php endif; ?> ><?php echo str_repeat("&nbsp;&nbsp;",$v['level']); if($v['level']): ?>├─<?php endif; echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                    </select>
                </td>
            </tr>

            <tr>
                <th class="w100">名称</th>
                <td>
                    <input type="text" name="name" class="w300" value="<?php echo ($info["name"]); ?>" />
                </td>
            </tr>
 
            <tr>
                <th class="w100">排序</th>
                <td>
                    <input type="text" name="sort" class="w300" value="<?php echo ($info["sort"]); ?>"/>
                </td>
            </tr>
        </table>
        <div class="position-bottom">
            <input type="submit" value="确定" class="hd-success"/>
        </div>
    </form>
</div>


	</body>
</html>