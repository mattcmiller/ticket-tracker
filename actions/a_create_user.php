<?php

include '../includes/inti.inc';
	
if($_POST['email'] == null || $_POST['first_name'] == null || $_POST['last_name'] == null){
	header("Location:../htdocs/create_user.php?err=1");
	exit(0);
}
	
if($_POST['password']!=$_POST['retype_pass']){
	header("Location:../htdocs/create_user.php?err=1");
	exit(0);		
}
		
if(create_user($_POST['email'], $_POST['password'], $_POST['first_name'], $_POST['last_name'], $_POST['type'], $_POST['level'])){
	header("Location:../htdocs/create_user.php?valid=1");
} else{
	header("Location:../htdocs/create_user.php?err=1");
}

?>