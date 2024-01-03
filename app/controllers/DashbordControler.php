<?php
  class DashbordControler extends Controller {
    private $GenreModel;
    private $AlbumModel;
    public function __construct(){
      $this->GenreModel =$this->model('GenreDao');
      $this->AlbumModel =$this->model('AlbumDao');
     
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
          'Album'=>$this->AlbumModel->getAll(),
          'Genre'=>$this->GenreModel->getAll()
        ];
        $this->view('pages/Dashbord/Album' ,$data);
      }

    public function Artiste(){
        $data = [
          'title' => 'Artiste',
        ];
       
        $this->view('pages/Dashbord/Artiste', $data);
      }
      public function Playliste(){
        $data = [
          'title' => 'Playliste',
        ];
       
        $this->view('pages/Dashbord/Playliste', $data);
      }
      public function song(){
        $data = [
          'title' => 'song',
        ];
       
        $this->view('pages/Dashbord/song', $data);
      }
      public function Lyrics(){
        $data = [
          'title' => 'Lyrics',
        ];
       
        $this->view('pages/Dashbord/Lyrics', $data);
      }
      //------------------------- Genere---------------------------
    //   Ajouter Genre
      public function AddGenre(){
        if(isset($_POST['submit'])){
        $name=$_POST['Genre'];
        // echo $name;
       $this->GenreModel->InsertGenre($name);
      header('Location: '.URLROOT.'/DashbordControler/Genre');
    }
    else{
      header('Location: '.URLROOT.'/DashbordControler/Genre');
    }
      
      }
      public function DelletGenre(){
            if(isset($_GET['id'])){
              $id=$_GET['id'];
              $this->GenreModel->DelletGenre( $id );

              header('Location: '.URLROOT.'/DashbordControler/Genre');
            }
            else{
              header('Location: '.URLROOT.'/DashbordControler/Genre');

            }
      }
      public function UpdateGenre(){
        
        if(isset($_POST['updategenre'])){
        $id=$_POST['id'];
        $nom=$_POST['genre'];
        $this->GenreModel->UpdateGenre($id,$nom);
        header('Location: '.URLROOT.'/DashbordControler/Genre');
      }
        else{
          header('Location: '.URLROOT.'/DashbordControler/Genre');
        }
        // header('Location: '.URLROOT.'/DashbordControler/UpdateGenre');
      }
           //------------------------- fin Genere---------------------------
          //------------------------- Album ---------------------------
    
          public function addAlbum() {
            if (isset($_POST['AddAlbum'])) {
              // var_dump($_FILES);
              // die();
    
              $tmp_name= $_FILES['image']['tmp_name'];
              $image = file_get_contents($tmp_name);
                
              $albumName = $_POST['album'];
              $genreName = $_POST['genre'];
              // echo "Album Name: $albumName<br>";
              // echo "Image Name: $image<br>";
              // echo "Genre Name: $genreName<br>";
              
               $this->AlbumModel->InsertAlbum($albumName,$image,$genreName);
               header('Location: '.URLROOT.'/DashbordControler/Album');
             
          }
          
          }
    
  }
 