
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>paroly</title>
</head>

<body class="">
<div id="EmailInput"  class="  bg-white p-8 mt-8 rounded-lg shadow-md w-full max-w-md">
        <div class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800">New password</h1>
            <p class="text-gray-600 p-4">An email has been sent to you</p>
            
        </div>
        <form action="<?php echo URLROOT ?>/UserController/ChangePassword" method="post" enctype="multipart/form-data">
           
            <div class="mb-4">
                <input class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-red-600" type="password" name="pass1" placeholder="New password" >
            </div>
            <div class="mb-4">
                <input class="w-full p-2 border-b-2 border-gray-300 focus:outline-none focus:border-red-600" type="password" name="Pass2" placeholder="Confirm new password" >
            </div>
           
            <div class="text-center mt-5">
                <button   class="bg-red-600 text-white py-2 px-8 rounded-xl cursor-pointer border border-red-600 hover:bg-white hover:text-red-600 duration:300 ease-in-out" type="submit" name="go" >Change password</button>
            </div>
        </form>
     
    </div>
 
    
    
</body>
    
    

</html>