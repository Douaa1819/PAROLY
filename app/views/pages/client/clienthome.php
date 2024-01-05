<?php require APPROOT . '/views/inc/Clientheader.php'; ?>
<?php require APPROOT . '/views/inc/ClientSideBar.php'; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>
<?php 
$user_id=1;
$id_Song=2;


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
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
        <div class="lyrics" >
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

            <!-- iciiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii -->
   
    

<button id="modal-toggle" data-modal-toggle="authentication-modal" type="button" class="icon cursor-pointer mt-4 ml-4 p-2 bg-red-600 text-white rounded-full">
    <ion-icon name="pencil-sharp"></ion-icon>
</button>


<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto flex overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
       
        <div class="relative bg-slate-800 rounded-lg shadow dark:bg-gray-700">
    
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 bg-neutral-700 text-white">
                <h3 class="text-xl font-semibold">
                    Enter your Lyrics
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
          <form id="lyrics-form" action="<?php echo URLROOT . '/LyricsController/addLyrics'; ?>" method="post">
        <textarea name="name_lyrics" placeholder="Ajouter parol..." class=" text-black"></textarea>
        <input type="hidden" name="id_song" value="<?php echo $id_Song; ?>">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <button type="submit" name="addParol">Enter</button>
    </form>
                
            </div>
        </div>
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
  <script>
 document.addEventListener('DOMContentLoaded', function() {

    var modalButton = document.querySelector('[data-modal-toggle="authentication-modal"]');
    var modal = document.getElementById('authentication-modal');
    var form = document.getElementById('lyrics-form');

    modalButton.addEventListener('click', function() {
        toggleModal();
    });


    // fonction pour gérer l'ouverture/fermeture du modal
    function toggleModal() {
        modal.classList.toggle('hidden');
    }

    var closeButtons = document.querySelectorAll('[data-modal-hide="authentication-modal"]');

    closeButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            toggleModal();
        });
    });

    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            toggleModal();
        }
    });

    modal.querySelector('.relative').addEventListener('click', function(event) {
        event.stopPropagation();
    });
});

</script>
</body>
</html>