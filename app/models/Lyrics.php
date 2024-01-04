<?php 
require_once(APPROOT . '/models/User.php');
require_once(APPROOT . '/models/Song.php');
class Lyrics {
    // `id`, `name_lyrics`, `date`, `user_id`, `status`, `id_Song`
    private $idLyrics;
    private $name_lyrics;
    private $date;
    private User $client;
    private $status;
    private Song $song; 
    public function __construct(){
        $this->client=new User();
        $this->song=new Song();
    }

    /**
     * Get the value of idLyrics
     */ 
    public function getIdLyrics()
    {
        return $this->idLyrics;
    }

    /**
     * Set the value of idLyrics
     *
     * @return  self
     */ 
    public function setIdLyrics($idLyrics)
    {
        $this->idLyrics = $idLyrics;

        return $this;
    }

    /**
     * Get the value of name_lyrics
     */ 
    public function getName_lyrics()
    {
        return $this->name_lyrics;
    }

    /**
     * Set the value of name_lyrics
     *
     * @return  self
     */ 
    public function setName_lyrics($name_lyrics)
    {
        $this->name_lyrics = $name_lyrics;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Get the value of song
     */ 
    public function getSong()
    {
        return $this->song;
    }
}
?>