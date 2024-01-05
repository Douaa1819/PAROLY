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
<?php

class LyricsModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function addLyrics($name_lyrics, $user_id, $id_Song) {
        $sql = "INSERT INTO lyrics (name_lyrics, user_id, status,date, id_Song) VALUES (:name_lyrics, :user_id, '0',Now(),:id_Song)";
        $this->db->query($sql);
        $this->db->bind(':name_lyrics', $name_lyrics);
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':id_Song', $id_Song);
        $this->db->execute();
    }

    
//like et dislike//
    public function addLike($lyricsId) {
        $sql = "UPDATE lyrics SET likes = likes + 1 WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $lyricsId);

        return $this->db->execute();
    }

    public function addDislike($lyricsId) {
        $sql = "UPDATE lyrics SET dislikes = dislikes + 1 WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $lyricsId);

        return $this->db->execute();
    }

    public function getLikes($lyricsId) {
        $sql = "SELECT likes FROM lyrics WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $lyricsId);

        $result = $this->db->single();

        return ($result) ? $result['likes'] : 0;
    }

    public function getDislikes($lyricsId) {
        $sql = "SELECT dislikes FROM lyrics WHERE id = :id";
        $this->db->query($sql);
        $this->db->bind(':id', $lyricsId);

        $result = $this->db->single();

        return ($result) ? $result['dislikes'] : 0;
    }
}

