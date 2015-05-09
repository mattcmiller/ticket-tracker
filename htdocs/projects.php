<?php

include '../includes/inti.inc';
require '../libs/Smarty.class.php';
	
user_auth();
	
$projects = get_all_projects();
$smarty = new Smarty;
$smarty->assign("projects", $projects);
$smarty->display('templates/projects.tpl');
	
?>