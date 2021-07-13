<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user_dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="dashboard">    
        <div class="songs dash-display">
            <div class="heading">
                <h2><i class="fas fa-guitar"></i> Songs</h2>
            </div>
            <div class="song_card ">
                <?php
                    include 'song_cards.php';
                ?>
            </div>
        </div>
        <div class="album dash-display">
            <div class="heading">
                <h2><i class="fas fa-drum"></i> Albums</h2>
            </div>
            <div class="song_card">
                <?php
                    include 'song_cards.php';
                ?>
            </div>
        </div>
        <div class="artist dash-display">
            <div class="heading">
                <h2><i class="fas fa-compact-disc"></i> Artists</h2>
            </div>
            <div class="song_card">
                <?php
                    include 'song_cards.php';
                ?>
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