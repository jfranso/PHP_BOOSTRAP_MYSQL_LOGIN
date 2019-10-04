<?php

	//assign variables with the parameters from the database
	$host="localhost";
	$username="root";
	$password="";
	$db="sep_complete_system";
	
	$conn=mysqli_connect($host,$username,$password,$db);
	
	//check if the connection was successful
	if (!$conn)
	{
		echo "<h1>Oops!!Connection Failed.</h1>";
	}
	?>