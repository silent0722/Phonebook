<?php
	error_reporting(E_ERROR | E_PARSE);
	session_start();
	include('connect.php');

	if(isset($_POST['login'])) {
		$Nname = $_POST['Nname'];
		$Pword = $_POST['Pword'];
		
		
		$_SESSION['tempNname'] = $Nname;
		$_SESSION['tempPword'] = $Pword;	

		$query = "SELECT * FROM tbl_des WHERE Nname = '".$Nname."' AND Pword = '".$Pword."'";
		$result = mysql_query($query);
		$row=mysql_fetch_array($result);			
			
		if(mysql_num_rows($result)!=0){
			echo ("<script type = \"text/javascript\">
				alert('Welcome ".$row['Nname']."!');
				window.location = \"menu.php\";
				</script>");
		} else {
			echo ("<script type = \"text/javascript\">
				alert('User Number and Password does not match!');
				window.location = \"login.html\";
				</script>");	
		}	
	}
?>