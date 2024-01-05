<?php require APPROOT . '/views/inc/Clientheader.php'; ?>
<?php require APPROOT . '/views/inc/ClientSideBar.php'; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>

<body>
  <div class="main">
    <div class="topbar">

      <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
      </div>

      <div class="search">
        <label>
          <input type="text" placeholder="Search here" />
          <ion-icon name="search-outline" class="loop"></ion-icon>
        </label>
      </div>

      <ion-icon name="filter" class="fliter"></ion-icon>
      <div class="btns">
        <button class="sign-up">Sign Up</button>
        <button class="log-in">Log In</button>
      </div>
    </div>

    <!-- ======================= Cards ================== -->
    <div class="cardBox">
      <div class="card c1">
        <div class="title">
          <h1>Discover, Create, Share:</h1>
          <p>Lyrically, Where Music Meets Your Words!</p>
          <button>Explore </button>
        </div>
      </div>

      <div class="card c2">
        <div>
          <h2>About The Song </h2>
          <h3>Album:</h3>
          <p>God On The Weekend (Chapter & Verse Remix)</p>
          <h3>Artist:</h3>
          <p>Ian Asher</p>
          <h3>Verified Lyrics:</h3>
          <p>Someone</p>
        </div>
      </div>

    </div>

    <!-- ================ Order Details List ================= -->
    <div class="details">
      <div class="recentOrders">
        <h2>Lyrics</h2>
        <div class="lyrics">
          <pre>
      When was the last time, did somethin' for the first time?
      Cause I need a good night to last for a lifetime

      Couldn't help it, felt like velvet
      Psychedelic, s-- angelic
      That's how I li-li-like it
      When we colli-li-lided
      We keep it open-minded, excited

      Fallin' into you
      Always somewhere in-between
      Don't wanna step off this dream
      Fallin' into you
      Feelin' like I've seen these signs
      Like somewhere in a past life
          </pre>
              <!--=========================Modal====================-->

    <div class="button-add-student float-end me-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Report</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Report</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?= URLROOT ?>/ClientController/AddReclamation"
                            enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="typeReclamation" class="col-form-label">Why are you reporting those Lyrics?</label>
                                <input type="text" class="form-control" name="typeReclamation" required>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Submit Your Report</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        
        <div class="other">
          <div class="reaction">
            <ion-icon name="thumbs-up-outline"></ion-icon>
            <ion-icon name="thumbs-down-outline"></ion-icon>
          </div>
          <button>Other Lyrics</button>
        </div>
      </div>

      <!-- ================= New Customers ================ -->
      <div class="recentCustomers">
        <h2>Playing now</h2>
        <div class="song">
          <img src="./public/image/album1.png" alt="">
          <div class="songinfo">
            <div class="txt">
              <h5>God On The Weekend</h5>
              <p>Ian Asher</p>
            </div>
            <div class="icon">
              <ion-icon name="pencil-sharp"></ion-icon>
            </div>
          </div>
          <div class="play">
            <div class="line"></div>
            <div class="icons">
              <ion-icon name="caret-back-sharp"></ion-icon>
              <ion-icon name="pause-circle" class="pause"></ion-icon>
              <ion-icon name="caret-forward-sharp"></ion-icon>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>

</html>