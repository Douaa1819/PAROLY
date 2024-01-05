<?php
session_start();
if(!isset($_SESSION['id'])){
  header('Location: '.URLROOT.'/UserController');
}
if($_SESSION['role'] != 'client' && $_SESSION['role'] = 'artist' ){
  header('Location: '.URLROOT.'/artist');
}
if($_SESSION['role'] != 'client' && $_SESSION['role'] = 'admin' ){
  header('Location: '.URLROOT.'/DashbordControler');
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
    public function account(){
      $data = [
        'title' => 'account',
      ];
    
      $this->view('pages/client/clienthome', $data);
    }
    public function playlist(){
      $data = [
        'title' => 'playlist',
      ];
     
      $this->view('pages/client/clienthome', $data);
    }
    

  
  }