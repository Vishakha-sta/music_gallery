<?php include 'user_header.php'; ?>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro'>
<link rel="stylesheet" href="css/song_cards.css">

<link rel="stylesheet" href="css/user_dashboard.css">
    <title>Dashboard</title>
    
    <body>
       
    <div class="dashboard">    
        
    
    <div class="songs dash-display">
            <div class="heading">
                <h2><i class="fas fa-guitar"></i> Songs</h2>
            </div>
            <div class="song_card ">
                <link rel="stylesheet" href="css/songs.css">
                <div class="cards">
                    <?php 
                        
                    $sql = "SELECT * FROM songs ORDER BY RAND() LIMIT 3";
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
            </div>
        </div>


        <div class="album dash-display">
            <div class="heading">
                <h2><i class="fas fa-drum"></i> Albums</h2>
            </div>
            <div class="song_card">

                <div class="box_it">
                    
                    <?php 
                    $sql = "SELECT * FROM albums ORDER BY RAND() LIMIT 3";
                    $result = mysqli_query($con , $sql);
                    if($result -> num_rows  > 0 ){
                    while($row = $result->fetch_assoc()){
                     ?>
                        <a href="album_songs.php?albumid=1">    
                            <div class='music-card'>
                                <div class='image'>
                                    <img src='<?php echo $row['album_img']; ?>'>
                                </div>
                                <div class='wave'></div>
                                <div class='wave'></div>
                                <div class='wave'></div>
                                <div class='info'>
                                    <h2 class='title'><?php echo $row['albumname']; ?></h2>
                                    
                                </div>
                            </div>
                        </a> 
                    <?php } } ?>

                </div>

            </div>
        </div>
    
    
        <div class="artist dash-display">
            <div class="heading">
                <h2><i class="fas fa-compact-disc"></i> Artists</h2>
            </div>
            <div class="song_card">
            <div class="box_it">
                    <?php for($i =1 ; $i<=3 ; $i++){ ?>
                        <a href="artist_songs.php?artistId=1">    
                            <div class='music-card'>
                                <div class='image'>
                                    <img src='image/profile-2.jpg'>
                                </div>
                                <div class='wave'></div>
                                <div class='wave'></div>
                                <div class='wave'></div>
                                <div class='info'>
                                    <h2 class='title'>Blue Neighborhood</h2>
                                    <author class='artist'>Troye Sivan</author>
                                </div>
                            </div>
                        </a> 
                    <?php } ?>
                </div>
            </div>
        </div>
    
    
        <div class="playlist dash-display">
            <div class="heading">
                <h2><i class="fas fa-music"></i> Playlist</h2>
            </div>
            <div class="song_card">
                <?php
                    include 'song_cards.php';
                    ?>
            </div>     
        </div>


    </div>
</body>
</html>
<?php include 'footer.php'; ?>