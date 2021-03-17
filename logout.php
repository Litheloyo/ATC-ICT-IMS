<?php
	session_start();

	$h_desc = 'logout';
	$h_tbl = 'user';
	$sessionid = $_SESSION['userid'];
	$sessiontype = $_SESSION['level'];

	session_destroy();
	header('Location:index.php');
?>