<?php

require_once APPROOT . '../models/Lyrics.php';

class LyricsController {
    private $model;

    public function __construct() {
        $this->model = new LyricsModel();
    }

    public function addLyrics() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addParol'])) {
            $name_lyrics = $_POST['name_lyrics'];
            $user_id = $_POST['user_id'];
            $id_Song = $_POST['id_song'];

            $success = $this->model->addLyrics($name_lyrics, $user_id,  $id_Song);

            if ($success) {
                echo "succes";
            } else {
                echo "false";
            }
            exit;
        }
    }


    //3endak tnsay  l'ajout colomn like et dislik on tabl ALTER TABLE lyrics
//ADD COLUMN likes INT DEFAULT 0,
//ADD COLUMN dislikes INT DEFAULT 0;

public function likeLyrics($lyricsId) {
    $success = $this->model->addLike($lyricsId);

    if ($success) {
        echo 'success|' . $this->model->getLikes($lyricsId);
    } else {
        echo 'error';
    }
}

public function dislikeLyrics($lyricsId) {
    $success = $this->model->addDislike($lyricsId);

    if ($success) {
        echo 'success|' . $this->model->getDislikes($lyricsId);
    } else {
        echo 'error';
    }
}
}

