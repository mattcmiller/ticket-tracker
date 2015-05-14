<?php

function db_connect() {
	
    if(!$db = mysqli_connect(db_host,db_username,db_pwd,db_name)) {
        return FALSE;
    }

    return $db;
}

function db_query($str, $type){

	if(!$conn = db_connect()) {
    	die('cant connect to mysql');
	}
	
	if($type == "read"){
		$result = mysqli_query($conn, $str);
		if($result){
			return $result;
		} else{
			return false;
		} 
	}
	
	if($type == "write"){
		$result = mysqli_query($conn, $str);
		$id = mysqli_insert_id($conn);
		return $id;		
	}
}

function db_fetch_hash($qhandle) {
    return mysqli_fetch_array($qhandle, MYSQL_ASSOC);
}

function setup_db(){
	
}

function db_fetch_all_hash($qhandle) {
    $rows = array();
	    
    while ($row = db_fetch_hash($qhandle)) {
        $rows[] = $row;
    }
    return $rows;
}
	
?>