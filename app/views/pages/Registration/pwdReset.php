<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>paroly</title>
</head>
<body class="m-0 p-0 bg-gradient-to-r from-black to-red-800 min-h-screen flex flex-col items-center justify-center">
<div id="EmailInput"  class="  bg-white p-8 mt-8 rounded-lg shadow-md w-full max-w-md">
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800">Reset your password</h1>
            
        </div>
        <form action=" " method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <input class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-red-600" type="email" name="email" placeholder="Email" >
            </div>
           
            <div class="text-center mt-5">
                <input class="bg-red-600 text-white py-2 px-8 rounded-xl cursor-pointer border border-red-600 hover:bg-white hover:text-red-600 duration:300 ease-in-out" type="submit" name="verif" value="verify email">
            </div>
        </form>
        <!-- here botton forget password -->
        <div class="mt-8 flex items-end justify-center ">
            <a href="<?php echo URLROOT; ?>/UserController/register" class="text-red-600 hover:underline cursor-pointer">Try to login?</a>
        </div>
        <div class="text-center mt-7">
            <button id="showSignUpFormBtn" class="text-red-600 hover:underline cursor-pointer" class="text-red-600 hover:underline cursor-pointer">Don't have an account? Sign Up</button>
        </div>
    </div>
    
    
</body>
</html>