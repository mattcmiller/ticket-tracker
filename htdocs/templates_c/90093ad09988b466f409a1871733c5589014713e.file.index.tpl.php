<?php /* Smarty version Smarty-3.1.18, created on 2014-08-09 00:26:37
         compiled from "templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9443098595386bda3e62481-64232939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90093ad09988b466f409a1871733c5589014713e' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1407536793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9443098595386bda3e62481-64232939',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5386bda3e715d3_71633297',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386bda3e715d3_71633297')) {function content_5386bda3e715d3_71633297($_smarty_tpl) {?>

<!doctype html>
	<html lang="en">
		<head>
			<meta charset="utf-8" />
			<title>Ticket Tracker System</title>
			<link rel="stylesheet" href="css/style.css" />
			<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		</head>
		<body>
 			<div class="bg">
				<div id="inner">	
						<?php echo $_smarty_tpl->getSubTemplate ("login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
	
						<div class="clear"></div>
				</div>
			</div>
		</body>
	</html>


<?php }} ?>
