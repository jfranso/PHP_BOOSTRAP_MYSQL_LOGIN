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
	<title>Update Users Data</title>
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    
</head>
<body>

<?php
	
	if (isset($_GET['rowid']))
	{
		
		//Assign the values to new Variables
		$id=$_GET['rowid'];
		$name=$_GET['rowjina'];
		$age=$_GET['rowumri'];
		$phone=$_GET['rowsimu'];
		
	}
?>
<div class="reg_div">
<form action="update_data_handler.php" method="post">
	<input type="text" name="xid" Value=" <?php echo $id; ?>" hidden><br><br>
	<input type="text" name="xjina" Value=" <?php echo $name; ?>" required><br><br>
	<input type="text" name="xumri" Value=" <?php echo $age; ?>" required><br><br>
	<input type="text" name="xsimu" Value=" <?php echo $phone; ?>" required><br><br>
	<input type="submit" name="btn_update" Value="Update" class="btn btn-outline-success btn-block">
    <a href="view_data.php"  class="btn btn-outline-primary btn-block">Back</a>
</form>
</div>
</body>
</html>
