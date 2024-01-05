<?php
class GenreModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getGenreIdByName($genreName) {
        $sql = "SELECT id FROM genre WHERE nom = :nom";
        $this->db->query($sql);
        $this->db->bind(':nom', $genreName);

        $result = $this->db->single();

        return ($result) ? $result['id'] : null;
    }

    public function getSongsByGenre($genreId) {
        $sql = "SELECT * FROM songs WHERE genre_id = :genre_id";
        $this->db->query($sql);
        $this->db->bind(':genre_id', $genreId);

        $results = $this->db->resultSet();

        return $results;
    }
}
