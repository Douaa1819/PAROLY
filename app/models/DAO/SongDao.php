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
        $req="SELECT song.id ids,song.name nom, album.name album FROM song,album WHERE song.album_id=album.id";;
        $this->db->query($req);
        $res=$this->db->fetchALL();
        $array = array();
        foreach ($res as $row) {
            $Song = new Song();
            $Song->setIdSong($row->ids);
            $Song->setNameSong($row->nom);
            $Song->setAlbum_name($row->album);
           
            array_push($array,$Song);
           
        }
    
        return $array;
    }
    public function InsertSong($nameSong,$idAlbum){
        
        $req="INSERT INTO song(name,album_id) VALUES (:nameSong,:idAlbum)";
        $this->db->query($req);
        $this->db->bind(':nameSong',$nameSong);
        $this->db->bind(':idAlbum',$idAlbum);
        $this->db->execute();
        
    }
    public function DeleteSong($idSong){
        $req="DELETE FROM `song` WHERE id=:id";
        $this->db->query($req);
        $this->db->bind(':id',$idSong);
        $this->db->execute();
    }
}

?>