<?php
require_once("../models/class/User.php");


class User {
    private $email;
    private $password;
    private $role;
    private $img;

    public function __construct( $email, $password, $role, $img) {
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;      
        $this->img = $img;      
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRole() {
        return $this->role;
    }   
    
    public function getImg() {
        return $this->img;
    }
}
 