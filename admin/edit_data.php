<?php include 'admin_header.php'; ?>
<style>
    .one{
        background-image: linear-gradient(45deg, rgba(11, 11, 172, 0.548), darkblue);
    }
    .two{
        background-image: linear-gradient(45deg, rgb(255 129 0 / 55%), #e64e05);
    }
    .three{
        background-image: linear-gradient(45deg, #3e920080, #3e9200);
    }
    .four{
        background-image: linear-gradient(45deg, #ffc10773, #ffc107);
    }
    .five{
        background-image: linear-gradient(45deg, #03a9f469, #03a9f4);
    }
    .six{
        background-image: linear-gradient(45deg, #e91e637d, #e91e63);
    }
    a{
        text-decoration:none;
        color: #f1f1f1ba;
    }
    a:hover{
        text-decoration:none;
        color:white;
    }
</style>
<div class="users-boxes-1">
    <div class="recent-box">
    
    <div class="edit_card one">
        <a href="view_albums.php"><h2>View Albums</h2></a>
    </div>
    
    <div class="edit_card two">
        <a href="view_artists.php"><h2>View Artists</h2></a>
    </div>
    
    <div class="edit_card three">
        <a href="view_songs.php"><h2>View Songs</h2></a>
    </div>
    
    <div class="edit_card four">
        <a href="add_albums.php"><h2>Add Albums</h2></a>
    </div>
    
    <div class="edit_card five">
        <a href="add_artists.php"><h2>Add Artists</h2></a>
    </div>
    
    <div class="edit_card six">
        <a href="add_songs.php"><h2>Add Songs</h2></a>
    </div>

    </div>
</div>
<?php include 'admin_footer.php'; ?>