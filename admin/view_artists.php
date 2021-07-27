<?php include 'admin_header.php'; ?>
<div class="users-boxes">
<div class="recent-box">
            <center><div class="title"><strong>Artists</strong></div></center>
            <center>
                <table>
                    <tr>
                        <th>S.No.</th>
                        <th>Artist Name</th>
                        <th>Artist Id</th>
                        <th>Cover image</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
        <?php                 
            $sql = "SELECT * FROM artists ";
            $result = mysqli_query($con , $sql);
            $count =1;
            if($result -> num_rows  > 0 ){
                while($row = $result->fetch_assoc()){            
        ?>
        <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['artistname']; ?></td>
                        <td><?php echo $row['artistid']; ?></td>
                        
                        <td><img src="../<?php echo $row['artist_img']; ?>" alt='Profile Image'></td>
                        <?php echo "
                        <td><a href='update_artist.php?artistid=".$row['artistid']."'>Update</a></td>
                        <td><a href='delete_artist.php?artistid=".$row['artistid']."'>Delete</a></td>
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