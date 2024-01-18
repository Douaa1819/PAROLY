<?php 
// require_once(__DIR__ . '/../Genre.php');
require_once(APPROOT . '/models/Genre.php');
class GenreDao{
 
    private $db;
    private Genre $genre;
    public function __construct(){
        $this->db=new Database();
        $this->genre = new Genre();
    }
    
    public function InsertGenre($name) {
        $req = "INSERT INTO genre(nom) VALUES (:name)";
        $this->db->query($req);
        $this->db->bind(":name", $name);
        $this->db->execute();
    }
    
    public function getAll() {
        $req = "SELECT * FROM genre";
        $this->db->query($req);
        $res = $this->db->fetchAll();  
        $array = array();
        foreach ($res as $row) {
            $genre = new Genre();
            $genre->setId($row->id);
            $genre->setNom($row->nom);
           
            array_push($array,$genre);
           
        }
    
        return $array;
    }
    public function DelletGenre($id) {
        $req = "DELETE FROM `genre` WHERE id= :id";
        $this->db->query($req);
        $this->db->bind(":id", $id);
        $this->db->execute();
    }
    
    public function UpdateGenre($id, $name) {
        $req = "UPDATE genre SET nom = :name WHERE id = :id";
        $this->db->query($req);
        $this->db->bind(":id", $id);
        $this->db->bind(":name", $name); 
        $this->db->execute();
    }
    


}
    
// $n=new GenreDao();
// $r=$n->getAll();
// print_r($r);

?>