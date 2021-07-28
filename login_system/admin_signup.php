<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include '../includes/db.php';
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $existsql = "SELECT * FROM `admin` WHERE adminname = '$username'";
        $result = mysqli_query($con,$existsql);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows>0){
            echo '<script>
            alert("Username already exists.");
            </script>';
        }
        else{     
            
            $sql = "INSERT INTO `admin`( `fname`, `lname`, `adminname`, `email`, `password`) VALUES ('$fname','$lname','$username','$email','$password')";

            $result = mysqli_query($con,$sql);
            if($result){
            echo '<script>alert("Result is inserted");</script>';
         }
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon -->
  <link rel="icon" href="../img/core-img/favicon.ico">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" media="screen" href="../css/signup.css" />
	<title>Admin signup Page</title>

</head>

<body>
	<div class="one container my-3" style="width: 600px; height: auto; border-radius:3%;">
		<h1 class="p-2">Admin Reg<span style="color:blue; font-size:70px;">i</span>ster</h1>
		<hr>
		<form class="g-3 p-2" action="/php/music_gallery/login_system/admin_signup.php" method="POST" onsubmit="return checkForm(this);">
			<div class="row g-3 p-2">
				<div class="col">
					<div class="form-group">
						<label for="inputFname" class="form-label">First name</label>
						<input type="text" class="form-control" id="fname" name="fname" placeholder="First name" aria-label="First name">
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="inputLname" class="form-label">Last name</label>
						<input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" aria-label="Last name">
					</div>
				</div>
			</div>
			<div class="form-group p-2">
				<label for="username" class="form-label">Username</label>
				<input type="text" maxlength="25" class="form-control" placeholder="Username" id="username" name="username" aria-describedby="emailHelp">
			</div>
			<div class="form-group p-2">
				<label for="inputEmail4" class="form-label">Email</label>
				<input type="email" class="form-control" placeholder="Email" id="email" name="email">
			</div>
			<div class="form-group p-2">
				<label for="inputPassword4" class="form-label">Password</label>
				<input type="password" class="form-control" placeholder="Password" id="password" name="password">
			</div>

			<div class="align-left">
				<p>Already signed up? <a href="admin_login.php">Login</a>.</p>
			</div>
			<center>
				<div class="container form-group col p-2">
					<button type="submit" name="signup" class="btn btn-primary">Register Now</button>
				</div>
				<center>
		</form>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<!-- Option 2: Separate Popper and Bootstrap JS -->

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>