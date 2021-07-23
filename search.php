<!-- <?php	include 'db.php'; ?> -->
    <?php	include 'user_header.php'; ?>
        <link rel="stylesheet" href="css/search.css">

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
                     <!-- "<?php echo $_GET['search'] ?>" -->
                    </em>
            </h1>

<!--             
            <?php
            $noresults = true;
    $query = $_GET["search"];
    $sql = "SELECT * FROM `songs` where match (song_name , artist_name) against ('$query')";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $song_name = $row['song_name'];
        $artist_name = $row['artist_name'];
        $song_img = $row['song_img'];
    
        $url = "thread.php?threadid=".$thread_id;
        $noresults = false;
      
            //display the search result 
            echo '
            <div class="heading">
                <h2><i class="fas fa-guitar"></i> Songs</h2>
            </div>
             <div class="result">
        <h3><a href="'. $url .'" class="text-dark">'. $title .'</a>
        </h3>
        <p>'. $desc .' </p>
    </div>'; } if($noresults){ echo '
    <div class="p-3 mb-2 bg-secondary bg-gradient text-light">
        <div class="container">
            <h5 class="display-4">No Results Found</h5>
            <hr>
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
?>
-->
<!-- 
                <?php
     $noresults = true;
    $query = $_GET["search"];
    $sql = "SELECT * FROM `albums` where match (album_name ) against ('$query')";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $album_name = $row['album_name'];
        $album_img = $row['album_img'];
    
        $url = "thread.php?threadid=".$thread_id;
        $noresults = false;
        //display the search result 
             echo '
             <div class="heading">
                <h2><i class="fas fa-guitar"></i> Albums</h2>
            </div>
            <div class="result">
                <h3><a href="'. $url .'" class="text-dark">'. $title .'</a>
                </h3>
                <p>'. $desc .' </p>
            </div>';
        }
        if($noresults){
            echo '<div class="p-3 mb-2 bg-secondary bg-gradient text-light">
              <div class="container">
                <h5 class="display-4" >No Results Found</h5>
                <hr>
                <br>
                <p class="lead">Suggestions:<ul>

                    <li>Make sure that all words are spelled correctly.</li>
                    <li>Try different keywords.</li>
                    <li>Try more general keywords.</li>
                    <li>Try fewer keywords.</li></ul>
                </p>
              </div>
            </div>'; 
    } ?>
 -->

        </div>

        <?php	include 'footer.php'; ?>