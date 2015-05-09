<?php

include '../includes/inti.inc';
require '../libs/Smarty.class.php';
	
user_auth();
	
$tickets = get_all_tickets();
	
if($_GET['err']){
	$err ="User not Created";
}
	
if($_GET['valid']){
	$message ="User Created";
}
	
$smarty = new Smarty;
$smarty->assign("tickets", $tickets);
$smarty->assign("message", $message);
$smarty->assign("err", $err);
$smarty->display('templates/user_form.tpl');

?>