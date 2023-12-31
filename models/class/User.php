<?php
    require_once("../config/config.php");
    require_once("../models/DAO/userDAO.php");

    $dbconn = new Database();
    class userDAO{
        private $db;
        function __construct($DB_con) {
            $this->db = $DB_con;
        }

        public function signup($name, $email, $pass, $role){
            try{
            $stmt = $this->db->prepare("INSERT INTO users (`username`, `email`, `password`, `role`)
            VALUES (:name, :email, :password, :role)");
            
            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":password", $pass, PDO::PARAM_STR);
            $stmt->bindParam(":role", $role, PDO::PARAM_STR);

            $stmt->execute();
            return true;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function findUserByEmail($email) {
            try {
                $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
                $stmt->bindParam(":email", $email);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
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
                    $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email ");
                    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
                    $stmt->execute();
                    $userData = $stmt->fetchAll(PDO::FETCH_ASSOC);  
                    if (count($userData) > 0) {
                        $user = array();
                        foreach ($userData as $data) {
                            $user[] = new User(
                                $data['email'],
                                $data['password'],
                                $data['role'],
                                $data['image']
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
    }