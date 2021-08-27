<?php
	session_start();
	$token = isset($_GET['i']) ? $_GET['i'] : 1;
	$_SESSION['id'] = 1;
  	header("Location:view/Main.php?i=$token");
?>