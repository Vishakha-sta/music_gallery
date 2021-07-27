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
    a{
        text-decoration:none;
        color:purple;
        text-align:center;
    }
    a:hover{
        
        color:magenta;
        
    }
</style>

<?php include 'user_header.php'; ?>
<?php
include 'includes/db.php';
$id=$_GET['playlistid'];
if(isset($_POST['submit'])){
    $songid = $_POST['songid'];
    $playlistid = $id;
    
    $sql = "INSERT INTO `playlist_songs`( `playlistid`, `songid`) VALUES ('$playlistid','$songid')";

    $result = mysqli_query($con , $sql);
    if($result){
        echo   "<h2>Song has been added to your playlist!!!</h2>";
    }
    else {
        echo  "Can not add the song to your playlist!";
    }
}

?>
<link rel="stylesheet" href="css/edit_profile.css">

<body class="this">
    <div class="form">
        <center>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-field">
                <label>Add song to playlist :</label>
                <select name="songid"  required>
                <option value="" disabled selected>Choose</option>
            <?php
                include 'includes/db.php';
                $id=$_GET['playlistid'];
                $sql = "SELECT * FROM songs ";
                $result=mysqli_query($con,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($con);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['songid'];?>" >
                
                    <?php echo $rows['songname'] ;?>  
                    <?php echo $rows['artistname'] ;?>  
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
                </div>
                
                <div class="form-field">
                    <input class="btn" type="submit" name="submit" value="Submit">
                </div>
            </form>
        </center>
    </div>
    <center><a href="playlist_songs.php?playlistid=<?php echo $id; ?>">View playlist</a></center>
</body>



<?php include 'footer.php'; ?>
