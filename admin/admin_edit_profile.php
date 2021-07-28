<?php include 'admin_header.php'; ?>

<?php

$id = $_SESSION["adminid"];
$adminname = $_SESSION['adminname'];
// $id = 1;

$sql1 = "SELECT * FROM `admin` WHERE `adminname` = '".$adminname."' ";
$result = mysqli_query($con , $sql1);
if($result){
    // echo "this is working";
    $row= mysqli_fetch_array($result);
    // echo "this row element is working";
}
else {
    echo "this is not working";
}

if(count($_POST)>0) {
                    
        $succ = mysqli_query($con,"UPDATE `admin` set `adminname` ='" . $_POST['username'] . "', fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "', email='" . $_POST['email'] . "'  WHERE adminname='" . $adminname . "'");

    if($succ){
        echo '<script>alert("Data has been Updated succesfully!!!")</script>' ; 
        
    }
    else{
        echo '<script>alert("This is not Working I because this is devil")</script>' ; 
        
    }
    }
?>



    <div class="users-boxes">
    <div class="recent-box">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="title">Update Profile</div><br>
            <div class="inputbox">
                <input type="text" name="username" value="<?php echo $row['adminname']; ?>">
                <span>Username</span>
            </div><br><br>
            <div class="inputbox">
                <input type="text" name="fname" value="<?php echo $row['fname']; ?>" >
                <span>First Name</span>
            </div><br><br>
            <div class="inputbox">
                <input type="text" name="lname" value="<?php echo $row['lname']; ?>" >
                <span>Last Name</span>
            </div><br><br>
            <div class="inputbox">
                <input type="email" name="email" value="<?php echo $row['email']; ?>" >
                <span>E-mail</span>
            </div><br><br>
            <div class="inputbox" align="left">
                <input type="submit" name="submit" value="Update">
            </div><br>
        </form>
        
        <form action="admin_updatePassword.php" method="post" >
            <div class="title">Update Password</div> <br>         
            <div class="inputbox">
              <input type="password" name="oldPassword" required="required">
              <span>Current Password</span>
            </div><br>
            <div class="inputbox">
              <input type="password" name="newPassword1" required="required">
              <span>New Password</span>
            </div><br>
            <div class="inputbox">
              <input type="password" name="newPassword2" required="required">
              <span>Confirm Password</span>
            </div><br>
            <div class="inputbox" align="left">
                <input type="submit" name="submit" value="Update Password">
            </div>
        </form>
    </div>
</div>

<?php include 'admin_footer.php'; ?>