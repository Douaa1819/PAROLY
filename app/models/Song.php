<?php 
class Song{
    // id`, `name`, `album_id`
    private $idSong;
    private $nameSong;
    private $album_id;
    private $album_image;
    private $date;
    private $idSongC;
    private $nameSongC;
    private $album_idC;
    private $album_imageC;
    private $dateC;
   
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
    **/

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
    public function getAlbum_image()
    {
        return $this->album_image;
    }
     public function getDate(){
        return $this->date;
     }

/**
     * Set the value of album_name
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Set the value of album_name
     *
     * @return  self
     */ 
    public function setAlbum_image($album_image)
    {
        $this->album_image = $album_image;

        return $this;
    }


















// to affiche all songs for client 



 /**
     * Get the value of idSong
     */ 
    public function getIdSongC()
    {
        return $this->idSongC;
    }
   
    /**
     * Set the value of idSong
     *
    **/

    /**
     * Set the value of idSong
     *
     * @return  self
     */ 
    public function setIdSongC($idSongC)
    {
        $this->idSongC = $idSongC;

        return $this;
    }

    /**
     * Get the value of nameSong
     */ 
    public function getNameSongC()
    {
        return $this->nameSongC;
    }

    /**
     * Set the value of nameSong
     *
     * @return  self
     */ 
    public function setNameSongC($nameSongC)
    {
        $this->nameSongC = $nameSongC;

        return $this;
    }

    /**
     * Get the value of album_id
     */ 
    public function getAlbum_idC()
    {
        return $this->album_idC;
    }

    /**
     * Set the value of album_id
     *
     * @return  self
     */ 
    public function setAlbum_idC($album_idC)
    {
        $this->album_idC = $album_idC;

        return $this;
    }

    /**
     * Get the value of album_name
     */ 
    public function getAlbum_imageC()
    {
        return $this->album_imageC;
    }
     public function getDateC(){
        return $this->dateC;
     }

/**
     * Set the value of album_name
     *
     * @return  self
     */ 
    public function setDateC($dateC)
    {
        $this->dateC = $dateC;

        return $this;
    }

    /**
     * Set the value of album_name
     *
     * @return  self
     */ 
    public function setAlbum_imageC($album_imageC)
    {
        $this->album_imageC = $album_imageC;

        return $this;
    }





}