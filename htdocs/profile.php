<?php

include '../includes/inti.inc';
require '../libs/Smarty.class.php';
	
user_auth();
$user = getUser();
$smarty = new Smarty;
$smarty->assign("user", $user);
$smarty->display('templates/profile.tpl');

?>