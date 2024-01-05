<?php
session_start();
if(!isset($_SESSION['id'])){
  header('Location: '.URLROOT.'/UserController');
}
if($_SESSION['role'] != 'artist' && $_SESSION['role'] = 'client' ){
  header('Location: '.URLROOT.'/ClientController');
}
if($_SESSION['role'] != 'artist' && $_SESSION['role'] = 'admin' ){
  header('Location: '.URLROOT.'/DashbordControler');
}
class Artist extends Controller {
  
    private $AlbumModel;
    private $GenreModel;
    private $SongModel;
    public function __construct(){
     
      $this->AlbumModel =$this->model('AlbumDao');
      $this->GenreModel =$this->model('GenreDao');
      $this->SongModel =$this->model('SongDao');
    }


    public function index(){
        $data = [
          'title' => 'Artist',
          'Album'=>$this->AlbumModel->getAll(),
            'Genre'=>$this->GenreModel->getAll()
        ];
       
        $this->view('pages/Artiste/Dashboord', $data);
      }
     
   
        
      public function Album(){
          $data = [
            'title' => 'Album',
            'Album'=>$this->AlbumModel->getAll(),
            'Genre'=>$this->GenreModel->getAll()
          ];
          $this->view('pages/Artiste/Albume' ,$data);
          
        }
  
      public function Artiste(){
          $data = [
            'title' => 'Artiste',
            'Album'=>$this->AlbumModel->getAll(),
            'Genre'=>$this->GenreModel->getAll()

          ];
         
          $this->view('pages/Artiste/Artiste', $data);
        }
      
        
        public function song(){
          $data = [
            'title' => 'song',
            'song'=>$this->SongModel->getAll(),
            'Album'=>$this->AlbumModel->getAll()
           
          ];
         
          $this->view('pages/Artiste/song', $data);
        }
        public function AddAlbum(){
          if(isset($_POST['AddAlbum'])){
          $album = $_POST['name'];
          $tmp_name = $_FILES['img']['tmp_name'];
          $image = file_get_contents($tmp_name);
          $genre = $_POST['Genre_name'];
          
       $this->AlbumModel->InsertAlbum($album, $image, $genre);
       
         header('Location: '.URLROOT.'/Artist/Album');
      }
      else{
        header('Location: '.URLROOT.'/Artist/Album');
      }
        
        }

        public function AddMusic(){
          if(isset($_POST['AddMusic'])){
            $name = $_POST['name'];
            $album = $_POST['album'];
            $id = $_SESSION['id'];
            
             $this->SongModel->InsertSong($name,$album ,$id);
          
             header('Location: '.URLROOT.'/Artist/Song');
          
          } else{
            header('Location: '.URLROOT.'/Artist/Song');
          }
        }
      
}

