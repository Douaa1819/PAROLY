<?php
  class DashbordControler extends Controller {
    private $GenreModel;
    public function __construct(){
      $this->GenreModel =$this->model('GenreDao');
     
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
          'Genre'=>$this->GenreModel->getAll()
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
       $this->GenreModel->InsertGenre($name);
      header('Location: '.URLROOT.'DashbordControler/Genre');
      
      }
    
  }
 