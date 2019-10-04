<?php
	session_start();
	if (!isset($_SESSION['xuname'])){
		header("location:login.php");
	}
?>
<?php
	
	if (isset($_GET['rowid'])) {
		//Assign the value to another Variable in a different container
		$id = $_GET['rowid'];
		
		//TO Implement the delete,Connect to the database
		//First Require the connection.php here to achieve this
		require 'connection.php';
		
		//Start by creating the delete query
		$delete = "DELETE FROM user_data WHERE id='$id'";
		
		//To achieve the deletion use the mysqli_query function
		$deletequery = mysqli_query($conn, $delete);
		
		//Check if the deletion was successful
		if (!$deletequery) {
			echo "<h1>Deleting Failed !!!!</h1>";
		}else{
			//Redirect the user to view_data.php to see if the record was deleted
			header("location:view_data.php");
		}
		
	}