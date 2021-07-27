<?php include 'user_header.php'; ?>

    <title>Songs</title>
    <link rel="stylesheet" href="css/songs.css">

<body>

    <div class="heading">
        <h2><i class="fas fa-guitar"></i> Songs</h2>
    </div>

    <div class="cards">
        
        <?php  
            $id = $_GET['albumid'];
            $sql = "SELECT * FROM `songs` WHERE albumid = ".$id;
            $result = mysqli_query($con , $sql);
            if($result -> num_rows  > 0 ){
                while($row = $result->fetch_assoc()){                
                    ?>
                    <div class="music_card">
                        <div class="imgBx">
                            <img src="<?php echo $row['songimg']; ?>" style="width: 250px" alt="">
                        </div>
                        <audio controls>
                            <source src="<?php echo $row['songpath']; ?>" type="audio/mp3">
                        </audio>
                    </div>
                <?php }
            } ?>
                
    </div>
</body>
<?php include 'music_player.php'; ?>
<?php include 'footer.php'; ?>