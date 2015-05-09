<?php /* Smarty version Smarty-3.1.18, created on 2014-08-12 21:34:54
         compiled from "templates/users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111730099953ea626c9cad36-91281111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '717e9137b0433086f670dd6c095b59e876f70365' => 
    array (
      0 => 'templates/users.tpl',
      1 => 1407872092,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1406932085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111730099953ea626c9cad36-91281111',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ea626ca36cf6_49127468',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea626ca36cf6_49127468')) {function content_53ea626ca36cf6_49127468($_smarty_tpl) {?><!doctype html>
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
					<h1>Users</h1><br/>
					<img src="imgs/point.png"/>
				</div>
				
			<div class="box-style">
				
				<div class="box-title">
						<div id="ticket-drop-down" class='left'>
							<select name="project" class='left'>
								<option value="#">All Users</option>
							</select>
						</div>
	  				
	  					<div class="button right">
	  						<h3><a href="create_user.php">Create User</a></h3>
	  					</div>
	  				
	  				<div class="clear"></div>
	  			</div>
	  			
	  		<table class="t2">
	  			<thead>
					<tr><th>#id</th><th>name</th><th>username</th><th>type</th><th>level</th></tr>
				</thead>
			  	<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
		 		<tr>
			  		<td>#<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
			  		<td><?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</td>
			  		<td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
			  		<td><?php echo $_smarty_tpl->tpl_vars['user']->value['type'];?>
</td>
			  		<td><?php echo $_smarty_tpl->tpl_vars['user']->value['level'];?>
</td>
		    	</tr>
				<?php } ?>
			</table>
			</div>


			</div>
			
		</body>
	</html>
<?php }} ?>
