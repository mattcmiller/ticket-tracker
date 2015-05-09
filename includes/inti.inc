<?php
	
require 'config.inc';
require 'db.inc';

function return_test(){
	echo "test";
}
	
function user_auth(){
	if(!do_auth()){	
			header('Location:index.php');
	}
}
	
function do_auth(){	
	session_start();
	if($_SESSION['auth'] == login_auth_key($_SESSION['email'])){
		return true;
		exit(0);
	} else{
		session_destroy();
		return false;
		exit(0);
	}		
}
	
function logout(){
	session_start();
	activity_log($_SESSION['user']." has logged out of the system.","logout");
	session_destroy();
	header('Location:index.php');
}
	
function login_auth_key($key){
	$hash = crypt($key, '$2y$10$'. $_SERVER['HTTP_USER_AGENT']);
	return $hash;
}
	
function create_auth($email){
	session_start();
	session_regenerate_id();
	$key = login_auth_key($email);
	$_SESSION['user']= $email;
	$_SESSION['auth']= $key;
}
	
function create_user($email, $pwd,$fname,$lname, $type="user",$level= 2){
	if(get_user_by_email($email)){
		 return false;
	}
	if(!$pwd){
		return false;
	}
	$salt = get_salt();
	$encrypt_pwd = encrypt_pwd($pwd, $salt);
	$str = "INSERT INTO users (email, first_name, last_name, type, password, salt, level) VALUES ('$email', '$fname','$lname', '$type', '$encrypt_pwd', '$salt', '$level')";
	if(db_query($str, "write")){
		activity_log("New User $fname $lname has been Created", "User Created");
		return true;
	}
		
}
	
function activity_log($text, $type = null){
	$time = time();
	$username = $_SESSION['user'];
	$str = "INSERT INTO activity (id,activity_text,user,type,timestamp) VALUES (NULL ,  '$text', '$username','$type', CURRENT_TIMESTAMP);";
	if(db_query($str, "write")){
		return true;
	}	
}
	
function check_login($email,$pwd){
	$encrypt_pwd = encrypt_pwd($pwd, get_user_salt($email));
	$str = "SELECT * FROM users WHERE password='$encrypt_pwd'";
		
	if(db_fetch_hash(db_query($str, "read"))){
		create_auth($email);
		activity_log($email . " has logged in to the system.", "login");
		return true;
	} else{
		return false;
	}	
}
	
function encrypt_pwd($pwd,$salt){
	$hash = crypt($pwd, '$2y$10$'.$salt.'$');
	return $hash;
}
	
function get_salt(){
	$salt = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
	$salt = base64_encode($salt);
	$salt = str_replace('+', '.', $salt);
	return $salt;
}
	
function get_all_users(){
	$str = "SELECT id, email, first_name, last_name, type, level FROM users";
	$users = db_query($str, "read");
	return db_fetch_all_hash($users);
}

function get_user_by_email($email){
	$str = "SELECT id, email, first_name, last_name, type, level FROM users WHERE email='$email'";
	$user = db_query($str, "read");
	return db_fetch_hash($user);
}

function get_user_by_id($id){
	$str = "SELECT * FROM users WHERE id='$id'";
	$user = db_query($str, "read");
	return db_fetch_hash($user);
}
	
function get_user_salt($email){
	$str = "SELECT salt FROM users WHERE email='$email'";
	$user = db_query($str, "read");
	$data = db_fetch_hash($user);	
	return $data['salt'];	
}
	
function getUser(){
	return get_user_by_email($_SESSION['user']);
}

function get_all_activity($idx = 0, $limit = 5){
	$str = "SELECT * FROM activity ORDER by timestamp DESC LIMIT $idx,$limit";
	$activity = db_query($str, "read");
	return db_fetch_all_hash($activity);
}
		
function get_all_tickets($idx = 0, $limit = 5){
	$str = "SELECT * FROM tickets  LIMIT $idx,$limit";
	$tickets = db_query($str, "read");
	return db_fetch_all_hash($tickets);
}
	
function ticket_count(){
	$str = "SELECT COUNT(*) as cnt FROM tickets";
	$tickets = db_fetch_hash(db_query($str, "read"));
	return $tickets['cnt'];
}

function active_ticket_count(){
	$str = "SELECT COUNT(*) as cnt FROM tickets WHERE status='open' ";
	$tickets = db_fetch_hash(db_query($str, "read"));
	return $tickets['cnt'];
}

function completed_ticket_count(){
	$str = "SELECT COUNT(*) as cnt FROM tickets WHERE status='closed' ";
	$tickets = db_fetch_hash(db_query($str, "read"));
	return $tickets['cnt'];
}

function user_ticket_count($user_id){
	$str = "SELECT COUNT(*) as cnt FROM assignments WHERE user_id='$user_id' ";
	$tickets = db_fetch_hash(db_query($str, "read"));
	return $tickets['cnt'];
}

function user_tickets($user_id, $idx=0, $limit =5){
	$str = "SELECT * FROM tickets JOIN assignments ON assignments.ticket_id=tickets.ticket_id AND assignments.user_id=$user_id LIMIT $idx,$limit; ";
	$tickets = db_fetch_all_hash(db_query($str, "read"));
	return $tickets;
}

function team_tickets($team_id){
	$str = "SELECT * FROM tickets JOIN assignments ON assignments.ticket_id=tickets.ticket_id AND assignments.team_id=$team_id; ";
	$tickets = db_fetch_all_hash(db_query($str, "read"));
	return $tickets;
}

function create_ticket($project_id, $title, $desc, $priority='4', $status='open', $user_id, $team_id){
	$str = "INSERT INTO tickets (ticket_id, status, title, description, priority) VALUES (NULL ,'$status','$title','$desc','$priority');";	
	$ticket_id = db_query($str, "write");
	add_ticket_to_projects($project_id, $ticket_id);
	return create_assignments($ticket_id, $user_id, $team_id);
}

function create_assignments($ticket_id, $user_id, $team_id){
	$str = "INSERT INTO assignments (ticket_id, user_id, team_id) VALUES ('$ticket_id','$user_id','$team_id');";	
	if(db_query($str, "write")){
		activity_log(" New Ticket has been Created", "Ticket Created");
		return true;
	}		
}

function team_ticket_count($team_id){
	$str = "SELECT COUNT(*) as cnt FROM assignments WHERE team_id='$team_id' ";
	$tickets = db_fetch_hash(db_query($str, "read"));
	return $tickets['cnt'];
}

function get_user_teams($user_id){	
	$str = "SELECT * FROM team_members JOIN teams ON teams.team_id = team_members.team_id AND team_members.user_id='$user_id'";
	$teams = db_query($str, "read");
	return db_fetch_all_hash($teams);
}	

function get_all_teams(){
	$str = "SELECT * FROM teams";
	$teams = db_fetch_all_hash(db_query($str, "read"));
	return $teams;
}
	
function get_all_projects(){
	$str = "SELECT * FROM projects";
	$projects = db_fetch_all_hash(db_query($str, "read"));
	return $projects;
}

function get_ticket($idx){
	$str = "SELECT * FROM tickets JOIN assignments ON assignments.ticket_id=tickets.ticket_id AND assignments.ticket_id=$idx;";
	$ticket = db_query($str, "read");
	return db_fetch_hash($ticket);
}

function add_ticket_to_projects($project_id, $ticket_id){
	$str = "INSERT INTO project_tickets (project_id, ticket_id) VALUES ('$project_id','$ticket_id');";	
	if(db_query($str, "write")){
		activity_log("Ticket added to project", "project");
		return true;
	}		
}
?>