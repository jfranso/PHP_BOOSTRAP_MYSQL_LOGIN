<?php
	session_start();
	if (!isset($_SESSION['xuname'])){
		header("location:login.php");
	}
?>
<?php
//To save data into the db start by connecting to the database
//To do this,Create the connection on a seperate php file and require it from this file.

require 'connection.php';

//check if the save button has been clicked
	if (isset($_POST['btn_save'])){
		
		//start receiving data from user
		$name=$_POST['jinax'];
		$age=$_POST['umrix'];
		$phone=$_POST['simux'];

		//save data into the DB using the variable INSERT QUERY
		//copy from PHPMYADMIN :>> INSERT INTO `user_data`(`id`, `jina`, `umri`, `simu`) VALUES ([value-1],[value-2],[value-3],[value-4])
		$adduserdata="INSERT INTO `user_data`(`id`, `jina`, `umri`, `simu`) VALUES (NULL,'$name','$age','$phone')";
		
		//use mysqli_query function to execute the insert query mysqli_query(con,query)
		$save=mysqli_query($conn,$adduserdata);
		
		//check if saving was successful
		if (!$save){
			echo "<h1>Saving Failed</h1>";
		}else{
			//echo "<h1>Data Saved Successfully</h1>";
			//echo "<p><a href='save_data.php'>Register Again</a></p>";
			
			//Go back to save data saving file automatically
			header("location:save_data.php");
		}
	}
	

?>