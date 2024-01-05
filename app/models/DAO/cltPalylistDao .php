<?php 
require_once(APPROOT . '/models/cltPalylist.php');
class PalylistDao{
    private $db;
    private Palyliste $palylist;

    public function __construct(){
        $this->db=new Database();
        $this->palylist = new Palylist();
    }
    
    public function getAll() {
        $req = "SELECT p.playliste_id id,p.username nom,p.image image,u.username  user FROM playliste p, users u
        where p.user_id=u.user_id";
        $this->db->query($req);
        $res = $this->db->fetchAll();  
        $array = array();
        foreach ($res as $row) {
            $playliste = new Palylist();
            $playliste->setPlayliste_id($row->id);
            $playliste->setUsername($row->nom);
            $playliste->setImage($row->image);
            $playliste->setUser_name($row->user);
            array_push($array,$playliste);
        }
    
        return $array;
    } 

    public function DelletPlaylist($id) {
        $req = "DELETE FROM `playliste` WHERE playliste_id= :id";
        $this->db->query($req);
        $this->db->bind(":id", $id);
        $this->db->execute();
    }

    public function InsertPlaylist($nameplaliste, $image, $iduser){
        $req="INSERT INTO `playliste`(username,image,user_id) VALUES (:namePlayliste,:image,:idUser)";
        $this->db->query($req);
        $this->db->bind(":namePlayliste",$nameplaliste);
        $this->db->bind(":image",$image);
        $this->db->bind(":idUser",$iduser);
        $this->db ->execute();
        
    }
    
    
    
    
}

?>