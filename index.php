<?php include 'header_index.php'; ?>

  <!-- ***** Header Area End ***** -->

  <!-- ***** Welcome Area Start ***** -->
  <section class="welcome-area">
    <!-- Welcome Slides -->
    <div class="welcome-slides owl-carousel">


    <?php  
            $sql = "SELECT * FROM songs ORDER BY RAND() LIMIT 3 ";
            $result = mysqli_query($con , $sql);
            if($result -> num_rows  > 0 ){
                while($row = $result->fetch_assoc()){                
                    ?>
      <!-- Single Welcome Slide -->
      <div class="welcome-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/3.jpg);">
        <div class="container h-100">
          <div class="row h-100 align-items-center">
            <div class="col-12">
              <!-- Welcome Text -->
              <div class="welcome-text">
                <h2 data-animation="fadeInUp" data-delay="100ms">Discover Today</h2>
                <h5 data-animation="fadeInUp" data-delay="300ms">Please schedule a podcast post, to make it visible here.</h5>
                <div class="welcome-btn-group">
                  <a href="#" class="btn poca-btn m-2 ml-0 active" data-animation="fadeInUp" data-delay="500ms">Subscribe with iTunes</a>
                  <a href="#" class="btn poca-btn btn-2 m-2" data-animation="fadeInUp" data-delay="700ms">Subscribe with RSS</a>
                </div>
              </div>
              <!-- Welcome Music Area -->
              <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                <div class="poca-music-thumbnail">
                  <img src="<?php echo $row['songimg']; ?>" alt="">
                </div>
                <div class="poca-music-content">
                  <span class="music-published-date">Song From Heart</span>
                  <h2><?php echo $row['songname']; ?></h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author"><?php echo $row['artistname']; ?></a> 
                        <!-- | <a href="#" class="music-catagory">Tutorials</a> 
                        | <a href="#" class="music-duration">00:02:56</a> -->
                      </p>
                  </div>
                  <!-- Music Player -->
                  <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="<?php echo $row['songpath']; ?>">
                    </audio>
                  </div>
                  <!-- Likes, Share & Download -->
                  <div class="likes-share-download d-flex align-items-center justify-content-between">
                    <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                    <div>
                      <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                      <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }
            } ?>
                
    </div>
  </section>
  <!-- ***** Welcome Area End ***** -->

  <!-- ***** Latest Episodes Area Start ***** -->
  <section class="poca-latest-epiosodes section-padding-80">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Latest Songs</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Projects Menu -->
    <div class="container">
      <div class="poca-projects-menu mb-30 wow fadeInUp" data-wow-delay="0.3s">
        <div class="text-center portfolio-menu">
          <button class="btn active" data-filter="*">All</button>
          <button class="btn" data-filter=".media">Albums</button>
          <button class="btn" data-filter=".tech">Songs</button>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row poca-portfolio">

      

      <?php  
            $sql = "SELECT * FROM songs ORDER BY RAND() LIMIT 3 ";
            $result = mysqli_query($con , $sql);
            if($result -> num_rows  > 0 ){
                while($row = $result->fetch_assoc()){                
                    ?>
        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item tech wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap ">
            <div class="poca-music-thumbnail">
              <img src="<?php echo $row['songimg']; ?>" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2">Song From Heart</span>
              <h2><?php echo $row['songname']; ?></h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author"><?php echo $row['artistname']; ?></a> 
                    <!-- | <a href="#" class="music-catagory">Tutorials</a> 
                    | <a href="#" class="music-duration">00:02:56</a> -->
                  </p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="<?php echo $row['songpath']; ?>">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php }
            } ?>


      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <a href="#" class="btn poca-btn mt-70">Load More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Latest Episodes Area End ***** -->

  <!-- ***** Featured Guests Area Start ***** -->
  <section class="featured-guests-area">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Featured Artists</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row justify-content-around">
        <!-- Single Featured Guest -->
        <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="img/artist-img/arijit.jpg" alt="">
            <div class="guest-info">
              <h5>Arijit Singh</h5>
              <span>SINGER</span>
            </div>
          </div>
        </div> -->

        <!-- Single Featured Guest -->
        <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="img/artist-img/justin.jpg" alt="">
            <div class="guest-info">
              <h5>Justin Bieber</h5>
              <span>SINGER</span>
            </div>
          </div>
        </div> -->

        <!-- Single Featured Guest -->
        <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="img/artist-img/onedirection.jpg" alt="">
            <div class="guest-info">
              <h5>One Direction</h5>
              <span>BAND</span>
            </div>
          </div>
        </div> -->

         <!-- Single Featured Guest -->

         <?php 
                    $sql = "SELECT * FROM artists ORDER BY RAND() LIMIT 4";
                    $result = mysqli_query($con , $sql);
                    if($result -> num_rows  > 0 ){
                    while($row = $result->fetch_assoc()){
                     ?>
         <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="<?php echo $row['artist_img']; ?>" alt="">
            <div class="guest-info">
              <h5><?php echo $row['artistname']; ?></h5>
              <span>SINGER</span>
            </div>
          </div>
        </div>
        <?php } } ?>

      </div>
    </div>
  </section>
  <!-- ***** Featured Guests Area End ***** -->
<?php include 'footer_index.php';  ?>