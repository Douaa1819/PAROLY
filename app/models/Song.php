<?php 
class Song{
    // id`, `name`, `album_id`
    private $idSong;
    private $nameSong;
    private $album_id;
    private $album_name;
    public function __construct(){
        
    }
    

    /**
     * Get the value of idSong
     */ 
    public function getIdSong()
    {
        return $this->idSong;
    }

    /**
     * Set the value of idSong
     *
     * @return  self
     */ 
    public function setIdSong($idSong)
    {
        $this->idSong = $idSong;

        return $this;
    }

    /**
     * Get the value of nameSong
     */ 
    public function getNameSong()
    {
        return $this->nameSong;
    }

    /**
     * Set the value of nameSong
     *
     * @return  self
     */ 
    public function setNameSong($nameSong)
    {
        $this->nameSong = $nameSong;

        return $this;
    }

    /**
     * Get the value of album_id
     */ 
    public function getAlbum_id()
    {
        return $this->album_id;
    }

    /**
     * Set the value of album_id
     *
     * @return  self
     */ 
    public function setAlbum_id($album_id)
    {
        $this->album_id = $album_id;

        return $this;
    }

    /**
     * Get the value of album_name
     */ 
    public function getAlbum_name()
    {
        return $this->album_name;
    }

    /**
     * Set the value of album_name
     *
     * @return  self
     */ 
    public function setAlbum_name($album_name)
    {
        $this->album_name = $album_name;

        return $this;
    }
}