<?php
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
        ];
       
        $this->view('pages/Artiste/Dashboord', $data);
      }
     
   
        
      public function Album(){
          $data = [
            'title' => 'Album',
            'Album'=>$this->AlbumModel->getAll(),
            'Genre'=>$this->GenreModel->getAll()
          ];
          $this->view('pages/Artiste/Album' ,$data);
          
        }
  
      public function Artiste(){
          $data = [
            'title' => 'Artiste',
          ];
         
          $this->view('pages/Artiste/Artiste', $data);
        }
      
        
        public function song(){
          $data = [
            'title' => 'song',
            'song'=>$this->SongModel->getAll(),
            'Album'=>$this->AlbumModel->getFtechOption()
  
          ];
         
          $this->view('pages/Artiste/song', $data);
        }
        public function AddArtiste(){
          if(isset($_POST['AddAlbum'])){
          $album = $_POST['name'];
          $tmp_name = $_FILES['img']['tmp_name'];
          $image = file_get_contents($tmp_name);
          $genre = $_POST['Genre_name'];
          echo $album;
          echo $genre;
      $res=  $this->AlbumModel->InsertAlbum($album, $image, $genre);
        if($res){
          echo 'hamid';
        }else echo 'nohamid';
         header('Location: '.URLROOT.'/Artist/Album');
      }
      else{
        header('Location: '.URLROOT.'/Artist/Album');
      }
        
        }
      
}

