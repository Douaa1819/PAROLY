<?php

require_once APPROOT . '../models/Lyrics.php';

class LyricsController {
    private $model;

    public function __construct() {
        $this->model = new LyricsDao();
    }

    public function addLyrics() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addParol'])) {
            $name_lyrics = $_POST['name_lyrics'];
            $user_id = $_POST['user_id'];
            $id_Song = $_POST['id_song'];

            $this->model->addLyrics($name_lyrics, $user_id,  $id_Song);

        }
    }




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

