<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>paroly</title>
</head>
<style>
        /* Add CSS for initially hiding the login form */
        #signupForm {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        #loginForm {
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
        }
    </style>

<body class="m-0 p-0 bg-gradient-to-r from-black to-red-800 min-h-screen flex flex-col items-center justify-center">

    <div id="signupForm" class="sign bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800">Sign Up</h1>
        </div>
        <form action="" method="post">
            <div class="mb-4">
                <input class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-red-600" type="text" name="name" placeholder="Full Name" >
            </div>
            <div class="mb-4">
                <input class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-red-600" type="email" name="email" placeholder="Email">
            </div>
            <div class="mb-4">
                <input class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-red-600" type="password" name="password" placeholder="Password" >
            </div>
            <div class="mb-8">
                <input class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-red-600" type="password" name="repeat-password" placeholder="Repeat Password" >
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-700">What do you want to be!</label>
                <select id="role" name="role" class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-red-600" >
                    <option value="client">client</option>
                    <option value="artist">artist</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <div class="text-center">
                <input class="bg-red-600 text-white py-2 px-4 rounded-full cursor-pointer" type="submit" name="signup" value="Sign Up">
            </div>
        </form>
        <div class="text-center mt-4">
            <button id="showLoginFormBtn" class="text-red-600 hover:underline cursor-pointer">Already have an account? Login</button>
        </div>

    </div>

    <div id="loginForm"  class="  bg-white p-8 mt-8 rounded-lg shadow-md w-full max-w-md">
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800">Login</h1>
        </div>
        <form action="  " method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <input class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-red-600" type="email" name="email" placeholder="Email" >
            </div>
            <div class="mb-4">
                <input class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-red-600" type="password" name="password" placeholder="Password" >
            </div>
            <div class="text-center mt-5">
                <input class="bg-red-600 text-white py-2 px-8 rounded-xl cursor-pointer border border-red-600 hover:bg-white hover:text-red-600 duration:300 ease-in-out" type="submit" name="login" value="Login">
            </div>
        </form>
        <!-- here botton forget password -->
        <div class="mt-8 flex items-end justify-center ">
            <a href="<?php echo URLROOT; ?>/UserController/pwdReset" class="text-red-600 hover:underline cursor-pointer">Forgotten password?</a>
        </div>
        <div class="text-center mt-7">
            <button id="showSignUpFormBtn" class="text-red-600 hover:underline cursor-pointer" class="text-red-600 hover:underline cursor-pointer">Don't have an account? Sign Up</button>
        </div>
    </div>

</body>
<script>
        document.getElementById('showSignUpFormBtn').addEventListener('click', function () {
            document.getElementById('signupForm').style.display = 'block';
            document.getElementById('loginForm').style.display = 'none';
            setTimeout(() => {
                document.getElementById('signupForm').style.opacity = '1';
            }, 0);
        });

        document.getElementById('showLoginFormBtn').addEventListener('click', function () {
            document.getElementById('signupForm').style.opacity = '0';
            setTimeout(() => {
                document.getElementById('signupForm').style.display = 'none';
                document.getElementById('loginForm').style.display = 'block';
            }, 500);
        });
    </script>

</html>