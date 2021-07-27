<?php include 'user_header.php'; ?>

    <title>Playlist Songs</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro'>
  <link rel="stylesheet" href="css/song_cards.css">
    <link rel="stylesheet" href="css/songs.css">

<body>

<div class="heading">
                <h2><i class="fas fa-music"></i> Playlist</h2>
            </div>

    <div class="cards">
        
        <?php  
            $id = $_GET['playlistid'];
            $sql = "SELECT * FROM `playlist_songs` WHERE playlistid = ".$id;
            $result = mysqli_query($con , $sql);
            if($result -> num_rows  > 0 ){
                while($rows = $result->fetch_assoc()){
                    $sql1 = "SELECT * FROM `songs` WHERE songid = ".$rows['songid'];
                    $result = mysqli_query($con , $sql1);
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
            }
         }
         } ?>

                
    </div>

    <div class="box_it">
    
                        <a href="add_songs_to_playlist.php?playlistid=<?php echo $id; ?>">    
                            <div class='music-card'>
                                <div class='image'>
                                    <img src='image/playlist.jpg'>
                                </div>
                                <div class='wave'></div>
                                <div class='wave'></div>
                                <div class='wave'></div>
                                <div class='info'>
                                    <h2 class='title'>Add songs to playlist <i class="fas fa-folder-plus"></i></h2>
                                    
                                </div>
                            </div>
                        </a>
    </div>
</body>
<?php include 'music_player.php'; ?>
<?php include 'footer.php'; ?>