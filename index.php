<?php 
session_start();
if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login & Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<style> 
		body{
	background-image: url("p2.jpg");
	background-size: cover;
	background-position: center;
}
	</style>
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6">
			<h2>Login Form</h2> <br>
			<form action="uservalidation.php" method="post">
				<div class="form-group">

					<label><b>Username</b></label>
					<input type="text" name="user" class="form-control" placeholder="Enter Username" required>
				</div>
				<div class="form-group">

					<label><b>Password</b></label>
					<input type="Password" name="pass" class="form-control" placeholder="Enter Password" required>
				</div>
				<button type="submit" class="btn btn-primary"> Login </button>

			</form>
		</div>
    <div class="col-md-6">
			<h2>Registration Form</h2> <br>
			<form action="registration.php" method="post">
				<div class="form-group">

					<label><b>Full Name</b></label>
					<input type="text" name="user" class="form-control" placeholder="Enter Fullname" required>
				</div>
                <div class="form-group">

					<label><b>Email</b></label>
					<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
				</div>

				<div class="form-group">

					<label><b>Password</b></label>
					<input type="Password" name="pass" class="form-control" placeholder="Create Password" required>
				</div>
                
                <div class="form-group">

					<label><b>Religion</b></label> <br> 

					<select name="religion" required>
						    <option value="Islam">Select Religion</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Christian">Christian</option>
                            
                          </select>
				</div>

				<div class="form-group">

					<label><b>Gender</b></label> <br>
					<input type="radio" name="gender" value="Male" required>Male &nbsp;
                          <input type="radio" name="gender" value="Female" required>Female
				</div>

				<div class="form-group">
				<input type="checkbox" name="terms" id="check" value="term" required > <b>I Agree With the Terms & Conditions</b>
				</div>


				<button type="submit" class="btn btn-primary"> Register Now </button>

			</form>
		</div>


    </div>

		</div>
	</div>

</body>
</html>