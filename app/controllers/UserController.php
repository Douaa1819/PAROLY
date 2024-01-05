<?php



class UserController extends Controller {
    private $UserModel;
    
    public function __construct(){
        $this->UserModel = $this->model('UserDao');
        
    }

    public function index(){
        $data = [
            'title' => 'Register',
        ];

        $this->view('pages/Registration/register', $data);
       $this->signup2();
       $this->login2();
    }
    public function pwdReset(){
        $data = [
            'title' => 'pwdReset',
            
            
        ];

        $this->view('pages/Registration/pwdReset', $data);
        $this->verifyUser();
        
        
    }
    public function verify(){
        $data = [
            'title' => 'verify',
        ];
        $this->view('pages/Registration/verify',$data);
    }
    public function verifyUser(){
        if(isset($_POST['verif'])){
            $email = $_POST['email']; 
            $errors = array();
            $patternEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
            if(!preg_match($patternEmail,$email)){
                array_push($errors,"Email is not valid!");
            }
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    echo '<div class="bg-red-500 rounded-xl text-white p-2 my-2">' . $error . '</div>';
               
                }

        }else{
            $result = $this->UserModel->findUserByEmail1($email);
            if($result && $result[0]->role !== 'admin'){
                // $this->UserModel->ResetPwd($email);
                // $mailer = new Send();
                // $to = $email;
                // $subject = "Password Reset";
                // $body = "your one time password is: "+ $result[0]->reset_token_hash;
                // $mailer->send($to,$subject,$body);

                header('Location: '.URLROOT.'/UserController/verify');
                exit();  

            }elseif($result && $result[0]->role == 'admin'){
                ?>
                <p class=" text-center bg-red-500 rounded-xl text-white p-2 my-2">You are not allowed!</p>
            <?php
            } else{
                ?>
                <p class=" text-center bg-red-500 rounded-xl text-white p-2 my-2">Couldn't find user matching this email!</p>
<?php
            }
        }

    }
}
    
  
    
    public function signup2(){
      
        if (isset($_POST["signup"])) {
            $fullName = $_POST["name"];
            $email = $_POST["email"];
            $role = $_POST["role"];
            $password = $_POST["password"];
            $repeat_password = $_POST["repeat-password"];
       
            $password_hash = password_hash($repeat_password, PASSWORD_DEFAULT);
            $errors = array();
            $patternEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
            $patternName = '/^[a-zA-Z\s\'.-]+$/';
            $patternPassword = '/^.{4,}$/';

            if (!preg_match($patternName, $fullName)) {
                array_push($errors, "Name is not valid.");
            }

            if (!preg_match($patternEmail, $email)) {
                array_push($errors, "Email is not valid.");
            }

            if (!preg_match($patternPassword, $password)) {
                array_push($errors, "Please use at least 4 characters");
            }

            if ($password !== $repeat_password) {
                array_push($errors, "The password does not match");
            }

            if (count($errors) > 0) {

                foreach ($errors as $error) {
                    echo '<div class="bg-red-500 rounded-xl text-white p-2 my-2">' . $error . '</div>';               
                }   

            } else {
    
                $result = $this->UserModel->signup($fullName, $email, $password_hash, $role);
        
                // Handle the result
                   

                if ($result) {
                    // Registration successful, you can redirect or display a success message
                    echo '<div class="bg-green-500 rounded-xl text-white p-2 my-2">Registration successful!</div>';
                } else {
                    // Registration failed, handle accordingly
                    echo '<div class="bg-red-500 rounded-xl text-white p-2 my-2">Registration failed. Please try again.</div>';
                }
            }
        }

        $this->view('pages/registration/register');
    }
public function login2(){
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $patternEmail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'; 
        $patternPassword = '/^.{4,}$/';
        $errors = array();

        if (!preg_match($patternEmail, $email)) {
            array_push($errors, "Email is not valid.");
        }

        if (!preg_match($patternPassword, $password)) {
            array_push($errors, "Please use at least 4 characters");
        }

        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo '<div class="bg-red-500 rounded-xl text-white p-2 my-2">' . $error . '</div>';
            }
        } else {
            // Assuming $user_DAO is an instance of the UserDAO class
            $Result = $this->UserModel->login($email);

            if ($Result &&  count($Result) > 0) {
                $user = $Result[0];
                $enteredPass = $user->getPassword();
                $role = $user->getRole();
                if ($user && password_verify($password, $enteredPass)) {
                    $this->redirectBasedOnRole($role);
                } else {
                    echo '<div class="bg-red-500 rounded-xl text-white p-2 my-2">Password incorrect</div>';
                }
            } else {
                echo '<div class="bg-red-500 rounded-xl text-white p-2 my-2">User not found</div>';
            }
        }
    }

    $this->view('pages/Registration/register');
}

private function redirectBasedOnRole($role) {
    switch ($role) {
        case 'admin':
            //  header('Location: ' . URLROOT.'/DashbordControler');
            echo '<script>window.location.replace(" '.URLROOT.'/DashbordControler");</script>';
            break;
        case 'client':
            echo '<script>window.location.replace("/DashbordControler.php");</script>';
            break;
        case 'artist':
            echo '<script>window.location.replace("/DashbordControler.php");</script>';
            break;
        default:
           
            break;
    }
}

}