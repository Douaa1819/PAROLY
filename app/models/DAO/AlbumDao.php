<?php
require_once(__DIR__ . '/../Album.php');
class AlbumDao{
    private $db;
    private Album $album;
    public function __construct(){
        $this->db=new Database();
        $this->album = new Album();
    }
    
        
    public function getAll() {
        $req = "SELECT *, a.id AS idA, g.id AS idG
        FROM album a
        JOIN genre g ON a.genre_id = g.id
        WHERE a.user_id = :id;";
        $this->db->query($req);
        $id = $_SESSION['id'];
        $this->db->bind(':id',$id);
        $res = $this->db->fetchAll();  
        $array = array();
        foreach ($res as $row) {
            $album = new Album();
            $album->setId($row->idA);
            $album->setName($row->name);
            $album->setImage($row->image);
            $album->setGenre_name($row->nom);
            $album->setGenre_id($row->idG);
           
            array_push($array,$album);
           
        }
    
        return $array;
    }
    public function getFtechOption () {
        $req = "SELECT *  FROM album";
        $this->db->query($req);
        $res = $this->db->fetchAll();  
        $array = array();
        foreach ($res as $row) {
            $album = new Album();
            $album->setId($row->id);
            $album->setName($row->name);
            
            // $album->setImage($row->image);
            // $album->setGenre_name($row->nom);
            // $album->setGenre_id($row->idG);
           
            array_push($array,$album);
           
        }
  
        return $array;
    }
 
 
    public function InsertAlbum($name, $image, $genre_name) {
        $req = "INSERT INTO album(name, image, genre_id, user_id) VALUES (:name, :image, :genre, :id) ";
        $this->db->query($req);
        $id = $_SESSION['id'];
        $this->db->bind(':id',$id);
        $this->db->bind(":name", $name);
        $this->db->bind(":image", $image); 
        $this->db->bind(":genre", $genre_name); 
        
        $res = $this->db->execute();
        return $res;
    }
    
}





?>