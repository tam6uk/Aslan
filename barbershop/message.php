<?php
$to = "test@yandex.ru ";
$phone = $_POST['phone'];
$email = $_POST['email'];
// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: info@starlight.space" . "\r\n";
$headers .= "Reply-To: info@starlight.space".  "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body>";
$msg .= "<h2>Новое сообщение</h2>\r\n";
if (isset($phone)){
	$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
}

if (isset($email)){
	$msg .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
}


$msg .= "</body></html>";
// отправка сообщения
@mail($to, $subject, $msg, $headers);
?>