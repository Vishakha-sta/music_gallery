<?php include 'admin_header.php'; ?>
<div class="users-boxes">
<div class="recent-box">
            <center><div class="title"><strong>Songs</strong></div></center>
            <center>
                <table>
                    <tr>
                        <th>S.No.</th>
                        <th>Song Name</th>
                        <th>Artist Name</th>
                        <th>Album id</th>
                        <th>Artist id</th>
                        <th>Cover image</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
        <?php                 
            $sql = "SELECT * FROM songs ";
            $result = mysqli_query($con , $sql);
            $count =1;
            if($result -> num_rows  > 0 ){
                while($row = $result->fetch_assoc()){            
        ?>
        <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $row['songname']; ?></td>
                        <td><?php echo $row['artistname']; ?></td>
                        <td><?php echo $row['albumid']; ?></td>
                        <td><?php echo $row['artistid']; ?></td>
                        
                        <td><img src="../<?php echo $row['songimg']; ?>" alt='Cover image'></td>
                        <?php echo "
                        <td><a href='update_song.php?songid=".$row['songid']."'>Update</a></td>
                        <td><a href='delete_song.php?songid=".$row['songid']."'>Delete</a></td>
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