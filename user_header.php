<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>user header</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="css/user_header.css">
    </head>
    <body>
        <input type="checkbox" id="check">
        <header>
            <div class="head">
                <div class="logo_box">
                    <img class="logo" src="image/music-magpie-leaf-logo.png" alt="icon">
                    <label for="check">
                        <i class="fas fa-bars" id="sidebar_btn"></i>
                    </label>
                </div>
                <div class="username">
                    <span>Welcome -<p> Vishakha</p></span>
                </div>
            </div>
        </header>

        <div class="sidebar">
            <div class="pro">
            <center>
                <img src="image/profile-5-1.jpg" class="profile_image" alt="profile">
                <h4>Vishakha </h4>
            </center>
            </div>
            <a href="search.php"><i class="fas fa-search"></i><span>search</span></a>
            <a href="user_dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href="playlist.php"><i class="fas fa-headphones"></i><span>playlist</span></a>
            <a href="album.php"><i class="fas fa-compact-disc"></i><span>album</span></a>
            <a href="artist.php"><i class="fas fa-music"></i><span>artist</span></a>
            <a href="songs.php"><i class="fas fa-record-vinyl"></i><span>songs</span></a>
            <a href="edit_profile.php"><i class="fas fa-user-edit"></i><span>profile</span></a>
            <a href="#"><i class="fas fa-layer-group"></i><span>about us</span></a>
            <a href="#"><i class="fas fa-address-book"></i><span>contact us</span></a>
            <a href="#"><i class="fas fa-sign-out-alt"></i><span>logout</span></a>
        </div>

        <div class="content">
            <?php
                /*include 'user_dashboard.php';*/
            ?>
            <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Quae tenetur porro enim recusandae repellat voluptas 
                voluptatem. Ipsam amet ea pariatur perferendis, 
                ipsa deleniti nobis, omnis vitae id hic possimus blanditiis.</p> -->
      