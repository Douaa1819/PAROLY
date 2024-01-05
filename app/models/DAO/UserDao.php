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
    public function ResetPwd($email){
        $token = bin2hex(random_bytes(16));
        $token_hash = hash("sha256",$token);
        $expiry = date("Y-m-d H:i:s",time() + 60 * 30);
        try {
            $this->db->query("UPDATE users SET reset_token_hash = :token,reset_token_expire_at = :expiry WHERE email = :email");
            $this->db->bind(":token", $token_hash);
            $this->db->bind(":expiry", $expiry);
            $this->db->bind(":email", $email);
            $this->db->execute();
            return true;
        } catch (PDOException $e) {
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
    public function findUserByEmail1($email) {
        try {
            $this->db->query("SELECT * FROM users WHERE email = :email");
            $this->db->bind(":email", $email);
            $this->db->execute();
           $result =  $this->db->fetchAll(PDO::FETCH_ASSOC);
            
            if (count($result) > 0) {
                return $result;
            }
            
            
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
                        $dataArray = get_object_vars($data);
                        $user[] = new User(
                            $dataArray['user_id'],
                             $dataArray['username'],
                            $dataArray['email'],
                            $dataArray['password'],
                            $dataArray['role'],
                            $dataArray['image']
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