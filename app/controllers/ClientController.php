<?php
session_start();
if(!isset($_SESSION['id'])){
  header('Location: '.URLROOT.'/UserController');
}

  class ClientController extends Controller {
    public function __construct(){
     
    }
    public function index(){
      $data = [
        'title' => 'client',
      ];
     
      $this->view('pages/client/clienthome', $data);
    }
    

  
  }