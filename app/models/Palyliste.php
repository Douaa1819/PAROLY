<?php 
class Palyliste{
     
    // playliste_id`, `username`, `image`, `user_id
    private  $playliste_id;
    private  $username;
    private $image;
    private $user_id;
    private $user_name;
    public function __construct(){
        
    }
    
  

    /**
     * Get the value of playliste_id
     */ 
    public function getPlayliste_id()
    {
        return $this->playliste_id;
    }

    /**
     * Set the value of playliste_id
     *
     * @return  self
     */ 
    public function setPlayliste_id($playliste_id)
    {
        $this->playliste_id = $playliste_id;

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

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

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
     * Get the value of user_name
     */ 
    public function getUser_name()
    {
        return $this->user_name;
    }

    /**
     * Set the value of user_name
     *
     * @return  self
     */ 
    public function setUser_name($user_name)
    {
        $this->user_name = $user_name;

        return $this;
    }
}
?>