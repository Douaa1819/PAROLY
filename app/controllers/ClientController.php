<?php

session_start();
if(!isset($_SESSION['id'])){
  header('Location: '.URLROOT.'/UserController');
}
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
      $lyrics_id = 1; // change to POST["lyrics_id"] (douaa zidi hadi mli t9adi la tache dyalk)
      $typeReclamation = $_POST['typeReclamation'];
      $user_id = $_SESSION['id'];
      $this->reclamationDao->InsertReclamation($lyrics_id, $typeReclamation, $user_id);
      header('Location: ' . URLROOT . '/ClientController/index');
    } else {
      header('Location: ' . URLROOT . '/ClientController/index');
    }
  }
}
