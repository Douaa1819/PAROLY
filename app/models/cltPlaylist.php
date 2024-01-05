<?php 
class Palylist{
 
    private  $playliste_id;
    private  $username;
    private $image;
    private $user_id;
    private $user_name;
    public function __construct(){
        
    }
    

    public function getPlayliste_id()
    {
        return $this->playliste_id;
    }

    public function setPlayliste_id($playliste_id)
    {
        $this->playliste_id = $playliste_id;

    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;

    }


    public function getImage()
    {
        return $this->image;
    }


    public function setImage($image)
    {
        $this->image = $image;

    }

    public function getUser_id()
    {
        return $this->user_id;
    }


    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

    }

    public function getUser_name()
    {
        return $this->user_name;
    }

    public function setUser_name($user_name)
    {
        $this->user_name = $user_name;

    }
}
?>