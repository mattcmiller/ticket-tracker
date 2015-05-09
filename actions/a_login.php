<?php

include '../includes/inti.inc';
	
if(check_login($_POST['email'],$_POST['password'])){
	header("Location:../htdocs/dashboard.php");
} else{
	header("Location:../htdocs/index.php?err=1");
}

?>