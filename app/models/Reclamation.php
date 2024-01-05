<?php
class Reclamation
{
  private $id;
  private $user_id;
  private $type_reclamation;
  private $lyrics_id;

  public function __construct()
  {
  }


  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  public function getUserId()
  {
    return $this->user_id;
  }
  public function setUserId($user_id)
  {
    $this->user_id = $user_id;
  }


  public function getTypeReclamation()
  {
    return $this->type_reclamation;
  }
  public function setTypeReclamation($type_reclamation)
  {
    $this->type_reclamation = $type_reclamation;
  }

  public function getLyricsId()
  {
    return $this->lyrics_id;
  }
  public function setLyricsId($lyrics_id)
  {
    $this->lyrics_id = $lyrics_id;
  }
}
