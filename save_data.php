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
    <title>Save Data</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>

<h1>
    <?php
        echo "Welcome " .$_SESSION['xuname'];
        ?>
</h1>

<a href="logout.php">Logout</a>

<div class="reg_div">

    <form action="save_data_handler.php" method="post">

        <input type="text" placeholder="Enter Jina" name="jinax" required><br><br>
        <input type="text" placeholder="Enter Umri" name="umrix" required><br><br>
        <input type="text" placeholder="Enter Nambari ya Simu" name="simux" required><br><br>

        <input type="Submit" value="Save" name="btn_save" class="btn btn-outline-success btn-block"><br>
        <a href="view_data.php" class="btn btn-outline-primary btn-block">View Data</a>
        
    </form>
    
</div>

<a href="view_data.php"><button>View Data</button></a>



</body>
</html>