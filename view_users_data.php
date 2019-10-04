<?php
	session_start();
	if (!isset($_SESSION['xuname'])){
		header("location:login.php");
	}
?>
	
<?php
	
		//connect to DB
	require 'connection.php';
	$getusersdata="SELECT `id`, `jina`, `umri`, `simu` FROM `user_data` ";
	$getdetails=mysqli_query($conn,$getusersdata);
	
	echo "<H1>LIST OF CLIENTS</H1>";
	
		echo"<table border=1>";
		
		echo "<TR>";
		echo"<Th>No</Th>";
		echo"<Th>Name</Th>";
		echo"<Th>Age</Th>";
		echo"<Th>Tel</Th>";
		echo "</TR>";
		
		while ($row=mysqli_fetch_array($getdetails)){
			echo "<TR>";
			echo"<Td>". $row['id']."</Td>";
			echo"<Td>". $row['jina']."</Td>";
			echo"<Td>". $row['umri']."</Td>";
			echo"<Td>". $row['simu']."</Td>";
			echo "</TR>";
			
		};
		
		echo"</table>";
	
	?>