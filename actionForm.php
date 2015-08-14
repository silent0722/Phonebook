<?php
	if(	isset($_POST["name"]) || isset($_POST["number"]) || isset($_POST["email"])){
		echo "Hello ". $_POST['name']. ". <br/>";
		echo "Your number is ". $_POST['number']. ". <br/>";
		echo "Your email is ". $_POST['email']. ". <br/>";
		echo "<br/>";
		//
	} 
	if(isset($_POST["gender"]) || isset($_POST["status"])){
		echo "You are ". $_POST['gender']." ";
		echo "with ". $_POST['status']." as civil status. <br/>";
		echo "<br/>";
	}
	if ( isset($_POST["description"]) ){
		echo "You were regarded as<br/>";
		echo "\" " .$_POST['description']. " \". <br/>" ;
		echo "<br/>";
		//exit();
	} if(isset($_POST["tag"])){

		echo "You were tag for " .$_POST['tag']. ".<br/>";
		echo "this part is buggy <br/>";
	}

	exit();
?>
