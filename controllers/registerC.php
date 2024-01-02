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
    $patternEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    $patternName ='/^[a-zA-Z\s\'.-]+$/';
    $patternPassword = '/^.{4,}$/';

    if(!preg_match($patternName, $fullName)){
        array_push($errors, "Name is not valid.");
    }

    if (!preg_match($patternEmail, $email)) {

        array_push($errors, "Email is not valid.");
    }
   
    if (!preg_match($patternPassword,$password)) {
        array_push($errors, "Please use at least 4 characters");
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
    $patternEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'; 
    $patternPassword = '/^.{4,}$/';
    $errors = array();
    if (!preg_match($patternEmail, $email)) {

        array_push($errors, "Email is not valid.");
    }
    
    if (!preg_match( $patternPassword ,  $password )) {
        
        array_push($errors, "Please use at least 8 characters");
    }
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo '<div class="bg-red-500 rounded-xl text-white p-2 my-2">' . $error . '</div>';
        }
     }else if ($Result && is_array($Result) && count($Result) > 0) {
        $user = $Result[0];
        if ($user && password_verify($password, $user->getPassword())) {
        if ($user->getrole() == 'admin'){
            header("location: pageAdmine.php");
        }else if ($user->getrole() == 'client'){
            header("location: pageClient.php");
        }else if ($user->getrole() == 'artist'){
            header("location:  pageArtiste.php");
        }else {
            echo "doesn't exist";
        }
    } else {
        echo "password incorrect";
    }
}
}



      
       