<?php include 'user_header.php'; ?>

  <title>Artists</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro'>
  <link rel="stylesheet" href="css/song_cards.css">
  <!-- <link rel="stylesheet" href="css/music_check.css"> -->


<body translate="no" >

    <div class="heading">
        <h2><i class="fas fa-compact-disc"></i> Artists</h2>
    </div>
    
    <div class="box_it">
    <?php 
                    $sql = "SELECT * FROM artists ";
                    $result = mysqli_query($con , $sql);
                    if($result -> num_rows  > 0 ){
                    while($row = $result->fetch_assoc()){
                     ?>
                        <a href="artist_songs.php?artistid=<?php echo $row['artistid']; ?>">    
                            <div class='music-card'>
                                <div class='image'>
                                    <img src='<?php echo $row['artist_img']; ?>'>
                                </div>
                                <div class='wave'></div>
                                <div class='wave'></div>
                                <div class='wave'></div>
                                <div class='info'>
                                    <h2 class='title'><?php echo $row['artistname']; ?></h2>
                                    
                                </div>
                            </div>
                        </a> 
                    <?php } } ?>
         
    </div>
</body>
<?php include 'footer.php'; ?>