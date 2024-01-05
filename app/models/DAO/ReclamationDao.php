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
}
