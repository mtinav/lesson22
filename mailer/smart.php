<?php 

$phone = $_POST['user_phone'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                          // Enable SMTP authentication
$mail->Username = 'westoffacross@gmail.com';       // Наш логин
$mail->Password = 'kartonka';              // Наш пароль от ящика
$mail->SMTPSecure = '587';                // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                         		// TCP port to connect to
 
$mail->setFrom('westoffacross@gmail.com', 'Mega Batka');   // От кого письмо
$mail->addAddress('valentinamaa@ya.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Новая заявка с сайта Добрый картон';
$mail->Body    = '
	Пользователь оставил свои данные <br> 
	Имя:  неизвестно <br>
	Телефон: ' . $phone . '';
$mail->AltBody = 'заявка';

if(!$mail->Send()) {
    echo 'Error';
    echo print_r($mail->ErrorInfo, true);
} else {
    echo "Завка принята "
}
?>