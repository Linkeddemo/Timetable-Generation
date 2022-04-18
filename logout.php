<?php
	session_start();
	$_SESSION['user']="";
	$_SESSION['usernm']="";
	header('location: frmLogin.html');
	
?>