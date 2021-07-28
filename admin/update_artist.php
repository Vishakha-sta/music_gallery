<?php include 'admin_header.php'; ?>

<?php

$id = $_GET['artistid'];

$sql1 = "SELECT * FROM `artists` WHERE artistid = '".$id."' ";
$result = mysqli_query($con , $sql1);
if($result){
    // echo "this is working";
    $row= mysqli_fetch_array($result);
}
else {
    echo "this is not working";
}

if(count($_POST)>0) {
                    
    $file = $_FILES['photo'];
    if($file['size']!=0){
        // print_r($file);
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = 'image/artist_img/'.$filename;
            $destfile1 = '../image/artist_img/'.$filename;
            if(move_uploaded_file($filepath,$destfile1)){
                // echo "Profile Photo has been updated";
                // echo $destfile;
            }
            else{
                echo '<script>alert("Can not update this Artist!")</script>';
            }
        }
        
        $succ = mysqli_query($con,"UPDATE artists set artistname='" . $_POST['artistname'] . "', artist_img='" . $destfile . "' WHERE artistid='" . $id . "'");
    }
    else{
        $succ = mysqli_query($con,"UPDATE artists set artistname='" . $_POST['artistname'] . "' WHERE artistid='" . $id . "'");

    }

    if($succ){
        echo '<script>alert("Artist has been Updated succesfully!!!")</script>' ; 
       
    }
    }
?>



    <div class="users-boxes">
    <div class="recent-box">
    <form action="#" method="post" enctype="multipart/form-data">
            <div class="title">Update Artist</div><br>
            <div class="inputbox">
                <input type="text" name="artistname" value="<?php echo $row['artistname']; ?>" 
                >
                <span>Album Name</span>
            </div><br><br>
        
            <div class="inputbox">
                <input type="file" name="photo" value="<?php echo $row['artist_img']; ?>"  >
                <span>Album Photo</span>
            </div><br><br>
            
            <div class="inputbox" align="left">
                <input type="submit" name="submit" value="Update">
            </div><br>
        </form>
    </div>
</div>

<?php include 'admin_footer.php'; ?>