<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
    require APPROOT.'/PHPMailer-master/src/Exception.php';
        
    require APPROOT.'/PHPMailer-master/src/PHPMailer.php';
    require APPROOT.'/PHPMailer-master/src/SMTP.php';
     
  
class PHPMailerDao {

    public function sendEmail($to, $subject,$body) {
    
        
      
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        // SMTP Configuration (Update with your SMTP settings)
         //Server settings
    $mail->isSMTP();                              //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';       //Set the SMTP server to send through 
    $mail->SMTPAuth   = true;             //Enable SMTP authentication (active)
    $mail->Username   = 'misstreanouar@gmail.com';   //SMTP write your email
    $mail->Password   = 'bbnqfpkmbmcumsso';      //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit SSL encryption securite
    $mail->Port       = 465;  
    // $mail->setFrom( $_POST["email"], $_POST["name"]); // Sender Email and name
    // $mail->addAddress('hagiro2883@visignal.com');     //Add a recipient email  
    // $mail->addReplyTo($_POST["email"], $_POST["name"]); // reply to sender email
 
    //Content
//convertur vue so form  page 
    $mail->isHTML(true);               //Set email format to HTM
        $mail->setFrom($to, 'PARLY');
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        // Send email
        if ($mail->send()) {
            return true;
        } else {
            return false;
        }
    }
}
?>