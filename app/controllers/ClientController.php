<?php
class ClientController extends Controller
{

  private $reclamationDao;
private $songModel;
  public function __construct()
  {
    $this->reclamationDao = $this->model("ReclamationDao");
    $this->songModel = $this->model("SongDao");
  }

  public function index()
  {
    $data = [
      'title' => 'client',
      'song'=> $this->songModel->getAllForClient(),
    ];

    $this->view('pages/client/clienthome', $data);
  }

  public function AddReclamation()
  {
    if (isset($_POST['submit'])) {
      $lyrics_id = 1; // change to  $_POST["lyrics_id"] (douaa zidi hadi mli t9adi la tache dyalk)
      $typeReclamation = $_POST['typeReclamation'];
      $user_id = $_SESSION['id'];
      $this->reclamationDao->InsertReclamation($lyrics_id, $typeReclamation, $user_id);
      header('Location: ' . URLROOT . '/ClientController/index');
    } else {
      header('Location: ' . URLROOT . '/ClientController/index');
    }
  }
}
