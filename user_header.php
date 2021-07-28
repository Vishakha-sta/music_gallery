<?php include 'includes/db.php'; ?>
<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	header("location: index.php");
 	//echo"vishakha<br>";
	exit;
}
$username= $_SESSION["username"];
$sql = "SELECT * FROM `users` WHERE `username` = '$username'";
// $sql = "SELECT * FROM `users` WHERE `username` = 'vishakha'";
$result = mysqli_query($con , $sql);
if($result -> num_rows == 1 ){
    while($row = $result->fetch_assoc()){

    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <meta charset="UTF-8">
        <meta name="description" content="Poca - Podcast &amp; Audio Template">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="icon" href="./img/core-img/favicon.ico">


        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <title>user header</title>
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="css/user_header.css">
    </head>
    <body>
        <input type="checkbox" id="check">
        <header>
            <div class="head">
                <div class="logo_box">
                    <img class="logo" src="image/music-magpie-leaf-logo.png" alt="icon">
                    <!-- <img class="logo" src="image/logo2.png" alt="icon"> -->
                    <label for="check">
                        <i class="fas fa-bars" id="sidebar_btn"></i>
                    </label>
                </div>
                <div class="username">
                    <span>Welcome -<p> <?php echo $row['fname']; ?></p></span>
                    <!-- <span>Welcome -<p> <?php echo $_SESSION['fname']; ?></p></span> -->
                </div>
            </div>
        </header>

        <div class="sidebar">
            <div class="pro">
            <center>
                <img src="<?php echo $row['photo']; ?>" class="profile_image" alt="profile">
                <!-- <img src="<?php echo $_SESSION['photo']; ?>" class="profile_image" alt="profile"> -->
                <h4><?php echo $row['fname']; ?> </h4>
                <!-- <h4><?php echo $_SESSION['fname']; ?> </h4> -->
            </center>
            </div>
            <a href="search.php"><i class="fas fa-search"></i><span>search</span></a>
            <a href="user_dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href="songs.php"><i class="fas fa-record-vinyl"></i><span>songs</span></a>
            <a href="album.php"><i class="fas fa-compact-disc"></i><span>album</span></a>
            <a href="artist.php"><i class="fas fa-music"></i><span>artist</span></a>
            <a href="playlist.php"><i class="fas fa-headphones"></i><span>playlist</span></a>
            <!-- <a href="edit_profile.php?userid=<?php echo $row['userid'];?>"><i class="fas fa-user-edit"></i><span>profile</span></a> -->
            <a href="edit_profile.php"><i class="fas fa-user-edit"></i><span>profile</span></a>
            
            <!-- <a href="#"><i class="fas fa-layer-group"></i><span>about us</span></a>
            <a href="#"><i class="fas fa-address-book"></i><span>contact us</span></a> -->
            <a href="user_logout.php"><i class="fas fa-sign-out-alt"></i><span>logout</span></a>
        </div>

        <div class="content">
            <?php

                    }//while loop
                }//if condition
                else{
                    echo "Check your username!!";
                }
            ?>
         
      