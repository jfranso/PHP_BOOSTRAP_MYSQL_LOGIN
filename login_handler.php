<?php

//Check if the login button was clicked
if (isset($_POST['btn_log']))
{
//To login,we will need to asssign a session to the user
//we will also require to connect to the database
	
	require 'connection.php';
	session_start();

	//Receive data from the user
	$xuname=$_POST['uname'];
	$xpswd=$_POST['pswd'];
	
	//Use the select query to check if the details submitted
	//exist on our database
	
	$checklogin="SELECT * FROM users WHERE email='$xuname' AND pass='$xpswd'";
	$results=mysqli_query($conn,$checklogin);
	$numofrows=mysqli_num_rows($results);
	
	//check if the count function found any record
	if ($numofrows==1){
		//Assign a Session
		$_SESSION['xuname']=$xuname;
		//Redirect the user to homepage.In Our Case ,Save_data.php
		header("location:save_data.php");
	}else{
		//The login will have failed,so return the user on the login page
		header("location:login.php");
	}
	
	
}