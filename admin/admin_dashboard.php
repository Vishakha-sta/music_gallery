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
            $sql = "SELECT * FROM songs ORDER BY RAND() LIMIT 5";
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
       <br><hr><br>
       
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
            $sql = "SELECT * FROM users ORDER BY RAND() LIMIT 5";
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
       <br><hr><br>
       
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
            $sql = "SELECT * FROM artists ORDER BY RAND() LIMIT 5";
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
       <br><hr><br>
       
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
            $sql = "SELECT * FROM albums ORDER BY RAND() LIMIT 5";
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