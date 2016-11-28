<html>
<header>
	<link href="student_3.css" rel="stylesheet" type="text/css" charset="utf-8" >
</header>
<style>
		body{
			background-image: url("images/2.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
	</style>
	<div align=center text-color=#ffffff>

	<div id="boxinfo">
		<font face="Arial">
		<div id="face">
	<div align=center><legend> <h1>Contacts</h1> </legend></div>

		
   			<form action="view.php" method="post">
				<input type="text" name="Fname" placeholder="First Name">
				&nbsp;
				<input type="submit" name="submit" value="Search">
				<?php
					session_start();
					include('connect.php');
					$Fname = $_POST['Fname'];
						$query = "SELECT * FROM tbl_contact WHERE Fname='".$Fname."'";
						$result = mysql_query($query);
						$row=mysql_fetch_array($result);

						$_SESSION['Fname'] = $Fname;

						if(mysql_num_rows($result)!=0){
							echo "<br><b>First Name:</b> ".$row['Fname']."<br>";
							echo "<b>Middle Initial:</b> ".$row['Mname']."<br>";
							echo "<b>Last Name:</b> ".$row['Lname']."<br>";
							echo "<b>Phone Number:</b> ".$row['Pnum']."<br>";
							echo "<b>Email Add:</b> ".$row['Eadd']."<br>";
							echo "<b>Home Address:</b> ".$row['Hadd']."<br>";
							echo "<b>Gender:</b> ".$row['Gender']."<br>";
							echo "<b>Civil Status:</b> ".$row['Cstatus']."<br>";
						}
						

		?>
		<div id="menulink" align="middle">
			<a href="menu.php" class="btn waves-effect waves-light col s12">Back</a>
</div>
		</form>
		</html>
	