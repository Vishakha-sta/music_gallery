<link rel="stylesheet" href="../css/admin_dashboard.css">
<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        include '../includes/db.php';
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT adminname, password FROM `admin` WHERE adminname = '".$username."' AND password = '".$password . "'";
        $result = $con->query($sql);
        if($result->num_rows == 1){
            $row = mysqli_fetch_assoc($result);
                // if($password == $row['password']){
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['adminname'] = $username;
                    $_SESSION['fname'] = $row['fname'];
                    $_SESSION['lname'] = $row['lname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['adminid'] = $row['adminid'];
                    header('location: ../admin/admin_dashboard.php');
        }
        else{
            echo  '<script>
                        alert("I am Devil: Invalid Credentials");
                    </script>';
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
	<link rel="stylesheet" type="text/css" media="screen" href="../css/login.css" />
	<title>Admin Login page</title>
	
</head>

<body>
	<div class="one container my-3" style="width: 600px; height: auto; border-radius:3%;">
		<h1 class="p-2">Admin Login</h1>
		<hr>
		<form class="g-3 p-2" action="/php/music_gallery/login_system/admin_login.php" method="POST" onsubmit="return checkForm(this);">
			
			<div class="form-group p-2">
				<label for="username" class="form-label">Username</label>
				<input type="text" maxlength="25" class="form-control" placeholder="Username" id="username" name="username" aria-describedby="emailHelp">
			</div>
			<div class="form-group p-2">
				<label for="inputPassword4" class="form-label">Password</label>
				<input type="password" class="form-control" placeholder="Password" id="password" name="password">
			</div>

			<!-- <div class="align-left">
				<p>Don't have an account? <a href="admin_signup.php">signup</a>.</p>
			</div> -->
			<center>
				<div class="container form-group col p-2">
					<button type="submit" name="signup" class="btn btn-primary">Login Now</button>
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
