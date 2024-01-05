<?php
class DashbordControler extends Controller
{
  private $GenreModel;
  private $AlbumModel;
  private $PlayListeModel;
  private $LyricsModel;
  private $SongModel;
  private $PHPMailer;
  public function __construct()
  {
    $this->GenreModel = $this->model('GenreDao');
    $this->AlbumModel = $this->model('AlbumDao');
    $this->PlayListeModel = $this->model('PalylisteDao');
    $this->LyricsModel = $this->model('LyricsDao');
    $this->SongModel = $this->model('SongDao');
    $this->PHPMailer=$this->model('PHPMailerDao');


  }

  public function index()
  {
    $data = [
      'title' => 'Dashbord',
    ];

    $this->view('pages/Dashbord/Dashboord', $data);
  }
  public function Genre()
  {

    $data = [
      'title' => 'Genre',
      'Genre' => $this->GenreModel->getAll()
    ];


    $this->view('pages/Dashbord/Genre', $data);
  }

  public function Album()
  {
    $data = [
      'title' => 'Album',
      'Album' => $this->AlbumModel->getAll(),
      'Genre' => $this->GenreModel->getAll()
    ];
    $this->view('pages/Dashbord/Album', $data);
  }

  public function Artiste()
  {
    $data = [
      'title' => 'Artiste',
    ];

    $this->view('pages/Dashbord/Artiste', $data);
  }
  public function Playlist()
  {
    $data = [
      'title' => 'Playlist',
      'Playliste' => $this->PlayListeModel->getAll(),
    ];

    $this->view('pages/Dashbord/Playlist', $data);
  }
  public function song()
  {
    $data = [
      'title' => 'song',
      'song' => $this->SongModel->getAll(),
      'Album' => $this->AlbumModel->getFtechOption()

    ];

    $this->view('pages/Dashbord/song', $data);
  }
  public function Lyrics()
  {
    $data = [
      'title' => 'Lyrics',
      'Lyrics' => $this->LyricsModel->getAll()
    ];

    $this->view('pages/Dashbord/Lyrics', $data);
  }
  //------------------------- Genere---------------------------
  //   Ajouter Genre
  public function AddGenre()
  {
    if (isset($_POST['submit'])) {
      $name = $_POST['Genre'];
      // echo $name;
      $this->GenreModel->InsertGenre($name);
      header('Location: ' . URLROOT . '/DashbordControler/Genre');
    } else {
      header('Location: ' . URLROOT . '/DashbordControler/Genre');
    }

  }
  public function DelletGenre()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $this->GenreModel->DelletGenre($id);

      header('Location: ' . URLROOT . '/DashbordControler/Genre');
    } else {
      header('Location: ' . URLROOT . '/DashbordControler/Genre');

    }
  }
  public function UpdateGenre()
  {

    if (isset($_POST['updategenre'])) {
      $id = $_POST['id'];
      $nom = $_POST['genre'];
      $this->GenreModel->UpdateGenre($id, $nom);
      header('Location: ' . URLROOT . '/DashbordControler/Genre');
    } else {
      header('Location: ' . URLROOT . '/DashbordControler/Genre');
    }
  }
  //------------------------- fin Genere---------------------------


  //------------------------- Play liste ---------------------------
  // ADD pLAY LISTE 
  public function addPlayliste()
  {
    if (isset($_POST['playliste'])) {
      $namePlayliste = $_POST['Playliste'];
      $tmp_name = $_FILES['image']['tmp_name'];
      $image = file_get_contents($tmp_name);
      $user = $_POST['user'];

      $this->PlayListeModel->InsertPlayliste($namePlayliste, $image, $user);
      header('Location: ' . URLROOT . '/DashbordControler/Playlist');
    } else {
      header('Location: ' . URLROOT . '/DashbordControler/Playlist');
    }
  }
  // Dellete playliste
  public function DelletPlayliste()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $this->PlayListeModel->DelletPlayliste($id);

      header('Location: ' . URLROOT . '/DashbordControler/Playlist');
    } else {
      header('Location: ' . URLROOT . '/DashbordControler/Playlist');

    }
  }
  //-------------------------  fin Play liste ---------------------------



  // ------------------------------Add Song------------------------------------
  public function Addsong()
  {
    if (isset($_POST['AddSong'])) {
      $Songname = $_POST['Songname'];
      $album = $_POST['AlbumSong'];
      $this->SongModel->InsertSong($Songname, $album);
      header('Location: ' . URLROOT . '/DashbordControler/song');
    } else {
      header('Location: ' . URLROOT . '/DashbordControler/song');
    }
  }
  public function DelletSong()
  {
    if (isset($_GET['id'])) {
      $idsong = $_GET['id'];
      $this->SongModel->DeleteSong($idsong);
      header('Location: ' . URLROOT . '/DashbordControler/song');
    } else {
      header('Location: ' . URLROOT . '/DashbordControler/song');

    }

  }
  // ------------------------------fin  Song------------------------------------

  // ------------------------------Debu  Lyrics------------------------------------

  public function DeletLyrics()
  {
    if (isset($_GET['id'])) {
      $idLyrics = $_GET['id'];
      $this->LyricsModel->DeleteLyrics($idLyrics);
      header('Location: ' . URLROOT . '/DashbordControler/Lyrics');
    } else {
      header('Location: ' . URLROOT . '/DashbordControler/Lyrics');

    }

  }
  // -------------------------------------PHPMAILER-----------------
  public function sendEmail() {
    $to=$_POST['Email'];
    $id=$_POST['id'];
    $subject=" Accepte  ";
    $body="félicitation on a  affiche  les  paroles pour music";
   
    $result = $this->PHPMailer->sendEmail($to, $subject,$body);

    if ($result) {
      $this->LyricsModel->UpdateStatus($id);
      header('Location: ' . URLROOT . '/DashbordControler/Lyrics');
      
    } else {
        echo 'Error sending email.';
    }
}


}