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
}

?>