<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/SideBar.php'; ?>


<!--=========================Main====================-->
<section>
<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>

        <button class="text-white fs-2 btn">
            <ion-icon name="notifications-outline"></ion-icon>
            <!-- <img src="assets/imgs/customer01.jpg" alt="" /> -->
        </button>

    </div>
    <div>
        <p class="text-red-600 font-mono p-6">Account</p>
        <h1 class="text-white text-center text-3xl font-sans font-bold"> 
            Welcome Artist_name!
        </h1>
        <div class="flex justify-around" >
            <div >
                <img src="./assets/imgs/user_2102633.png" alt="profile" class="h-64 w-64">
            </div>
            <div class="flex flex-col w-1/3 gap-4 mt-16">
                <p class="text-white border-solid border-2 border-white rounded-md text-center">Full name</p>
                <p class="text-white border-solid border-2 border-white rounded-md text-center">Artist Name</p>
                <p class="text-white border-solid border-2 border-white rounded-md text-center">Email</p>

            </div>
            
        </div>




    <div>
        <div>
            <p class="text-red-600 font-mono p-6">Albums</p>
            <h1 class="text-white text-center text-3xl font-sans font-bold"> 
                Your Albums
            </h1>
            <div class="ml-4 grid grid-cols-4">
            <button type="button" id="myButton" class="relative">
        <div class="relative">
            <div class="h-52 w-52 mt-4 p-12 rounded-xl bg-gray-300 cursor-pointer">
                <img src="./assets/imgs/add.png" alt="Add" class="">
            </div>
        </div>
    </button>
                <div>
                    <img src="./assets/imgs/album1.jpg" alt="Artwork" class="h-64 w-64 p-4">
                </div>
                
                <div>
                    <img src="./assets/imgs/album2.jpg" alt="Artwork" class="h-64 w-64 p-4 ">
                </div>
                
                
                
                
                
                
            </div>




        <div>
        
        
<div>
</section>



<div id="myPopup" class="fixed left-0 top-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-8 rounded-md">
        <span id="closePopup" class="absolute top-2 right-2 text-gray-600 cursor-pointer text-lg">&times;</span>
        <h1 class="text-center ">Add Album</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="albumTitle" class="block text-sm font-medium text-gray-700 mt-4">Album Title:</label>
            <input type="text" id="albumTitle" name="albumTitle" class="mt-1 p-2 border rounded-md w-full">

            <label for="albumPicture" class="block text-sm font-medium text-gray-700 mt-4">Album Picture:</label>
            <input type="file" id="albumPicture" name="albumPicture" accept="image/*" class="mt-1 p-2 border rounded-md w-full">

            <label for="genre" class="block text-sm font-medium text-gray-700 mt-4">Genre:</label>
                <select id="genre" name="genre" class="mt-1 p-2 border rounded-md w-full">
                    <option value="pop">Pop</option>
                    <option value="rock">Rock</option>
                    <option value="hip-hop">Hip Hop</option>
                    <!-- Add more genre options as needed -->
                </select>

            <button type="submit" class="mt-4 p-2 bg-blue-500 text-white rounded-md">Add Album</button>
        </form>
    </div>
</div>


<script>
    // Get the button that opens the popup
    var btn = document.getElementById("myButton");

    // Get the <span> element that closes the popup
    var closeBtn = document.getElementById("closePopup");

    // Get the popup element
    var popup = document.getElementById("myPopup");

    // When the user clicks the button, open the popup 
    btn.onclick = function() {
        popup.style.display = "flex";
    }

    // When the user clicks on <span> (x), close the popup
    closeBtn.onclick = function() {
        popup.style.display = "none";
    }

    // When the user clicks anywhere outside of the popup, close it
    window.onclick = function(event) {
        if (event.target === popup) {
            popup.style.display = "none";
        }
    }
</script>


<?php require APPROOT . '/views/inc/footer.php'; ?>