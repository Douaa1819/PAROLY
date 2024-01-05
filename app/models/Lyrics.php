<?php

class LyricsModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function addLyrics($name_lyrics, $user_id, $id_Song) {
        $sql = "INSERT INTO lyrics (name_lyrics, user_id, status, id_Song) VALUES (:name_lyrics,:user_id,:id_Song)";
        $this->db->query($sql);
        $this->db->bind(':name_lyrics', $name_lyrics);
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':id_Song', $id_Song);
        return $this->db->execute();
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

