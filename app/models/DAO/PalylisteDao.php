<?php 
require_once(APPROOT . '/models/Palyliste.php');
class PalylisteDao{
    private $db;
    private Palyliste $palyliste;
    public function __construct(){
        $this->db=new Database();
        $this->palyliste=new Palyliste();
    }
    //INSERT SESSION USER
    public function getAll() {
        $req = "SELECT p.playliste_id id,p.username nom,p.image image,u.username  user FROM playliste p, users u
        where p.user_id=u.user_id and p.user_id=1";
        $this->db->query($req);
        $res = $this->db->fetchAll();  
        $array = array();
        foreach ($res as $row) {
            $playliste = new Palyliste();
            $playliste->setPlayliste_id($row->id);
            $playliste->setUsername($row->nom);
            $playliste->setImage($row->image);
            $playliste->setUser_name($row->user);
            array_push($array,$playliste);
        }
    
        return $array;
    }
    // DELETE FROM `playliste` WHERE playliste_id=// 
    public function DelletPlayliste($id) {
        $req = "DELETE FROM `playliste` WHERE playliste_id= :id";
        $this->db->query($req);
        $this->db->bind(":id", $id);
        $this->db->execute();
    }
    // nserti
    public function InsertPlayliste($nameplaliste,$image,$iduser){
        $req="INSERT INTO `playliste`(username,image,user_id) VALUES (:namePlayliste,:image,:idUser)";
        $this->db->query($req);
        $this->db->bind(":namePlayliste",$nameplaliste);
        $this->db->bind(":image",$image);
        $this->db->bind(":idUser",$iduser);
        $this->db ->execute();
        
    }
    
    
    
    
}

?>