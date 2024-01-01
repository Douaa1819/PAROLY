<?php
  class DashbordControler extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Dashbord',
      ];
     
      $this->view('pages/Dashbord/Dashboord', $data);
    }
    public function Genre(){
        $data = [
          'title' => 'Genre',
        ];
       
        $this->view('pages/Dashbord/Genre', $data);
      }
    public function Album(){
        $data = [
          'title' => 'Album',
        ];
       
        $this->view('pages/Dashbord/Album', $data);
      }
    //   Ajouter
      public function AddGenre(){
        $name=$_POST['Genre'];
        echo $name;
        $data = [
          'title'=> 'Add Genre',
       ];
       
      }

  }