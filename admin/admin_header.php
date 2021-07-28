<link rel="stylesheet" href="../css/admin_dashboard.css">
<?php include '../includes/db.php'; ?>
<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	header("location: index.php");
//  	//echo"vishakha<br>";
	exit;
}
$username= $_SESSION["adminname"];
// $username= "Vishakha";
$sql = "SELECT * FROM `admin` WHERE `adminname` = '$username'";
// $sql = "SELECT * FROM `users` WHERE `username` = 'vishakha'";
$result = mysqli_query($con , $sql);
if($result -> num_rows == 1 ){
    while($row = $result->fetch_assoc()){

?> 
<!DOCTYPE html>
<html>
  <head>
    <!-- Boxicons CDN Link -->
    <meta charset="UTF-8">
  <meta name="description" content="Poca - Podcast &amp; Audio Template">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon -->
  <link rel="icon" href="../img/core-img/favicon.ico">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin_dashboard.css">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <span class="logo_name">Music Gallery</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin_dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="view_users.php">
            <i class='fa fa-users' ></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="view_songs.php">
            <i class='fa fa-music' ></i>
            <span class="links_name">Songs</span>
          </a>
        </li>
        <li>
          <a href="edit_data.php">
            <i class='fa fa-icons' ></i>
            <span class="links_name">Edit Song</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='fa fa-info' ></i>
            <span class="links_name">About Us</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='fa fa-id-card' ></i>
            <span class="links_name">Contact Us</span>
          </a>
        </li> -->
        <li>
          <a href="admin_edit_profile.php">
            <i class='fa fa-user' ></i>
            <span class="links_name">Profile</span>
          </a>
        </li>
        <li class="log_out">
          <a href="admin_logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Welcome Admin - <p>
          <?php echo $row['fname']; ?>
          <!-- <?php echo $_SESSION['fname']; ?> -->
        </p></span>
      </div>
    </nav>
    <?php
    }
  }
    ?>
   <div class="home-content">

        

    

