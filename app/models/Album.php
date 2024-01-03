<?php 
class Album{
    private $id;
    private $name;
    private $image;
    private $genre_name;
    private $genre_id;
    public function __construct() {}
    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of genre_name
     */ 
    public function getGenre_name()
    {
        return $this->genre_name;
    }

    /**
     * Set the value of genre_name
     *
     * @return  self
     */ 
    public function setGenre_name($genre_name)
    {
        $this->genre_name = $genre_name;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of genre_id
     */ 
    public function getGenre_id()
    {
        return $this->genre_id;
    }

    /**
     * Set the value of genre_id
     *
     * @return  self
     */ 
    public function setGenre_id($genre_id)
    {
        $this->genre_id = $genre_id;

        return $this;
    }
}




?>