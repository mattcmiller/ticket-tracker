<?php

include '../includes/inti.inc';
require '../libs/Smarty.class.php';
	
user_auth();

if($_REQUEST['edit']){
	$id = $_REQUEST['edit'];
	$edit_ticket = get_ticket($id);
	$assigned_user = get_user_by_id($edit_ticket['user_id']);
	print_r($assigned_user);
}
	
$users = get_all_users();
$teams = get_all_teams();
$projects = get_all_projects();	
	
$smarty = new Smarty;
$smarty->assign("users", $users);
$smarty->assign("teams", $teams);
$smarty->assign("ticket", $edit_ticket);
$smarty->assign("edit", $_REQUEST['edit']);
$smarty->assign("assigned_user", $assigned_user);
$smarty->assign("projects", $projects);
$smarty->display('templates/ticket_form.tpl');

?>