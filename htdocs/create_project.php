<?php

include '../includes/inti.inc';
require '../libs/Smarty.class.php';
	
user_auth();

if($_REQUEST['edit']){
	$id = $_REQUEST['id'];
	$edit_ticket = get_ticket($id);
	$smarty->assign("users", $users);
}
	
$tickets = get_all_tickets();
$users = get_all_users();
$teams = get_all_teams();
$projects = get_all_projects();	
	
$smarty = new Smarty;
$smarty->assign("tickets", $tickets);
$smarty->assign("users", $users);
$smarty->assign("teams", $teams);
$smarty->assign("projects", $projects);
$smarty->display('templates/project_form.tpl');

?>