<?php
	$db = mysql_connect("localhost","root","") or die("Could not connect");
	mysql_select_db("db_phone",$db) or die("db not found");
	
	$Fname = $_POST['Fname'];
	$Mname = $_POST['Mname'];
	$Lname = $_POST['Lname'];
	$Pnum = $_POST['Pnum'];
	$Eadd = $_POST['Eadd'];
	$Hadd = $_POST['Hadd'];
	$Gender = $_POST['Gender'];
	$Cstatus = $_POST['Cstatus'];
	mysql_query("INSERT INTO tbl_contact(Fname, Mname, Lname, Pnum, Eadd, Hadd, Gender, Cstatus) VALUES ('$Fname', '$Mname', '$Lname', '$Pnum', '$Eadd', '$Hadd', '$Gender', '$Cstatus')");
?>

<script type = "text/javascript">
	alert('Contact Added !');
	window.location = "index.html";
</script>