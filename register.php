<!doctype html>
<html lang="en">

<head>
	
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	
    <title>Register</title>
	
	<script src="bootstrap/js/jquery-3.4.0.js"></script>
	<script src="bootstrap/js/popper.min.js-3.4.0.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/custom.css">
	
</head>
<body>

<div class="reg_div">
	
	<form action="register_handler.php" class="was-validated" method="post">
		
		<div class="form-group">
			<label for="uname">Username:</label>
			<input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
		</div>
		
		<div class="form-group">
			
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
			<div class="valid-feedback">Valid.</div>
			<div class="invalid-feedback">Please fill out this field.</div>
			
		</div>
		
		<!--<div class="form-group form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Check this checkbox to continue.</div>
			</label>
		</div> -->
		
		<button type="submit" class="btn btn-outline-primary btn-block" name="btn_reg">Submit</button>
		
	</form>
	
	
</div>
</body>
</html>