<?php  include 'admin/config/conn.php';

	session_start();
	session_destroy();
	header("Location: index.php");

?>