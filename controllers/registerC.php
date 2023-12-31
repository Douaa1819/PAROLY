<?php
require_once("../models/DAO/userDAO.php");
require_once("../models/class/User.php");
require_once("../config/config.php");

$user_DAO = new UserDAO($dbconn->pdo);

if (isset($_POST["signup"])) {
    $fullName = $_POST["name"];
    $email = $_POST["email"];
    $role = $_POST["role"];
    $password = $_POST["password"];
    $repeat_password = $_POST["repeat-password"];

    $password_hash = password_hash($repeat_password, PASSWORD_DEFAULT);
    $errors = array();

    if (strlen($password) < 2) {
        array_push($errors, "Please use at least 8 characters");
    }
    if ($password !== $repeat_password) {

        array_push($errors, "The password does not match");
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo '<div class="bg-red-500 rounded-xl text-white p-2 my-2">' . $error . '</div>';
        }
    } else {
      
        $Result = $user_DAO->signup($fullName, $email, $password_hash, $role);
       if($Result){
            header("location: ../view/register.php");
       }
    }
}else if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $Result = $user_DAO->login($email);
    if ($Result && is_array($Result) && count($Result) > 0) {
        $user = $Result[0];
        if ($user && password_verify($password, $user->getPassword())) {
        if ($user->getrole() == 'Admin'){
            header("location: pageAdmine.php");
        }else if ($user->getrole() == 'Client'){
            header("location: pageClient.php");
        }else if ($user->getrole() == 'Artiste'){
            header("location:  pageArtiste.php");
        }else {
            echo "doesn't exist";
        }
    } else {
        echo "password incorrect";
    }
}
}


      
       