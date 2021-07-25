<?php
    $con = new mysqli("localhost" , "root","","music_gallery");
    if(!$con){
        echo "This is an error ".$con->connect_error;
    }
?>