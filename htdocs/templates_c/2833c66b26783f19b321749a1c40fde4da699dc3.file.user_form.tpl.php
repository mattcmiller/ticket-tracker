<?php /* Smarty version Smarty-3.1.18, created on 2014-08-13 00:10:30
         compiled from "templates/user_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133161947253ea6a50dc5b91-95781480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2833c66b26783f19b321749a1c40fde4da699dc3' => 
    array (
      0 => 'templates/user_form.tpl',
      1 => 1407881387,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1406932085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133161947253ea6a50dc5b91-95781480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ea6a50e4e405_03782179',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea6a50e4e405_03782179')) {function content_53ea6a50e4e405_03782179($_smarty_tpl) {?><!doctype html>
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
					<h1>Create User</h1><br/>
					<img src="imgs/point.png"/>
				</div>
				
			<div class="box-style">
				<div class="box-title">
	  				<h3>User</h3>
	  			</div>
	  			<?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
	  				<div class="valid"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
	  			<?php }?>
	  			<?php if ($_smarty_tpl->tpl_vars['err']->value) {?>
	  				<div class="err"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
	  			<?php }?>
			  	<div id="ticket_form">
				
						<form action="../actions/a_create_user.php" method="post">
							<table>
							<tr>
								<td>Email:</td>
								<td><input type="text" name="email" class="text-box" placeholder="Email"/></td>
							</tr>
							<tr>
								<td>First Name:</td>
								<td><input type="text" name="first_name" class="text-box" placeholder="First Name"/></td>
							</tr>
							<tr>
								<td>Last Name:</td>
								<td><input type="text" name="last_name" class="text-box" placeholder="Last Name"/></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><input type="text" name="password" class="text-box" placeholder="Password"/></td>
							</tr>	
							<tr>
								<td>Retype Password:</td>
								<td><input type="text" name="retype_pass" class="text-box" placeholder="Retype Password"/></td>
							</tr>
							<tr>
								<td>Type:</td>
								<td>
									<select name="type">
										<option value="">Select Type</option>
										<option value="Engineer">Engineer</option>
										<option value="Project Manager">Project Manager</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>Level:</td>
								<td>
									<select name="level">
										<option value="">Select Level</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
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
