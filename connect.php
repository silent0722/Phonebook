<?php
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'db_phone';
	if(!mysql_connect($mysql_host, $mysql_user, $mysql_pass ) ||!mysql_select_db($mysql_db)){
		die("Error1: " . mysql_error());
	} else
		echo "<br>";
?>