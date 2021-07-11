<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="dashboard">    
        <div class="songs">
            <div class="heading">
                <h2>Songs</h2>
            </div>
            <div class="song_card">
                <?php
                    include 'song_cards.php';
                ?>
            </div>
        </div>
        <div class="album">
            <div class="heading">
                <h2>Albums</h2>
            </div>
            <div class="song_card">
                <?php
                    include 'song_cards.php';
                ?>
            </div>
        </div>
        <div class="artist">
            <div class="heading">
                <h2>Artists</h2>
            </div>
            <div class="song_card">
                <?php
                    include 'song_cards.php';
                ?>
            </div>
        </div>
        <div class="playlist">
            <div class="heading">
                <h2>Playlist</h2>
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