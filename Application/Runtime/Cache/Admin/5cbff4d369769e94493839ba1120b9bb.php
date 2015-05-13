<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
		<title>ThinkShop电子商务系统</title>
		<script type='text/javascript' src='/thinkshop/Application/Admin/View/Static/js/jquery-1.8.2.min.js'></script>
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
		HDPHP = 'http://localhost/hdcms/hd/HDPHP/hdphp';
		HDPHPDATA = 'http://localhost/hdcms/hd/HDPHP/hdphp/Data';
		HDPHPTPL = 'http://localhost/hdcms/hd/HDPHP/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/hdcms/hd/HDPHP/hdphp/Extend';
		APP = 'http://localhost/hdcms/index.php?a=Admin';
		CONTROL = '/thinkshop/'+'index.php?m=Admin&c=Index';
		METH = 'http://localhost/hdcms/index.php?a=Admin&c=Index&m=index';
		GROUP = 'http://localhost/hdcms/hd';
		TPL = 'http://localhost/hdcms/hd/Hdcms/Admin/Tpl';
		CONTROLTPL = 'http://localhost/hdcms/hd/Hdcms/Admin/Tpl/Index';
		STATIC = 'http://localhost/hdcms/Static';
		PUBLIC = 'http://localhost/hdcms/hd/Hdcms/Admin/Tpl/Public';
		HISTORY = 'http://localhost/hdcms/index.php?a=Admin&c=Login&m=login';
		HTTPREFERER = 'http://localhost/hdcms/index.php?a=Admin&c=Login&m=login';
		TEMPLATE = 'http://localhost/hdcms/template/default';
</script>
	</head>
	<body>

<div class="wrap">
    <div class="menu_list">
        <ul>
            <li><a href="<?php echo U('Attribute/index');?>" >属性列表</a></li>
            <li><a href="" class="action">修改属性</a></li>
        </ul>
    </div>
    <div class="title-header">修改属性</div>
    <form method="post" class="hd-form" action="<?php echo U('Attribute/update');?>">
    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>" />
        <table class="table1">
            <tr>
                <th class="w100">所属类型</th>
                <td>
                      <select name="type_id" class="w200">
                                <option value="0">请选择</option>
                                    <?php if(is_array($types)): foreach($types as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($info['type_id']==$v['id']): ?>selected="selected"<?php endif; ?>><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
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
                <th class="w100">属性类型</th>
                <td>
                    <label><input type="radio" name="type" value="0" <?php if($info['type']==0): ?>checked="checked"<?php endif; ?>/> 唯一属性</label>&nbsp;
                    <label><input type="radio" name="type" value="1" <?php if($info['type']==1): ?>checked="checked"<?php endif; ?>/> 单选属性</label>&nbsp;
                    <label><input type="radio" name="type" value="2" <?php if($info['type']==2): ?>checked="checked"<?php endif; ?>/> 复选属性</label>&nbsp;
                </td>
            </tr>
            <tr>
                <th class="w100">输入方式</th>
                <td>
                    <label><input type="radio" name="input_type" value="0" <?php if($info['input_type']==0): ?>checked="checked"<?php endif; ?>/> 文本框</label>&nbsp;
                    <label><input type="radio" name="input_type" value="1" <?php if($info['input_type']==1): ?>checked="checked"<?php endif; ?>/> 下拉列表</label>&nbsp;
                    <label><input type="radio" name="input_type" value="2" <?php if($info['input_type']==2): ?>checked="checked"<?php endif; ?>/> 文本域</label>&nbsp;
                </td>
            </tr>
            <tr>
                <th class="w100">属性值</th>
                <td>
                    <textarea name="value" class="w350 h100"><?php echo ($info["value"]); ?></textarea>
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