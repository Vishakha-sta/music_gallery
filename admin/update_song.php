<?php include 'admin_header.php'; ?>

<?php

$id = $_GET['songid'];

$sql1 = "SELECT * FROM `songs` WHERE songid = '".$id."' ";
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
    $file01 = $_FILES['music'];
    if($file['size']!=0  &&  $file01['size']!=0 ){
        // print_r($file);
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        
        $filename01 = $file01['name'];
        $filepath01 = $file01['tmp_name'];
        $fileerror01 = $file01['error'];

        if($fileerror == 0){
            $destfile = 'image/song_img/'.$filename;
            $destfile1 = '../image/song_img/'.$filename;
            if(move_uploaded_file($filepath,$destfile1)){
                // echo "song Photo has been updated";
                // echo $destfile;
            }
            else{
                echo '<script>alert("Can not update this Song!")</script>';
            }
        }
        if($fileerror01 == 0){
            $destfile01 = 'music/'.$filename01;
            $destfile011 = '../music/'.$filename01;
            if(move_uploaded_file($filepath01,$destfile011)){
                // echo "Song Photo has been updated";
                // echo $destfile;
            }
            else{
                echo '<script>alert("Can not update this Song!")</script>';
            }
        }
        
        $succ = mysqli_query($con,"UPDATE songs set songname='" . $_POST['songname'] . "',albumid='" . $_POST['albumid'] . "',artistid='" . $_POST['artistid'] . "',artistname='" . $_POST['artistname'] . "', songimg='" . $destfile . "', songpath='" . $destfile01 . "' WHERE songid='" . $id . "'");
    }
    else if($file['size']!=0){
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        
        if($fileerror == 0){
            $destfile = 'image/song_img/'.$filename;
            $destfile1 = '../image/song_img/'.$filename;
            if(move_uploaded_file($filepath,$destfile1)){
                // echo "song Photo has been updated";
                // echo $destfile;
            }
            else{
                echo '<script>alert("Can not update this Song!")</script>';
            }
        }
        
        $succ = mysqli_query($con,"UPDATE songs set songname='" . $_POST['songname'] . "',albumid='" . $_POST['albumid'] . "',artistid='" . $_POST['artistid'] . "',artistname='" . $_POST['artistname'] . "', songimg='" . $destfile . "' WHERE songid='" . $id . "'");
    }
    else if($file01['size']!=0){
        
        $filename01 = $file01['name'];
        $filepath01 = $file01['tmp_name'];
        $fileerror01 = $file01['error'];

        if($fileerror01 == 0){
            $destfile01 = 'music/'.$filename01;
            $destfile011 = '../music/'.$filename01;
            if(move_uploaded_file($filepath01,$destfile011)){
                // echo "Song Photo has been updated";
                // echo $destfile;
            }
            else{
                echo '<script>alert("Can not update this Song!")</script>';
            }
        }
        
        $succ = mysqli_query($con,"UPDATE songs set songname='" . $_POST['songname'] . "',albumid='" . $_POST['albumid'] . "',artistid='" . $_POST['artistid'] . "',artistname='" . $_POST['artistname'] . "', songpath='" . $destfile01 . "' WHERE songid='" . $id . "'");
    }

    else{
        $succ = mysqli_query($con,"UPDATE songs set songname='" . $_POST['songname'] . "',albumid='" . $_POST['albumid'] . "',artistid='" . $_POST['artistid'] . "',artistname='" . $_POST['artistname'] . "' WHERE songid='" . $id . "'");
    }

    if($succ){
        echo '<script>alert("Song has been Updated succesfully!!!")</script>' ; 
       
    }
    }
?>



    <div class="users-boxes">
    <link rel="stylesheet" href="../css/songs.css">
    <div class="cards">
        
                    <div class="music_card">
                        <div class="imgBx">
                            <img src="<?php echo "../".$row['songimg']; ?>" style="width: 250px" alt="">
                        </div>
                        <audio controls>
                            <source src="<?php echo "../".$row['songpath']; ?>" type="audio/mp3">
                        </audio>
                    </div>
                
    </div>
    <div class="recent-box">
    <form action="#" method="post" enctype="multipart/form-data">
            <div class="title">Update Songs</div><br>
            <div class="inputbox">
                <input type="text" name="songname" value="<?php echo $row['songname']; ?>" 
                 required>
                <span>Song Name</span>
            </div><br><br>
            <div class="inputbox">
                <select name="albumid" >
                    <option value="<?php echo $row['albumid'];?>" selected><?php echo $row['albumid'];?></option>
                <?php
                    include '../includes/db.php';
                    $sql = "SELECT * FROM albums ";
                    $result=mysqli_query($con,$sql);
                    if(!$result)
                    {
                        echo "Error ".$sql."<br>".mysqli_error($con);
                    }
                    while($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <option class="table" value="<?php echo $rows['albumid'];?>" >
                    
                        <?php echo $rows['albumid'] ;?>  
                        <?php echo $rows['albumname'] ;?>  
                
                    </option>
                <?php 
                    } 
                ?>
            </select>
                <span>Album Id</span>
            </div><br><br>
            <div class="inputbox">
            <select name="artistid">
            <option value="<?php echo $row['artistid'];?>" selected><?php echo $row['artistid'];?></option>
                <?php
                    include '../includes/db.php';
                    $sql = "SELECT * FROM artists ";
                    $result=mysqli_query($con,$sql);
                    if(!$result)
                    {
                        echo "Error ".$sql."<br>".mysqli_error($con);
                    }
                    while($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <option class="table" value="<?php echo $rows['artistid'];?>" >
                    
                        <?php echo $rows['artistid'] ;?>  
                        <?php echo $rows['artistname'] ;?>  
                
                    </option>
                <?php 
                    } 
                ?>
            </select>
                <span>Artist Id</span>
            </div><br><br>
            <div class="inputbox">
                <input type="text" name="artistname" value="<?php echo $row['artistname']; ?>" >
                <span>Artist Name</span>
            </div><br><br>
            
            <div class="inputbox">
                <input type="file" name="photo" value="<?php echo $row['songimg']; ?>">
                <span>Song Cover Photo</span>
            </div><br><br>

            <div class="inputbox">
                <input type="file" name="music" value="<?php echo $row['songpath']; ?>" >
                <span>Song Audio MP3</span>
            </div><br><br>

            <div class="inputbox" align="left">
                <input type="submit" name="submit" value="Update">
            </div><br>
        </form>
        </form>
    </div>
</div>

<?php include 'admin_footer.php'; ?>