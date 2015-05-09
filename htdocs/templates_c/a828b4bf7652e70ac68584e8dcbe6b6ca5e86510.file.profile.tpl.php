<?php /* Smarty version Smarty-3.1.18, created on 2014-08-02 00:29:01
         compiled from "templates/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49258271253d02d631755d0-04081767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a828b4bf7652e70ac68584e8dcbe6b6ca5e86510' => 
    array (
      0 => 'templates/profile.tpl',
      1 => 1406932139,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1406932085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49258271253d02d631755d0-04081767',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d02d631abbc1_46599636',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d02d631abbc1_46599636')) {function content_53d02d631abbc1_46599636($_smarty_tpl) {?><!doctype html>
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
			<?php echo $_smarty_tpl->getSubTemplate ("navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			
			<div id="container" class="container">	
				<div id="page-title">
					<h1>Profile</h1><br/>
					<img src="imgs/point.png"/>
				</div>
				

		 	<h3>Profile</h3>
		 	<hr/>
		 	<p>Name: <?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</p>
		 	<p>Email: <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</p>
		 	<p>Level:<?php echo $_smarty_tpl->tpl_vars['user']->value['level'];?>
</p>

			</div>
			
		</body>
	</html>
<?php }} ?>
