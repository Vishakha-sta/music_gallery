
<?php	include 'user_header.php'; ?>
<link rel="stylesheet" href="css/songs.css">
        <link rel="stylesheet" href="css/search.css">
        <link rel="stylesheet" href="css/song_cards.css">

        <form method="get" action="#">
            <div class="search_bar">
                <div class="col-3">
                    <input type="search" name="search" placeholder="Search">
                </div>
                <div class="col-1">
                    <button class="btn" type="submit">Search</button>
                </div>
            </div>
        </form>

<div class="search_result" id="maincontainer">
            <h1 class="text-center my-3">
                Search results for <em>
                     "<?php echo $_GET['search'] ?>"
                    </em>
            </h1>

            <div class="heading">
                <h2><i class="fas fa-guitar"></i> Songs</h2>
            </div>
            <div class="cards">
<?php
    $noresults = true;
    $query = $_GET["search"];
    if($query != "" ){
    // $sql = "SELECT * FROM `songs` where match (songname , artistname) against ('$query')";
    $sql = "SELECT * FROM `songs` WHERE `songname` LIKE '%$query%'";
    $result = mysqli_query($con, $sql);
    if($result -> num_rows  > 0 ){
    while($row = mysqli_fetch_assoc($result)){
        $song_name = $row['songname'];
        $artist_name = $row['artistname'];
        $song_img = $row['songimg'];
    
        // $url = "thread.php?threadid=".$thread_id;
        $noresults = false;
      
            //display the search result
            echo '
            <div class="music_card">
                <div class="imgBx">
                    <img src="'. $row['songimg'].'" style="width: 250px" alt="">
                </div>
                <audio controls>
                    <source src="'. $row['songpath'].'" type="audio/mp3">
                </audio>
            </div> '; 
        } 
    }
}
    
        else{ 
            echo '
            <div class="p-3 mb-2 bg-secondary bg-gradient text-light">
                <div class="container">
                    <h5 class="display-4">No Results Found</h5>
                    
                    <br>
                    <p class="lead">Suggestions:
                        <ul>
                            <li>Make sure that all words are spelled correctly.</li>
                            <li>Try different keywords.</li>
                            <li>Try more general keywords.</li>
                            <li>Try fewer keywords.</li>
                        </ul>
                    </p>
                </div>
            </div>';
            }
            echo '</div>';

?>
<br>
<br>
<hr>
<div class="heading">
                <h2><i class="fas fa-drum"></i> Albums</h2>
            </div>
            <div class="box_it">
                <?php
     $noresults = true;
    $query = $_GET["search"];
    if($query != "" ){
    // $sql = "SELECT * FROM `albums` where match (albumname ) against ('$query')";
    $sql = "SELECT * FROM `albums` WHERE `albumname` LIKE '%$query%'";
    
    $result = mysqli_query($con, $sql);
    if($result -> num_rows  > 0 ){
    while($row = mysqli_fetch_assoc($result)){
        $album_name = $row['albumname'];
        $album_img = $row['album_img'];
    
        // $url = "thread.php?threadid=".$thread_id;
        $noresults = false;
        //display the search result 
             echo '
             <a href="album_songs.php?albumid="'. $row['albumid'] .'">    
                            <div class="music-card">
                                <div class="image">
                                    <img src="'. $row['album_img'].'">
                                </div>
                                <div class="wave"></div>
                                <div class="wave"></div>
                                <div class="wave"></div>
                                <div class="info">
                                    <h2 class="title">'. $row['albumname'].'</h2>
                                    
                                </div>
                            </div>
                        </a> ';
        }
    }
}
        else{
            echo '<div class="p-3 mb-2 bg-secondary bg-gradient text-light">
              <div class="container">
                <h5 class="display-4" >No Results Found</h5>
                
                <br>
                <p class="lead">Suggestions:<ul>

                    <li>Make sure that all words are spelled correctly.</li>
                    <li>Try different keywords.</li>
                    <li>Try more general keywords.</li>
                    <li>Try fewer keywords.</li></ul>
                </p>
              </div>
            </div>'; 
            
    }
    echo '</div>';  
     ?>
    <br>
    <br>
    <hr>
     <div class="heading">
                <h2><i class="fas fa-compact-disc"></i> Artists</h2>
            </div>
            <div class="box_it">
                <?php
     $noresults = true;
    $query = $_GET["search"];
    if($query != "" ){
    // $sql = "SELECT * FROM `artists` where match (artistname ) against ('$query')";
    $sql = "SELECT * FROM `artists` WHERE `artistname` LIKE '%$query%'";
    $result = mysqli_query($con, $sql);
    if($result -> num_rows  > 0 ){
    while($row = mysqli_fetch_assoc($result)){
    
        // $url = "thread.php?threadid=".$thread_id;
        $noresults = false;
        //display the search result 
             echo '
             <a href="album_songs.php?albumid="'. $row['artistid'] .'"">    
                            <div class="music-card">
                                <div class="image">
                                    <img src="'. $row['artist_img'].'">
                                </div>
                                <div class="wave"></div>
                                <div class="wave"></div>
                                <div class="wave"></div>
                                <div class="info">
                                    <h2 class="title">'. $row['artistname'].'</h2>
                                    
                                </div>
                            </div>
                        </a> ';
        }
    }
}
        else{
            echo '<div class="p-3 mb-2 bg-secondary bg-gradient text-light">
              <div class="container">
                <h5 class="display-4" >No Results Found</h5>
                
                <br>
                <p class="lead">Suggestions:<ul>

                    <li>Make sure that all words are spelled correctly.</li>
                    <li>Try different keywords.</li>
                    <li>Try more general keywords.</li>
                    <li>Try fewer keywords.</li></ul>
                </p>
              </div>
            </div>'; 
             
    }
    echo '</div>';
     ?>


        </div>
        
        
        <?php	include 'footer.php'; ?>
