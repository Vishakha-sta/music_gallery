<?php include 'admin_header.php'; ?>

<?php
include '../includes/db.php';

if(isset($_POST['submit'])){
    $artistname = $_POST['artistname'];
    $file = $_FILES['photo'];

    // print_r($file);
    if($file['size']!=0){
    
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = 'image/artist_img/'.$filename;
            $destfile1 = '../image/artist_img/'.$filename;
            move_uploaded_file($filepath,$destfile1);
        }

        $sql = "INSERT INTO `artists`( `artistname`, `artist_img`) VALUES ('$artistname','$destfile')";

        $result = mysqli_query($con , $sql);
    }
    
    if($result){
        echo   "<script>alert('Artist has been Added succesfully');</script>";
    }
    else {
        echo  "this is not working";
    }
}

?>
    <div class="users-boxes">
    <div class="recent-box">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="title">Add Artists</div><br>
            <div class="inputbox">
                <input type="text" name="artistname" 
                 required>
                <span>Artist Name</span>
            </div><br><br>
        
            <div class="inputbox">
                <input type="file" name="photo" value="" placeholder="Choose Artist Photo" required >
                <span>Artist Photo</span>
            </div><br><br>
            
            <div class="inputbox" align="left">
                <input type="submit" name="submit" value="Submit">
            </div><br>
        </form>
    </div>
</div>

<?php include 'admin_footer.php'; ?>