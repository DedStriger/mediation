<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['cv-name'];

$mail->isSMTP();                                      
$mail->Host = 'smtp.mail.ru';  																							
$mail->SMTPAuth = true;                              
$mail->Username = 'itmediation-site@mail.ru'; 
$mail->Password = 'P2XUQyUp1';
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465; 

$mail->setFrom('itmediation-site@mail.ru'); 
$mail->addAddress('prokuratov1999@mail.ru');     
$mail->isHTML(true);                                  

$mail->Subject = 'Заявка с сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('Location: http://prokuratovnikita.ru/');
}
?>