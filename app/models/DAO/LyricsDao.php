<?php 
  require_once(APPROOT . '/models/Lyrics.php');
class LyricsDao{
  private $db;
  private Lyrics $lyric;
  public function __construct(){
    $this->db=new Database();
    $this->lyric=new Lyrics();
  }
  public function getAll(){
    $req="SELECT lyrics.id id,lyrics.name_lyrics nom,lyrics.date date,lyrics.status statu,users.user_id clientid,users.username nom_client,users.email email,song.name Music
    FROM lyrics,users,song where lyrics.user_id=users.user_id and lyrics.id_Song=song.id and users.role='client'";
    $this->db->query($req);
   $res= $this->db->fetchALL();
    $Lyrics=array();
    foreach($res as $row){
        $lyrics=new Lyrics();
        $lyrics->setIdLyrics($row->id);
        $lyrics->setName_lyrics($row->nom);
        $lyrics->setDate($row->date);
        $lyrics->setStatus($row->statu);
        $lyrics->getClient()->setUser_id($row->clientid);
        $lyrics->getClient()->setUsername($row->nom_client);
        $lyrics->getClient()->setEmail($row->email);
        $lyrics->getSong()->setNameSong($row->Music);
        array_push($Lyrics,$lyrics);
    }
    return $Lyrics;
  }
        public function DeleteLyrics($id){
            $req="DELETE FROM `lyrics` WHERE id=:id";
            $this->db->query($req);
            $this->db->bind(":id",$id);
            $this->db->execute();
        }
}



?>