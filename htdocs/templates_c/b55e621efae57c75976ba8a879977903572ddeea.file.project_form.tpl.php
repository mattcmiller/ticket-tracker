<?php /* Smarty version Smarty-3.1.18, created on 2014-11-19 01:40:24
         compiled from "templates/project_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1892804657546be6cecdf601-48338726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b55e621efae57c75976ba8a879977903572ddeea' => 
    array (
      0 => 'templates/project_form.tpl',
      1 => 1416357611,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1406932085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1892804657546be6cecdf601-48338726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_546be6cee6f8d9_35434393',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546be6cee6f8d9_35434393')) {function content_546be6cee6f8d9_35434393($_smarty_tpl) {?><!doctype html>
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
					<h1>Create Project</h1><br/>
					<img src="imgs/point.png"/>
				</div>
				
			<div class="box-style">
				
				<div class="box-title">
	  				<h3>Project</h3>
	  			</div>
			  	<div id="ticket_form">
						<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
							<p>Invalid Ticket</p>
						<?php }?>
				
						<form action="../actions/a_create_ticket.php" method="post">
							<table>
								<tr>
									<td>Project:</td>
							
									<td>
										<select name="project">
										<?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
										  <option value="<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</option>
										<?php } ?>
										</select>
									</td>
								</tr>	
							<tr>
								<td>Ticket Title:</td>
								<td><input type="text" name="title" class="text-box" placeholder="ticket title"/></td>
							</tr>
							<tr>
								<td>Descripton:</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td><textarea name="desc" placeholder="ticket description"></textarea></td>
							</tr>
							<tr>
								<td>Ticket Priority:</td>
						
								<td>
									<select name="priority">
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									</select>
								</td>
							</tr>	
							<tr>
								<td>Select User:</td>
								<td>
									<select name="user_id">
									<option value="">Select User</option>
									 <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
									  <option value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</option>
									  <?php } ?>
									</select>
								</td>
							</tr>
							<tr>
								<td>Select Team:</td>
								<td>
									<select name="team_id">
									<option value="">Select Team</option>
									 <?php  $_smarty_tpl->tpl_vars['team'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['team']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['team']->key => $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->_loop = true;
?>
									  <option value="<?php echo $_smarty_tpl->tpl_vars['team']->value['team_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>
</option>
									  <?php } ?>
									</select>
								</td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td><input type="image" src="imgs/submit-button.png" class="submit-bt" alt="Submit"></td>
								
							</tr>	
							</table> 
						</form>
					</div>
				</div>


			</div>
			
		</body>
	</html>
<?php }} ?>
