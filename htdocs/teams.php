<?php

include '../includes/inti.inc';
require '../libs/Smarty.class.php';
	
user_auth();
	
$teams = get_all_teams();
$smarty = new Smarty;
$smarty->assign("teams", $teams);
$smarty->display('templates/teams.tpl');

?>