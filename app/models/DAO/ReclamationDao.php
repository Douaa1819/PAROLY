<?php
require_once(APPROOT . '/models/Reclamation.php');

class ReclamationDao
{
  private $db;
  private Reclamation $reclamation;

  public function __construct()
  {
    $this->db = new Database();
    $this->reclamation = new Reclamation();
  }


  public function InsertReclamation($lyrics_id, $type_reclamation, $user_id)
  {
    $req = "INSERT INTO reclamation(lyrics_id, type_reclamation, user_id) VALUES (:lyrics_id, :type_reclamation, :user_id)";
    $this->db->query($req);
    $this->db->bind(":lyrics_id", $lyrics_id);
    $this->db->bind(":type_reclamation", $type_reclamation);
    $this->db->bind(":user_id", $user_id);
    $this->db->execute();
  }
 
  public function getAllreclam()
  {
    $req = "SELECT * FROM `reclamation`,lyrics where reclamation.lyrics_id=lyrics.id";
    $this->db->query($req);
    $res = $this->db->fetchALL();
    // var_dump($res);
    $reclamation = array();
    foreach ($res as $row) {
        $reclam = new Reclamation();
        $reclam->setId($row->id);
        $reclam->setTypeReclamation($row->type_reclamation);
        $reclam->setUserId($row->user_id);
        array_push($reclamation, $reclam);
    }
    
   
    return $reclamation;
 
   
   
  }
}