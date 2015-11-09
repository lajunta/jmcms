<?php session_start();
$db_server = "localhost";
$db_user = "root";
$db_psd  = "root";
$root_url = "/site2/";
$mydb = "zxy";

$con =  mysql_connect($db_server,$db_user,$db_psd);

mysql_select_db($mydb);

function is_login(){
	if(isset($_SESSION['login'])){
		return true;
	}else{
		return false;
	}
}

function is_role($role){
	if($_SESSION['role']==$role){
		return true;
	}else{
		return false;
	}
}

function need_role($role){
	global $root_url;
	if(!is_role($role)){
		header("Location: $root_url");
	}	
}

function need_login(){
	global $root_url;
	if(!is_login()){
		header("Location: $root_url");
	}	
}