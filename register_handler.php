<?php

//check if button was clicked
	if (isset($_POST['btn_reg'])) {
		
		//Establish connection now inorder to register
		require 'connection.php';
		
		//Receiving entries from the form
		$usname = $_POST['uname'];
		$uspswd = $_POST['pswd'];
		
		//Check if user has been initially registered
		$checkexist = "SELECT * FROM users WHERE email='$usname'";
		$checkhandler = mysqli_query($conn, $checkexist);
		
		//count the db rows that have records that match what we have selected
		$Numofrows = mysqli_num_rows($checkhandler);
		//Now check if the Row number is 1,then the person already exists
		if ($Numofrows == 1) {
			echo "User name already exists.Please Login to Continue.";
			die();
		} else{
			//Register now using an insert query
			$register = "INSERT INTO users(id, email, pass) VALUES (NULL,'$usname','$uspswd')";
			$check = mysqli_query($conn, $register);}
		
		//Check if the registeration was successful
		if (!$check){
			echo "<h3>Ooops!!! Registeration Failed.</h3>";
		}else{
			//echo "<h3>Congratulations.Registeration Successful.</h3>";
			header("location:login.php");
			
		}
	}
		
		
	

	
?>

