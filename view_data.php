<?php
	session_start();
	if (!isset($_SESSION['xuname'])){
		header("location:login.php");
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>User Data</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>

<a href="save_data.php" class="btn btn-primary">Register</a>
<table class="table table-hover table-dark" >

		<tr>
		<th>Name</th>
		<th width="10%">Age</th>
		<th width="20%">Phone</th>
		<th width="10%"></th>
		<th width="10%"></th>
		</tr>

	
	<?php
		//To collect data from the DB,first conncet to the db
		//Require your connect.php file to achieve this
		
		require 'connection.php';
		
		//Select the data using the SQL select query
		$query="SELECT * FROM user_data";
		
		//TO implement the select mysqli_query function
		$select=mysqli_query($conn,$query);
		
		//use the while loop to loop through your data on variable $select
		//as you display
		
		//First define variables so that the errors can disappear (This is initialization)
		$jina="";
		$umri="";
		$simu="";
		$id="";
		
		while ($row=mysqli_fetch_assoc($select)){
			
			//extract your looped data that is now on variable $row
			extract($row);
			
			echo "
			<tr>
				<td>$jina</td>
				<td>$umri</td>
				<td>$simu</td>
				<td><a href='delete_handler.php?rowid=$id' class='btn btn-danger'>Delete</a></td>
				<td><a href='update_data.php?rowid=$id&rowjina=$jina&rowumri=$umri&rowsimu=$simu' class='btn btn-primary'>Update</a></td>
			</tr>";
		}
		
	?>
	

</table>

</body>
</html>

