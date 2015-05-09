<?php /* Smarty version Smarty-3.1.18, created on 2014-08-22 23:33:44
         compiled from "templates/tickets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115771701853d028e27e0fb7-95075569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3328b06315daf59d375e2eb610f07c4a0f390297' => 
    array (
      0 => 'templates/tickets.tpl',
      1 => 1408743223,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1406932085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115771701853d028e27e0fb7-95075569',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53d028e2816936_38483553',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d028e2816936_38483553')) {function content_53d028e2816936_38483553($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/ticket_tracker/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/ticket_tracker/libs/plugins/modifier.date_format.php';
?><!doctype html>
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
					<h1>Tickets</h1><br/>
					<img src="imgs/point.png"/>
				</div>
				
			<div class="box-style">
				
				<div class="box-title">
						<div id="ticket-drop-down" class='left'>
							<form action="tickets.php" method="POST">
								<select name="sort" class='left' onchange="this.form.submit()">
									<option value="all" <?php if ($_smarty_tpl->tpl_vars['select']->value=="all") {?>selected<?php }?> >All Tickets</option>
									<option value="mine" <?php if ($_smarty_tpl->tpl_vars['select']->value=="mine") {?>selected<?php }?> >My Tickets</option>
									<?php  $_smarty_tpl->tpl_vars['teams'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['teams']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_teams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['teams']->key => $_smarty_tpl->tpl_vars['teams']->value) {
$_smarty_tpl->tpl_vars['teams']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['teams']->value['team_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['select']->value==$_smarty_tpl->tpl_vars['teams']->value['team_id']) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['teams']->value['name'];?>
</option>
									<?php } ?>
								</select>
							</form>
						</div>

	  					<div class="button right">
	  						<h3><a href="create_ticket.php">Create Ticket</a></h3>
	  					</div>
	  				
	  				<div class="clear"></div>
	  			</div>
	  			
	  		<table class="t2" width="100%">
	  			<thead>
					<tr><th>Ticket#</th><th>Title</th><th>Description</th><th>status</th><th>priority</th><th>date</th><th>action</th></tr>
				</thead>
			  	<?php  $_smarty_tpl->tpl_vars['ticket'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ticket']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tickets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->key => $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->_loop = true;
?>
		 		<tr>
			  		<td><?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_id'];?>
</td>
			  		<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['ticket']->value['title'],30);?>
</td>
			    	<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['ticket']->value['description'],50);?>
</td>
			    	<td><?php echo $_smarty_tpl->tpl_vars['ticket']->value['status'];?>
</td>
			    	<td><?php echo $_smarty_tpl->tpl_vars['ticket']->value['priority'];?>
</td>
			    	<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ticket']->value['timestamp']);?>
</td>
			    	<td><a href="#">Edit</a></td>
		    	</tr>
				<?php } ?>
			</table>
			
			</div>
			<div class="center">
				<div class="green_button-prev">
					<a href="?idx=<?php echo $_smarty_tpl->tpl_vars['previous']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['select']->value;?>
">Prev </a>
				</div> 
				<div class="green_button-next">
					<a href="?idx=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
&sort=<?php echo $_smarty_tpl->tpl_vars['select']->value;?>
"> Next</a>
				</div>
			</div>

			</div>
			
		</body>
	</html>
<?php }} ?>
