<?php

include '../includes/inti.inc';
	
if($_POST['title'] == null || $_POST['desc'] == null || $_POST['priority'] == null){
	header("Location:../htdocs/create_ticket.php?err=1");
	exit(0);
}
		
if(create_ticket($_POST['project'],$_POST['title'],$_POST['desc'], $_POST['priority'],'open', $_POST['user_id'], $_POST['team_id'])){
	header("Location:../htdocs/create_ticket.php?valid=1");
} else{
	header("Location:../htdocs/create_ticket.php?err=1");
}

?>