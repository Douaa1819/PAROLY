<?php 
require_once(__DIR__ . '/../Genre.php');
class GenreDao{
 
    private $db;
    private Genre $genre;
    public function __construct(){
        $this->db=new Database();
        $this->genre = new Genre();
    }
    
    public function InsertGenre($name){
        
        $req="INSERT INTO genre(nom) VALUES (':name')";
        $this->db->query($req);
        $this->db->bind(":name", $name);
        $this->db->execute();
        
        
    }
    public function getAll() {
        $req = "SELECT * FROM genre";
        $this->db->query($req);
        $res = $this->db->fetchAll();  
        // var_dump($res);
        $array = array();
        foreach ($res as $row) {
            $genre = new Genre();
            $genre->setId($row->id);
            $genre->setNom($row->nom);
           
            array_push($array,$genre);
           
        }
    
        return $array;
    }
    
        

    /**
     * Get the value of genre
     */ 
    // public function getGenre()
    // {
    //     return $this->genre;
    // }
}
    
// $n=new GenreDao();
// $r=$n->getAll();
// print_r($r);

?>