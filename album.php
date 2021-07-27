<?php include 'user_header.php'; ?>

  <title>Album</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro'>
  <link rel="stylesheet" href="css/song_cards.css">
  <!-- <link rel="stylesheet" href="css/music_check.css"> -->


<body translate="no" >
    
    <div class="heading">
        <h2><i class="fas fa-drum"></i> Albums</h2>
    </div>
    <div class="box_it">
    <?php 
                    $sql = "SELECT * FROM albums ";
                    $result = mysqli_query($con , $sql);
                    if($result -> num_rows  > 0 ){
                    while($row = $result->fetch_assoc()){
                     ?>
                        <a href="album_songs.php?albumid=<?php echo $row['albumid']; ?>">    
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
</body>
<?php include 'footer.php'; ?>