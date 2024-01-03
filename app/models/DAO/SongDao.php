<?php 
class SongDao{
    private $db;
    private Song $song;
    public function __construct(){
        $this->db=new Database();
        $this->song=new Song(); 
    }
    
    public function getAll(){
        $req="SELECT song.id,song.name, album.name FROM song,album WHERE song.album_id=album.id";;
        $this->db->query($req);
    }
}

?>