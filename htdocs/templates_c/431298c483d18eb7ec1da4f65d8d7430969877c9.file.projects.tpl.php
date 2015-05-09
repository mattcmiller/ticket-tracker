<?php /* Smarty version Smarty-3.1.18, created on 2014-08-12 20:47:44
         compiled from "templates/projects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113604689953ea60490e5c88-98805569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '431298c483d18eb7ec1da4f65d8d7430969877c9' => 
    array (
      0 => 'templates/projects.tpl',
      1 => 1407869262,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1406932085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113604689953ea60490e5c88-98805569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ea6049161e97_83604426',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea6049161e97_83604426')) {function content_53ea6049161e97_83604426($_smarty_tpl) {?><!doctype html>
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
					<h1>Projects</h1><br/>
					<img src="imgs/point.png"/>
				</div>
				
			<div class="box-style">
				
				<div class="box-title">
						<div id="ticket-drop-down" class='left'>
							<select name="project" class='left'>
								<option value="<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
">All Projects</option>
								<option value="<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
">My Projects</option>
								<option value="<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
">CarRamRod Projects</option>
							</select>
						</div>
	  				
	  					<div class="button right">
	  						<h3><a href="#">Create Project</a></h3>
	  					</div>
	  				
	  				<div class="clear"></div>
	  			</div>
	  			
	  		<table class="t2">
	  			<thead>
					<tr><th>#Id</th><th>Title</th></tr>
				</thead>
			  	<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
		 		<tr>
			  		<td>#<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
</td>
			  		<td><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</td>
		    	</tr>
				<?php } ?>
			</table>
			</div>


			</div>
			
		</body>
	</html>
<?php }} ?>
