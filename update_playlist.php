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

<?php include 'user_header.php'; ?>
<?php

$id = $_GET['playlistid'];

$sql1 = "SELECT * FROM playlist WHERE playlistid = '".$id."' ";
$result = mysqli_query($con , $sql1);
if($result){
    // echo "this is working";
    $row= mysqli_fetch_array($result);
}
else {
    echo "this is not working";
}
    // echo $row['playlistname'];
    // echo $row['playlist_img'];
    
                
if(count($_POST)>0) {
    $file = $_FILES['photo'];
    if($file['size']!=0){
        print_r($file);
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = 'image/playlist_img/'.$filename;
            if(move_uploaded_file($filepath,$destfile)){
                echo '<script>alert("Profile Photo has been updated!")</script>';
                // echo "Profile Photo has been updated";
                // echo $destfile;
            }
            else{
                echo '<script>alert("file has not been updated!")</script>';
            }
        }
        
        $succ = mysqli_query($con,"UPDATE playlist set playlistname='" . $_POST['playlistname'] . "', photo='" . $destfile . "' WHERE playlistid='" . $id . "'");
    }

    else{
        $succ = mysqli_query($con,"UPDATE playlist set playlistname ='" . $_POST['playlistname'] . "'  WHERE playlistid='" . $id . "'");

    }

    if($succ){
        echo '<script>alert("Playlist has been Updated succesfully!!!")</script>' ; 
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
                    <input type="text" name="playlistname"  value="<?php echo $row['playlistname']; ?>"   placeholder="Enter playlist">
                </div>
                <div class="form-field">
                    <label for="playlist_img">Playlist Photo :</label>
                    <input type="file" name="photo" placeholder="Choose playlist image">
                </div>
                <div class="form-field">
                    <input class="btn" type="submit" name="update" value="Update">
                </div>
            </form>
        </center>
    </div>
    
</body>

<?php include 'footer.php'; ?>



