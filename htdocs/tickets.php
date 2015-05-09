<?php

include '../includes/inti.inc';
require '../libs/Smarty.class.php';
	
user_auth();
$user = getUser();
$sort = $_REQUEST['sort'];
$user_teams = get_all_teams();
$limit = 5;
$previous =0;
$next =0;

if($_REQUEST['idx']){
	$idx = $_REQUEST['idx'];	
}else{
	$idx = 0;
}
	
$previous = $idx - $limit;
$next =$idx +$limit;	
	
if($previous <= 0){
	$previous =0;
}

if($sort=="all" || $sort==NULL){
	$tickets = get_all_tickets($idx,$limit);
} else if($sort=="mine"){
	$tickets = user_tickets($user['id'],$idx,$limit);
} 
	
foreach($user_teams as $team){
	if($sort == $team['team_id']){
		$tickets = team_tickets($team['team_id']);
	}
}
	
if(count($tickets)!=$limit){
	$next =0;
}
		
if(count($tickets) == 0){
	header( 'Location:tickets.php' ) ;
}
	
$smarty = new Smarty();
$smarty->assign("tickets", $tickets);
$smarty->assign("user_teams", $user_teams);
$smarty->assign("select", $sort);
$smarty->assign("previous", $previous);
$smarty->assign("next", $next);
$smarty->display('templates/tickets.tpl');

?>