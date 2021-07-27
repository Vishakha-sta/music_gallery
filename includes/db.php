<?php
    $con = new mysqli("localhost" , "root","","music_gallery");
    if(!$con){
        echo "This is an error ".$con->connect_error;
    }
?>
<!-- <link rel="stylesheet" href="../css/content_box.css">
<link rel="stylesheet" href="../css/edit_profile.css">
<link rel="stylesheet" href="../css/footer.css">
<link rel="stylesheet" href="../css/music_player.css">
<link rel="stylesheet" href="../css/search.css">
<link rel="stylesheet" href="../css/song_cards.css">
<link rel="stylesheet" href="../css/songs.css">
<link rel="stylesheet" href="../css/user_header.css">
<link rel="stylesheet" href="../css/user_dashboard.css"> -->