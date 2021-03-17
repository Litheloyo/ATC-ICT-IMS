<?php
	require_once "conn.php";
	session_start(); 
	
	if (!isset($_SESSION['userid'])) {
		header('Location:index.php');
	}
?>