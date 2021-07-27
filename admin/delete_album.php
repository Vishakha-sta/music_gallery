<style>
    body{

        font-family: fangsong;
        background-color:#212156;
        color:#c7c5e6;
        text-align:center;
    }
    h1{
        margin-top:20px;
    }
    span{
        text-align:center;
        
    }
    span a{
        color:yellow;
    }
</style>

<?php
    include '../includes/db.php';
    $id = $_GET['albumid'];
    $sql = " DELETE FROM `albums` WHERE albumid = $id";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "<h1>Album has been removed succesfully!!!</h1>";
    }
    
    ?>
    
       <center> <span><a href="view_albums.php">View Albums</a>
        </span></center>
        