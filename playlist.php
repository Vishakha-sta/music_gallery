<style>
    .playlist_buttons{
        border:none;
        border-radius:5px;

        background-image:linear-gradient(rgb(221 65 127 / 59%), #DD417F);
        padding:2px;
        width:100px;
        text-decoration:none;
        color:white;

    }
    .playlist_buttons:hover{
        

        background-image: linear-gradient(rgb(255 26 117 / 85%), #cc0655);
    }
    @media screen and (max-width: 850px) {
        .playlist_buttons{
        border:none;
        border-radius:5px;

        background-image:linear-gradient(rgb(221 65 127 / 59%), #DD417F);
        padding:2px;
        width:80px;
        text-decoration:none;
        color:white;

    }
    .playlist_buttons:hover{
        

        background-image: linear-gradient(rgb(255 26 117 / 85%), #cc0655);
    }   
    }
</style>
<?php include 'user_header.php'; ?>

  <title>Playlist</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro'>
  <link rel="stylesheet" href="css/song_cards.css">
  <!-- <link rel="stylesheet" href="css/music_check.css"> -->


<body translate="no" >
    
<div class="heading">
                <h2><i class="fas fa-music"></i> Playlist</h2>
            </div>
    <div class="box_it">
    <?php 
                              $sql = "SELECT * FROM playlist WHERE userid = ".$_SESSION['userid'];
                              $result = mysqli_query($con , $sql);
                              if($result -> num_rows  > 0 ){
                              while($row = $result->fetch_assoc()){
                               ?>
                                  <a href="playlist_songs.php?playlistid=<?php echo $row['playlistid']; ?>">    
                                      <div class='music-card'>
                                          <div class='image'>
                                              <img src='<?php echo $row['playlist_img']; ?>'>
                                          </div>
                                          <div class='wave'></div>
                                          <div class='wave'></div>
                                          <div class='wave'></div>
                                          <div class='info'>
                                              <h2 class='title'><?php echo $row['playlistname']; ?></h2>
                                              <?php
                                              echo "<author class='artist'>
                                              <a href='update_playlist.php?playlistid=".$row['playlistid']."'><button class='playlist_buttons'>Update</button> </a>
                                              <a href='delete_playlist.php?playlistid=".$row['playlistid']."'><button class='playlist_buttons'>Delete</button> </a>
                                              </author>";
                                              
                                              ?>
                                          </div>
                                      </div>
                                  </a> 
                              <?php } } ?>
                              <a href="create_playlist.php">    
                            <div class='music-card'>
                                <div class='image'>
                                    <img src='image/playlist.jpg'>
                                </div>
                                <div class='wave'></div>
                                <div class='wave'></div>
                                <div class='wave'></div>
                                <div class='info' >
                                    <h2 class='title'>Create New Playlist <i class="fas fa-folder-plus"></i></h2>
                                    
                                </div>
                            </div>
                        </a>
    </div>
</body>
<?php include 'footer.php'; ?>