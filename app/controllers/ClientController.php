<?php
class ClientController extends Controller
{

  private $reclamationDao;

  public function __construct()
  {
    $this->reclamationDao = $this->model("ReclamationDao");
  }

  public function index()
  {
    $data = [
      'title' => 'client',
    ];

    $this->view('pages/client/clienthome', $data);
  }

  public function AddReclamation()
  {
    if (isset($_POST['submit'])) {
      $lyrics_id = 1; // change to POST["lyrics_id"]
      $typeReclamation = $_POST['typeReclamation'];
      $user_id = 1; // change to session
      $this->reclamationDao->InsertReclamation($lyrics_id, $typeReclamation, $user_id);
      header('Location: ' . URLROOT . '/ClientController/index');
    } else {
      header('Location: ' . URLROOT . '/ClientController/index');
    }
  }
}
