<?php

include '../includes/inti.inc';
require '../libs/Smarty.class.php';

if(do_auth()){	
	header('Location:dashboard.php');
}
	
if($_GET['err']){
	$error=$_GET['err']; 
}
	
$smarty = new Smarty;
$smarty->assign("error", $error);
$smarty->display('templates/index.tpl');

?>