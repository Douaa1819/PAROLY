<?php
require_once(__DIR__ . '/../User.php');

class UserDao
{
    private $db;
    private User $user;

    public function __construct()
    {
        $this->db = new Database();
        $this->user = new User();
    }

    public function signup($name, $email, $pass, $role)
    {
        try {
            $this->db->query("INSERT INTO users (`username`, `email`, `password`, `role`)
        VALUES (:name, :email, :password, :role)");

            $this->db->bind(":name", $name);
            $this->db->bind(":email", $email);
            $this->db->bind(":password", $pass);
            $this->db->bind(":role", $role);
            $this->db->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function findUserByEmail($email)
    {
        try {
            $this->db->query("SELECT * FROM users WHERE email = :email");
            $this->db->bind(":email", $email);
            $this->db->execute();
            $result = $this->db->fetchAll(PDO::FETCH_ASSOC);

            if (count($result) > 0) {
                return true;
            }

            return false;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }



    public function login($email)
    {
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
    public function getClient()
    {
        $req = "SELECT `user_id`, `username`, `email`, `image` FROM `users` WHERE role='client'";
        $this->db->query($req);
        $res = $this->db->fetchALL();
        $users = array();

        foreach ($res as $row) {
            $user = new User();
            $user->setUser_id($row->user_id);
            $user->setUsername($row->username);
            $user->setEmail($row->email);
            $user->setImg($row->image);

            array_push($users, $user);
        }




        return $users;
    }

    public function getUser()
    {
        return $this->user;
    }

    function affiche_Statistiques($tableName)
    {
        try {
            $req = "SELECT COUNT(*) AS count FROM $tableName";
            $this->db->query($req);
            $result = $this->db->single();

            return $result->count;
        } catch (Exception $e) {

            error_log("Error in Admin affiche_Statistiques: " . $e->getMessage());
            return false;
        }
    }

}