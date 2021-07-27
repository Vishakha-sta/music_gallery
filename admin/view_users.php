<?php include 'admin_header.php'; ?>
<div class="users-boxes">
<div class="recent-box">
            <center><div class="title"><strong>Users</strong></div></center>
            <center>
                <table>
                    <tr>
                        <th>S.No.</th>
                        <th>User Name</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Cover image</th>
                        <th>Delete</th>
                    </tr>
        <?php                 
            $sql = "SELECT * FROM users ";
            $result = mysqli_query($con , $sql);
            $count =1;
            if($result -> num_rows  > 0 ){
                while($row = $result->fetch_assoc()){            
        ?>
        <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        
                        <td><img src="../<?php echo $row['photo']; ?>" alt='Profile Image'></td>
                        <?php echo "
                        <td><a href='delete_user.php?userid=".$row['userid']."'>Delete</a></td>
                    </tr>";
            $count+=1;
        }
        echo "  </table>
            </center>";
    }
    else echo "<h1>No records has been inserted yet!!</h1>";
?>

        </div>
        </div>

<?php include 'admin_footer.php'; ?>