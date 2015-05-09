<?php /* Smarty version Smarty-3.1.18, created on 2014-08-12 21:39:21
         compiled from "templates/teams.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135062834053ea623d5f1e16-20090647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5ac19a3f40d7b37777ce6090e3e9da2346714bf' => 
    array (
      0 => 'templates/teams.tpl',
      1 => 1407870719,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1406932085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135062834053ea623d5f1e16-20090647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ea623d65bf09_22125998',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea623d65bf09_22125998')) {function content_53ea623d65bf09_22125998($_smarty_tpl) {?><!doctype html>
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
					<h1>Teams</h1><br/>
					<img src="imgs/point.png"/>
				</div>
				
			<div class="box-style">
				
				<div class="box-title">
						<div id="ticket-drop-down" class='left'>
							<select name="project" class='left'>
								<option value="<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
">All Teams</option>
								<option value="<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
">My Teams</option>
							</select>
						</div>
	  				
	  					<div class="button right">
	  						<h3><a href="#">Create Team</a></h3>
	  					</div>
	  				
	  				<div class="clear"></div>
	  			</div>
	  			
	  		<table class="t2">
	  			<thead>
					<tr><th>#Id</th><th>Name</th></tr>
				</thead>
			  	<?php  $_smarty_tpl->tpl_vars['team'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['team']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['team']->key => $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->_loop = true;
?>
		 		<tr>
			  		<td>#<?php echo $_smarty_tpl->tpl_vars['team']->value['team_id'];?>
</td>
			  		<td><?php echo $_smarty_tpl->tpl_vars['team']->value['name'];?>
</td>
		    	</tr>
				<?php } ?>
			</table>
			</div>


			</div>
			
		</body>
	</html>
<?php }} ?>
