<?php
ob_start();
session_start();

$current_file=$_SERVER['SCRIPT_NAME'];

function loggedin(){
	if(isset($_SESSION['name'])&&!empty($_SESSION['name'])){
		return true;
	}
	else{
		return false;
	}
}

?>