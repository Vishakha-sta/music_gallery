<style>
    body {
        font-family: fangsong;
        background-color: #212156;
        color: #c7c5e6;
        /* text-align: center; */
    }
    
    .pass_update {
        margin-top: 20px;
        color: rgb(40, 9, 70);
    }
    
    .edit_page {
        text-align: center;
    }
    
    .edit_page a {
        color: yellow;
    }
    .fa, .fab, .fad, .fal, .far, .fas {
        line-height: 2.5 !important;
    }
</style>

<?php include 'user_header.php'; ?>
<?php

$id = $_GET['userid'];

$sql1 = "SELECT * FROM users WHERE userid = '".$id."' ";
$result = mysqli_query($con , $sql1);
if($result){
    // echo "this is working";
    $row= mysqli_fetch_array($result);
}
else {
    echo "this is not working";
}

// if(isset($_POST['save'])){
//     $oldPassword = $_POST['oldPassword'];
//     $newPassword1 = $_POST['newPassword1'];
//     $c_Password = $_POST['c_Password'];

//     $realpass = $row['password'];
//     if($oldPassword == $realpass){
    //         if($newPassword1 == $c_Password){
        //             if($newPassword1 != $realpass){
//                 $succ1 = mysqli_query($con,"UPDATE users set password='" . $_POST['newPassword1'] . "' WHERE userid='" . $id . "'");
//             }
//             else{
    //                 echo "New password is same old password!! <br>please enter a valid password.....!";
    //             }
    //         }
    //         else{
        //             echo "Incorrect Confirm password";
        //         }
        //     }
        //     else{
            //         echo "Incorrect Password!";
            //     }
            //     if($succ1){
                //         echo '<script>alert("Password has been Updated succesfully!!!")</script>' ; 
                
                //     }
                
                //     }
                
                $realpass = $row['password'];
                if(count($_POST)>0) {
                    
                    $file = $_FILES['photo'];
                    
                    $oldPassword = $_POST['oldPassword'];
                    $newPassword1 = $_POST['newPassword1'];
                    $c_Password = $_POST['newPassword2'];
                    if(($oldPassword != "") || ($Password !="") || ($c_Password != "")){
                        if($oldPassword == $realpass){
                                    if($newPassword1 == $c_Password){
                                            if($newPassword1 != $realpass){
                                                    $succ1 = mysqli_query($con,"UPDATE users set password='" . $_POST['newPassword1'] . "' WHERE userid='" . $id . "'");
                                                }
                                                else{
                                                        echo "New password is same old password!! <br>please enter a valid password.....!";
                                                    }
                                            }
                                            else{
                                                echo "Incorrect Confirm password";
                                            }
                        }
                        else{
                            echo "Incorrect Password!";
                        }
                    }
                    else{
                        echo '<script>alert("To update fields Fill all the fields")</script>';
                    }


    if($file['size']!=0){
        // print_r($file);
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0){
            $destfile = 'image/profile_photo/'.$filename;
            if(move_uploaded_file($filepath,$destfile)){
                // echo "Profile Photo has been updated";
                // echo $destfile;
            }
            else{
                echo "file has not been updated";
            }
        }

        $succ = mysqli_query($con,"UPDATE users set username='" . $_POST['username'] . "', fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "', email='" . $_POST['email'] . "' , photo='" . $destfile . "' WHERE userid='" . $id . "'");
    }
    else{
        $succ = mysqli_query($con,"UPDATE users set username='" . $_POST['username'] . "', fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "', email='" . $_POST['email'] . "'  WHERE userid='" . $id . "'");

    }

    if($succ){
        echo '<script>alert("Data has been Updated succesfully!!!")</script>' ; 
        // echo "<script>alert(<h1 style='text-align:center; color:white;'>Data has been Updated succesfully!!!</h1></script>";
        // echo "<script>alert(<h1 style='text-align:center; color:white;'>Data has been Updated succesfully!!!</h1></script>";
        // echo '<span class="edit_page"><a href="edit_profile.php">Go Back</a></span>';
    }
    // $message = "Record Modified Successfully";
    }
    
?>

<link rel="stylesheet" href="css/edit_profile.css">

<body class="this">
    <div class="form">

        <center>


            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-field">
                    <label for="username">Username :</label>
                    <input type="text" name="username" value="<?php echo $row['username']; ?>" placeholder="Enter Username">
                </div>
                <div class="form-field">
                    <label for="fname">First name :</label>
                    <input type="text" name="fname" value="<?php echo $row['fname']; ?>" placeholder="Enter your first name">
                </div>
                <div class="form-field">
                    <label for="lname">Last name :</label>
                    <input type="text" name="lname" value="<?php echo $row['lname']; ?>" placeholder="Enter your last name">
                </div>
                <div class="form-field">
                    <label for="email">Email :</label>
                    <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Enter your Email">
                </div>
                <div class="form-field">
                    <label for="profile_photo">Profile Photo :</label>
                    <input type="file" name="photo" value="<?php echo $row['photo']; ?>" placeholder="Enter your profile">
                </div>


                <!-- <div class="form-field">
                    <input class="btn" type="submit" name="update" value="update">
                </div> -->
            <!-- </form>
        </center>
    </div> -->
    <hr style="background-color:rgb(33, 2, 61)">
    
    <!-- <div class="form">
        <center> -->
            <h2 class="pass_update">UPDATE PASSWORD</h2>
            <!-- <form action="#" method="post" > -->
                <div class="form-field">
                    <input type="password" class="oldPassword" name="oldPassword" placeholder="Current password">

                </div>
                <div class="form-field">
                    <input type="password" class="newPassword1" name="newPassword1" placeholder="New password">
                </div>
                <div class="form-field">
                    <input type="password" class="newPassword2" name="newPassword2" placeholder="Confirm password">
                </div>
                <div class="form-field">
                    <input class="btn" type="submit" name="update" value="update">
                </div>
                <!-- <span class="message"></span>
                <div class="form-field">
                    <input type="submit" name="name" value="Save" class=" btn " onclick="updatePassword( 'oldPassword', 'newPassword1', 'newPassword2') "></input>
                </div> -->
            </form>
        </center>
    </div>
</body>



<?php include 'footer.php'; ?>
<script>
    function updatePassword(oldPasswordClass, newPasswordClass1, newPasswordClass2) {
        var oldPassword = $("." + oldPasswordClass).val();
        var newPassword1 = $("." + newPasswordClass1).val();
        var newPassword2 = $("." + newPasswordClass2).val();

        $.post("updatePassword.php", {
                oldPassword: oldPassword,
                newPassword1: newPassword1,
                newPassword2: newPassword2,
                // username: userLoggedIn
                username: <?php echo $row['username'];?>
            })
            .done(function(response) {
                $("." + oldPasswordClass).nextAll(".message").text(response);
            });
    }
</script>