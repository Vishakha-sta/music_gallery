<!-- <?php
include 'includes/db.php';

$query = 'SELECT * FROM songs';

$result = mysqli_query( $con, $query );
$stack = array();

if($result -> num_rows  > 0 ){
    while($row = $result->fetch_assoc()){
        array_push( $stack, $row );

    }
}

$track_list = json_encode($stack);
// print_r($track_list);
?> -->

<title>
    Simple Music Player</title>
<!-- Load FontAwesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<!-- Load the custom CSS style file -->
<link rel="stylesheet" type="text/css" href="css/music_player.css">

<div class="music-player">
    <div class="player">
        <div class="col-4">
            <div class="details">
                <div class="now-playing">PLAYING x OF y</div>
                <div class="track-art"></div>
            </div>
        </div>
        <div class="col-8">
            <div class="names">
                <div class="track-name">Track Name</div>
                <div class="track-artist">Track Artist</div>
            </div>
            <div class="buttons">
                <div class="prev-track" onclick="prevTrack()"><i class="fa fa-step-backward fa-2x"></i></div>
                <div class="playpause-track" onclick="playpauseTrack()"><i class="fa fa-play-circle fa-5x"></i></div>
                <div class="next-track" onclick="nextTrack()"><i class="fa fa-step-forward fa-2x"></i></div>
            </div>
            <div class="sliders">
                <div class="slider_container">
                    <div class="current-time">00:00</div>
                    <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
                    <div class="total-duration">00:00</div>
                </div>
                <div class="slider_container">
                    <i class="fa fa-volume-down"></i>
                    <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
                    <i class="fa fa-volume-up"></i>
                </div>
            </div>
        </div>
    </div>
    

    <!-- <script>
        // let track_list = <?php echo $track_list?>;
        // console.log(track_list); 


    
        let track_list = [ 
            <?php
                include 'includes/db.php';

                $query = 'SELECT * FROM songs';

                $result = mysqli_query( $con, $query );
                // $stack = array();

                if($result -> num_rows  > 0 ){
                    while($row = $result->fetch_assoc()){
                        // array_push( $stack, $row );

                
                // $track_list = json_encode($stack);
                // print_r($track_list);
                ?>
            {
                name: <?php echo $row['songname']?>,
                artist: <?php echo $row['artistname']?>,
                image: <?php echo $row['songimg']?>,
                path: <?php echo $row['songpath']?>
            },

            <?php 
                }
                }

                ?>
        ];

    </script> -->
    <!-- Load the main script for the player -->
    <script src="js/music_player.js"></script>
</div>