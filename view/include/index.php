<?php
	session_start();
	if (!isset($_SESSION['id'])) {
	    header('Location:../index.php');
	}else{
	    header('Location:ViewPanel.php?i=1');
}
?>