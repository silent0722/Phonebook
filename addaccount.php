<?php
	$db = mysql_connect("localhost","root","") or die("Could not connect");
	mysql_select_db("db_phone",$db) or die("db not found");
	
	$Nname = $_POST['Nname'];
	$Pword = $_POST['Pword'];
	mysql_query("INSERT INTO tbl_des(Nname, Pword) VALUES ('$Nname', '$Pword')");
?>

<script type = "text/javascript">
	alert('Account Added ! Please Log In .....');
	window.location = "login.html";
</script>