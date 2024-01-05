<?php 

require_once(APPROOT . '/models/Song.php');

class SongDao{
    private $db;
    private Song $song;
    public function __construct(){
        $this->db=new Database();
        $this->song=new Song(); 
    }
    
    public function getAll(){
        $req="SELECT song.id AS ids, song.name AS nom, Album.image AS image FROM song JOIN album ON song.album_id = album.id WHERE song.id_user = :id;";
        $this->db->query($req);
        $id = $_SESSION['id'];
        $this->db->bind(':id',$id);
        $res=$this->db->fetchALL();
        $array = array();
        foreach ($res as $row) {
            $Song = new Song();
            $Song->setIdSong($row->ids);
            $Song->setNameSong($row->nom);
            $Song->setAlbum_image($row->image);;  
            array_push($array,$Song);
           
        }
    
        return $array;
    }
    public function InsertSong($nameSong,$idAlbum,$id){
        
        $req="INSERT INTO song(name,album_id,id_user) VALUES (:nameSong,:idAlbum,:user_id) ";
        $this->db->query($req);
        $this->db->bind(':nameSong',$nameSong);
        $this->db->bind(':idAlbum',$idAlbum);
        $this->db->bind(':user_id',$id);
       return $this->db->execute();

        
    }
    public function DeleteSong($idSong){
        $req="DELETE FROM `song` WHERE id=:id";
        $this->db->query($req);
        $this->db->bind(':id',$idSong);
        $this->db->execute();
    }
}

?>