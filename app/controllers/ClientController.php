<?php
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