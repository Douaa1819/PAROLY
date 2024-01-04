<?php




class User {
    private $user_id;
    private $username;
    private $email;
    private $password;
    private $role;
    private $img;

    public function __construct($email = null , $password = null , $role = null , $img = null) {
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

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
}
 
// class User {
//     private $username;
//     private $email;
//     private $password;
//     private $role;
//     private $img;

//     public function __construct() {
 

//     }


  

//     /**
//      * Get the value of username
//      */ 
//     public function getUsername()
//     {
//         return $this->username;
//     }

//     /**
//      * Set the value of username
//      *
//      * @return  self
//      */ 
//     public function setUsername($username)
//     {
//         $this->username = $username;

//         return $this;
//     }

//     /**
//      * Get the value of email
//      */ 
//     public function getEmail()
//     {
//         return $this->email;
//     }

//     /**
//      * Set the value of email
//      *
//      * @return  self
//      */ 
//     public function setEmail($email)
//     {
//         $this->email = $email;

//         return $this;
//     }

//     /**
//      * Get the value of password
//      */ 
//     public function getPassword()
//     {
//         return $this->password;
//     }

//     /**
//      * Set the value of password
//      *
//      * @return  self
//      */ 
//     public function setPassword($password)
//     {
//         $this->password = $password;

//         return $this;
//     }

//     /**
//      * Get the value of role
//      */ 
//     public function getRole()
//     {
//         return $this->role;
//     }

//     /**
//      * Set the value of role
//      *
//      * @return  self
//      */ 
//     public function setRole($role)
//     {
//         $this->role = $role;

//         return $this;
//     }

//     /**
//      * Get the value of img
//      */ 
//     public function getImg()
//     {
//         return $this->img;
//     }

//     /**
//      * Set the value of img
//      *
//      * @return  self
//      */ 
//     public function setImg($img)
//     {
//         $this->img = $img;

//         return $this;
//     }
// }
 