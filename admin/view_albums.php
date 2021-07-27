<?php include 'admin_header.php'; ?>
<div class="users-boxes">
<div class="recent-box">
            <center><div class="title"><strong>Albumss</strong></div></center>
            <center>
                <table>
                    <tr>
                        <th>S.No.</th>
                        <th>Album Name</th>
                        <th>Album Id</th>
                        <th>Cover image</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
        <?php                 
            $sql = "SELECT * FROM albums ";
            $result = mysqli_query($con , $sql);
            $count =1;
            if($result -> num_rows  > 0 ){
                while($row = $result->fetch_assoc()){            
        ?>
        <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['albumname']; ?></td>
                        <td><?php echo $row['albumid']; ?></td>
                        
                        <td><img src="../<?php echo $row['album_img']; ?>" alt='Cover Image'></td>
                        <?php echo "
                        <td><a href='update_album.php?albumid=".$row['albumid']."'>Update</a></td>
                        <td><a href='delete_album.php?albumid=".$row['albumid']."'>Delete</a></td>
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