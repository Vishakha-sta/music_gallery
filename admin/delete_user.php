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
    $id = $_GET['userid'];
    $sql = " DELETE FROM `users` WHERE userid = $id";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "<h1>User has been removed succesfully!!!</h1>";
    }
    
    ?>
    
       <center> <span><a href="view_users.php">View Users</a>
        </span></center>
        