<?php
require_once(__DIR__ . '/../User.php');

class UserDao {
    private $db;
    private User $user;

    public function __construct() {
        $this->db = new Database();
        $this->user = new User();
    }

    public function signup($name, $email, $pass, $role){
        try{
       $this->db->query("INSERT INTO users (`username`, `email`, `password`, `role`)
        VALUES (:name, :email, :password, :role)");
    
        $this->db->bind(":name", $name);
        $this->db->bind(":email", $email);
        $this->db->bind(":password", $pass);
        $this->db->bind(":role", $role);
        $this->db->execute();
        return true;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function findUserByEmail($email) {
        try {
            $this->db->query("SELECT * FROM users WHERE email = :email");
            $this->db->bind(":email", $email);
            $this->db->execute();
           $result =  $this->db->fetchAll(PDO::FETCH_ASSOC);
            
            if (count($result) > 0) {
                return true;
            }
            
            return false;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    
    

    public function login($email){
        try {
            if ($this->findUserByEmail($email)) {
                $this->db->query("SELECT * FROM users WHERE email = :email");
                $this->db->bind(":email", $email);
                $this->db->execute();
                $userData = $this->db->fetchAll(PDO::FETCH_ASSOC);  
             
                if (count($userData) > 0) {
                    $user = array();
                    foreach ($userData as $data) {
                        $user[] = new User(
                            $data->user_id,
                            $data->username,
                            $data->email,
                            $data->password,
                            $data->role,
                            $data->image
                        );
                    }
          
                
                    return $user;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function getUser(){
        return $this->user;
    }
}