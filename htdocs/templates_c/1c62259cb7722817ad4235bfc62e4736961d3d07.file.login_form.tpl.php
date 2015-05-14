<?php /* Smarty version Smarty-3.1.18, created on 2015-05-14 05:53:51
         compiled from "./templates/login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77914556253c56003785d10-01676620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c62259cb7722817ad4235bfc62e4736961d3d07' => 
    array (
      0 => './templates/login_form.tpl',
      1 => 1431575624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77914556253c56003785d10-01676620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c56003787cb4_13675830',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c56003787cb4_13675830')) {function content_53c56003787cb4_13675830($_smarty_tpl) {?><div id="login">
	<img src="imgs/tasktracker-logo.png"/>
	<div id="login-inner">
		
		<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
			<p>Invalid Login</p>
		<?php }?>

		<form action="../actions/a_login.php" method="post">
		 <p><input type="text" name="email" class="text-box" placeholder="User Email"/></p>
		 <p><input type="password" name="password" class="text-box" placeholder="Password" /></p>
		 <br/>
		 <p><input type="image" src="imgs/submit-button.png" class="submit-bt" alt="Submit"></p>
		</form>
	</div>
</div><?php }} ?>
