<?php
	session_start();
	if (!isset($_SESSION['xuname'])){
		header("location:login.php");
	}
?>
<?php
	
	//Check if button has been clicked
	if (isset($_POST['btn_update']))
	{
		//Establish connection here
		require 'connection.php';
		
		//Collect data from the form that is to be updated
		$uid=$_POST['xid'];
		$ujina=$_POST['xjina'];
		$uumri=$_POST['xumri'];
		$usimu=$_POST['xsimu'];
		
		//Establish QUERY to update here
		$updatedata="UPDATE user_data SET jina='$ujina',umri='$uumri',simu=$usimu WHERE id='$uid'";
		//use mysqli_query() function to execute the update
		$check=mysqli_query($conn,$updatedata);
		
		//Check if the update was successful
		if (isset($check)){
			//Redirect the user to back to view_data.php to see if the record was updated
			header("location:view_data.php");
		}else{
			echo "Oops!!! Record NOT updated";
		}
		
	}
?>

