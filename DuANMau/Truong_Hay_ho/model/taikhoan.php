<?php
session_start();
 function insert_taikhoan($email,$user,$pass){
     $sql = "INSERT INTO taikhoan(user,pass,email)values ('$user','$pass','$email')";
     pdo_execute($sql);
 }
 function dangnhap($user , $pass){
     $sql ="select * from taikhoan where user='$user' and pass='$pass'";
     $taikhoan = pdo_query_one($sql);
//     var_dump($sql);
        if ($taikhoan != false){
            //
            $_SESSION['user'] = $user;
            $_SESSION['idkh']=$taikhoan['id'];
            return $taikhoan= true;
        }
 }
 function check_role($user,$pass){
     $sql ="select * from taikhoan where user='$user' and pass='$pass'";
     $taikhoan = pdo_query_one($sql);
     if ($taikhoan != false) {
         extract($taikhoan);
         return $role;
     }else{
         return 0;
     }


 }
 function dangxuat(){
     if (isset($_SESSION['user'])){
         unset($_SESSION['user']);
         unset($_SESSION['idkh']);
     }
 }
 function sendMail($email){
     $sql="select * from taikhoan where email='$email'";
     $taikhoan = pdo_query_one($sql);
     if ($taikhoan != false){
         sendMailPass($email,$taikhoan['user'],$taikhoan['pass']);
        return "email thanh cong";
     }else{
        return"email bạn không tồn tại";
     }
 }
 function sendMailPass($email,$user,$pass){
     require 'PHPMailer/src/Exception.php';
     require 'PHPMailer/src/PHPMailer.php';
     require 'PHPMailer/src/SMTP.php';

     $mail = new PHPMailer\PHPMailer\PHPMailer(true);

     try {
         //Server settings
         $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;                      //Enable verbose debug output
         $mail->isSMTP();                                            //Send using SMTP
         $mail->Host = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
         $mail->SMTPAuth = true;                                   //Enable SMTP authentication
         $mail->Username = 'd781e96aa6bcdd';                     //SMTP username
         $mail->Password = '8767adfceb9cff';                               //SMTP password
         $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
         $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

         //Recipients
         $mail->setFrom('from@example.com', 'Truonghayho');
         $mail->addAddress('$email', 'Joe User');     //Add a recipient


         //Content
         $mail->isHTML(true);                                  //Set email format to HTML
         $mail->Subject = 'Người DÙng Quên Mật Khẩu';
         $mail->Body = 'Mật Khẩu Của Bạn Là'.$pass;

         $mail->send();
         echo 'Message has been sent';
     } catch (Exception $e) {
         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     }
 }