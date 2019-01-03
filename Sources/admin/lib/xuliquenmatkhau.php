<?php
require('checklogin.php');
require('database.php');
$db=new Database;
include("../email/src/PHPMailer.php");
include("../email/src/Exception.php");
include("../email/src/OAuth.php");
include("../email/src/POP3.php");
include("../email/src/SMTP.php");
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['email'],$_POST['sdt']))
{
$email=$_POST['email'];
$sdt=$_POST['sdt'];
$sql="select * from taikhoan where email='$email' and sdt='$sdt'";
$kq=$db->exec_sql($sql);
if(count($kq)>0)
{
    $mknew=rand();
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings                                // Enable verbose debug output
    $mail->isSMTP();                              // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'xuanhung2605@gmail.com';                 // SMTP username
    $mail->Password = 'anhhung10a1';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->CharSet ='UTF-8'; 
    $mail->setFrom('xuanhung2605@gmail.com', 'Lấy Lại Mật Khẩu HT Shop');
    $mail->addAddress($email);     // Add a recipient              // Name is optiona
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Lấy Lại Mật Khẩu ';
    $mail->Body    = 'Mật Khẩu Hiện tại của bạn là:<b>'.$mknew.'</b>';
    $mail->AltBody = '';
    $mail->send();
    $mknew=md5($mknew);
    $sql2="update taikhoan set matkhau='$mknew' where email='$email' and sdt='$sdt'";
    $db->exec_sql($sql2);
    $_SESSION['updateoke']="true";
   header("Location:../view/index.php");
} catch (Exception $e) {
    echo( ' <h3> <u>Có Lỗi Xảy ra Vui Lòng Thử Lại!!!</u></h3>');
}
}
else
{
    echo( ' <h3> <u>Email Hoặc Số Điện Thoại Không Chính Xác Vui Lòng Thử Lại!!!</u></h3>');
}
}
?>