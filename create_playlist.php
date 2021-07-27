<style>
    body {
        font-family: fangsong;
        background-color: #212156;
        color: #c7c5e6;
        /* text-align: center; */
    }
    
    .pass_update {
        margin-top: 20px;
        color: rgb(40, 9, 70);
    }
    
    .edit_page {
        text-align: center;
    }
    
    .edit_page a {
        color: yellow;
    }
    .fa, .fab, .fad, .fal, .far, .fas {
        line-height: 2.5 !important;
    }
    h2{
        color:purple;
        text-align:center;
    }
</style>

<link rel="stylesheet" href="css/user_header.css">
<?php include 'user_header.php'; ?>
<?php
include 'includes/db.php';
$id= $_SESSION["userid"];
// $id= 1;

if(isset($_POST['submit'])){
    $playlistname = $_POST['playlistname'];
    $userid = $id;
    
    $file = $_FILES['photo'];

    // print_r($file);
    if($file['size']!=0){
    
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = 'image/playlist_img/'.$filename;
            move_uploaded_file($filepath,$destfile);
        }

        $sql = "INSERT INTO `playlist`( `playlistname`, `userid`, `playlist_img`) VALUES ('$playlistname',$userid,'$destfile')";

        $result = mysqli_query($con , $sql);
    }
    else{
        $destfile = 'image/playlist_img/empty_playlist.jpg';
            
        $sql = "INSERT INTO `playlist`( `playlistname`, `userid`, `playlist_img`) VALUES ('$playlistname',$userid,'$destfile')";

        $result = mysqli_query($con , $sql);
    }
    if($result){
        echo   "<h2>Playlist has been created succesfully</h2>";
    }
    else {
        echo  "this is not working";
    }
}

?>
<link rel="stylesheet" href="css/edit_profile.css">

<body class="this">
    <div class="form">
        <center>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-field">
                    <label for="playlistname">Playlist Name :</label>
                    <input type="text" name="playlistname"  placeholder="Enter playlist">
                </div>
                <div class="form-field">
                    <label for="playlist_img">Playlist Photo :</label>
                    <input type="file" name="photo" value="" placeholder="Choose playlist image">
                </div>
                <div class="form-field">
                    <input class="btn" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </center>
    </div>
    
</body>



<?php include 'footer.php'; ?>
