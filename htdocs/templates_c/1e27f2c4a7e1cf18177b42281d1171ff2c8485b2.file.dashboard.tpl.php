<?php /* Smarty version Smarty-3.1.18, created on 2014-08-09 01:06:10
         compiled from "templates/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139491125253c6fe757b6936-72347854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e27f2c4a7e1cf18177b42281d1171ff2c8485b2' => 
    array (
      0 => 'templates/dashboard.tpl',
      1 => 1407539169,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1406932085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139491125253c6fe757b6936-72347854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c6fe757e7aa9_22785406',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c6fe757e7aa9_22785406')) {function content_53c6fe757e7aa9_22785406($_smarty_tpl) {?><!doctype html>
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
					<h1>Dashboard</h1><br/>
					<img src="imgs/point.png"/>
				</div>
				
	<div class="sidebar box-style">
		
		<div class="box-title">
	  		<h3>My Profile</h3>
	  	</div>
	  	
		<img src="imgs/profile.png" width="250px"/>
		
		<div class="profile-info">
			<p>Name: <?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value['last_name'];?>
</p>
			<p>Email: <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</p>
			<p>Level:<?php echo $_smarty_tpl->tpl_vars['user']->value['level'];?>
</p>
			<br/>
			<h3>My Teams</h3>
		</div>
		
	</div>
	
	<div id="stat-bar" class="box-style">
		<div class="stat-box">
			<div class="stat-box-inner">
				<h1><?php echo $_smarty_tpl->tpl_vars['active_ticket_cnt']->value;?>
</h1>
				<p><b>Active Tickets</b></p>
				<p><?php echo $_smarty_tpl->tpl_vars['ticket_cnt']->value;?>
 total</p>
			</div>
		</div>
		<div class="stat-box">
			<div class="stat-box-inner">
				<h1><?php echo $_smarty_tpl->tpl_vars['my_ticket_cnt']->value;?>
</h1>
				<p><b>My Tickets</b></p>
				<p>0 remain</p>
			</div>
		</div>
		<div class="stat-box">
			<div class="stat-box-inner">
				<h1><?php echo $_smarty_tpl->tpl_vars['user_teams_cnt']->value;?>
</h1>
				<p><b>My Teams</b></p>
				<p><?php echo $_smarty_tpl->tpl_vars['teams_cnt']->value;?>
 total</p>
			</div>
		</div>
		<div class="stat-box">
			<div class="stat-box-inner">
				<h1>1</h1>
				<p><b>My Projects</b></p>
				<p>2 Total Projects</p>
			</div>
		</div>
		<div class="stat-box-last">
			<div class="stat-box-inner">
				<h1><?php echo $_smarty_tpl->tpl_vars['completed_ticket_cnt']->value;?>
</h1>
				<p><b>Completed Tickets</b></p>
				<p><?php echo $_smarty_tpl->tpl_vars['active_ticket_cnt']->value;?>
 remain</p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	
	<div class="box box-style">
		<div class="box-title">
	  		<h3>Activity</h3>
	  	</div>
		<ul>
	  	<?php  $_smarty_tpl->tpl_vars['activity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activity']->key => $_smarty_tpl->tpl_vars['activity']->value) {
$_smarty_tpl->tpl_vars['activity']->_loop = true;
?>
    		<li><p <?php if ($_smarty_tpl->tpl_vars['activity']->value['type']=="login") {?>class="green"<?php }?>><b><?php echo $_smarty_tpl->tpl_vars['activity']->value['timestamp'];?>
</b> - <?php echo $_smarty_tpl->tpl_vars['activity']->value['activity_text'];?>
</p></li>
		<?php } ?>
		</ul>
	</div>

	<div class="box box-style">
		<div class="box-title">
	  		<h3>My Tickets</h3>
	  	</div>
		<table class="t2">
			  	<?php  $_smarty_tpl->tpl_vars['ticket'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ticket']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tickets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->key => $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->_loop = true;
?>
		 		<tr>
			  		<td>#<?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_id'];?>
</td>
			  		<td><?php echo $_smarty_tpl->tpl_vars['ticket']->value['title'];?>
</td>
			    	<td><?php echo $_smarty_tpl->tpl_vars['ticket']->value['description'];?>
</td>
			    	<td><?php echo $_smarty_tpl->tpl_vars['ticket']->value['status'];?>
</td>
			    	<td><?php echo $_smarty_tpl->tpl_vars['ticket']->value['priority'];?>
</td>
		    	</tr>
				<?php } ?>
			</table>
	</div>		
	
	<div class="clear"></div>


			</div>
			
		</body>
	</html>
<?php }} ?>
