<?php
class GenreController {
    private $model;

    public function __construct() {
        $this->model = new GenreModel();
    }

    public function filterByGenre() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['genre'])) {
            $genreName = $_POST['genre'];

            // Obtenir id du genre à partir du nom
            $genreId = $this->model->getGenreIdByName($genreName);

            // Vérifiez 
            if ($genreId !== null) {
                $songs = $this->model->getSongsByGenre($genreId);

                echo json_encode(['success' => true, 'data' => $songs]);
                exit;
            } else {
                echo json_encode(['success' => false, 'message' => 'Le genre est introuvable.']);
                exit;
            }
        }
    }
}
