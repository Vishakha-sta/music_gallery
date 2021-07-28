<?php include 'admin_header.php'; ?>

<?php
include '../includes/db.php';

if(isset($_POST['submit'])){
    $songname = $_POST['songname'];
    $albumid = $_POST['albumid'];
    $artistid = $_POST['artistid'];
    $artistname = $_POST['artistname'];
    $file = $_FILES['photo'];
    $file01 = $_FILES['music'];
    $destfile = "";
    $destfile01 = "";

    // print_r($file1);
    if($file['size']!=0 || $file01['size']!=0){
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = 'image/song_img/'.$filename;
            $destfile1 = '../image/song_img/'.$filename;
            move_uploaded_file($filepath,$destfile1);
        }

        $filename01 = $file01['name'];
        $filepath01 = $file01['tmp_name'];
        $fileerror01 = $file01['error'];

        if($fileerror01 == 0){
            $destfile01 = 'music/'.$filename01;
            $destfile011 = '../music/'.$filename01;
            move_uploaded_file($filepath01,$destfile011);
        }

        $sql = "INSERT INTO `songs`( `songname`, `albumid`, `artistid`, `artistname`, `songimg`, `songpath`) VALUES ('$songname','$albumid','$artistid','$artistname','$destfile','$destfile01')";

        $result = mysqli_query($con , $sql);
    }
    
    if($result){
        echo   "<script>alert('Song has been Added succesfully');</script>";
    }
    else {
        echo  "this is not working";
    }
}

?>
    <div class="users-boxes">
    <div class="recent-box">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="title">Add Songs</div><br>
            <div class="inputbox">
                <input type="text" name="songname" 
                 required>
                <span>Song Name</span>
            </div><br><br>
            <div class="inputbox">
                <select name="albumid"  required>
                    <option value="" disabled selected>--</option>
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
            <select name="artistid"  required>
                    <option value="" disabled selected>--</option>
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
                <input type="text" name="artistname" 
                 required>
                <span>Artist Name</span>
            </div><br><br>
            
            <div class="inputbox">
                <input type="file" name="photo"   required >
                <span>Song Cover Photo</span>
            </div><br><br>

            <div class="inputbox">
                <input type="file" name="music"   required >
                <span>Song Audio MP3</span>
            </div><br><br>
            
            <div class="inputbox" align="left">
                <input type="submit" name="submit" value="Submit">
            </div><br>
        </form>
    </div>
</div>

<?php include 'admin_footer.php'; ?>