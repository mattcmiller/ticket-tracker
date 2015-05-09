<?php

include '../includes/inti.inc';
require '../libs/Smarty.class.php';
	
user_auth();
	
$users = get_all_users();
$smarty = new Smarty;
$smarty->assign("users", $users);
$smarty->display('templates/users.tpl');

?>