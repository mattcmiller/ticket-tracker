<?php

include '../includes/inti.inc';
require '../libs/Smarty.class.php';
	
user_auth();
	
$activities = get_all_activity();
$user = getUser();
$ticket_cnt=ticket_count();
$active_ticket_cnt = active_ticket_count();
$completed_ticket_cnt = completed_ticket_count();
$my_ticket_cnt = user_ticket_count($user['id']);
$user_teams = get_user_teams($user['id']);
$teams = get_all_teams();
$tickets = user_tickets($user['id']);
	
$smarty = new Smarty;
$smarty->assign("activities", $activities);
$smarty->assign("tickets", $tickets);
$smarty->assign("user", $user);
$smarty->assign("ticket_cnt", $ticket_cnt);
$smarty->assign("active_ticket_cnt", $active_ticket_cnt);
$smarty->assign("completed_ticket_cnt", $completed_ticket_cnt);
$smarty->assign("my_ticket_cnt", $my_ticket_cnt);
$smarty->assign("teams_cnt", count($teams));
$smarty->assign("user_teams_cnt", count($user_teams));
$smarty->display('templates/dashboard.tpl');

?>