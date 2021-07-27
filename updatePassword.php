<style>
    body {
        font-family: fangsong;
        background-color: #212156;
        color: #c7c5e6;
        /* text-align: center; */
    }
    
    
     a {
        color: yellow;
    }
    
</style>
<?php
include 'includes/db.php';
session_start();
$id = $_SESSION["userid"];/* userid of the user */
// $id = 1;
/* userid of the user */
if(count($_POST)>0) {
	$result = mysqli_query($con,"SELECT * from users WHERE userid='" . $id . "'");
	$row=mysqli_fetch_array($result);
	if($_POST['oldPassword'] == $row['password']){
		if($_POST["newPassword1"] == $_POST["newPassword2"]  && $_POST['newPassword1'] != "") {
			mysqli_query($con,"UPDATE users set password='" . $_POST["newPassword1"] . "' WHERE userid='" . $id . "'");
			echo '<script>alert("Password Changed Sucessfully!!")</script>' ; 
			$message = "Password Changed Sucessfully";
		} 
	}
	else{
		echo '<script>alert("Password is not correct!!")</script>' ; 
		$message = "Password is not correct";
	}
	// header("location: edit_profile.php?message = $message"); 
}
?>
<div>
<a href="edit_profile.php">Go Back</a></div>