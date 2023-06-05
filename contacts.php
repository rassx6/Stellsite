<?php
if (isset ($_POST['contactFF'])) {
  $to = "rass06@mail.ru"; // поменять на свой электронный адрес
  $from = $_POST['contactFF'];
  $subject = "Заполнена контактная форма с ".$_SERVER['HTTP_REFERER'];
  $message = "Имя: ".$_POST['nameFF']."\nEmail: ".$from."\nIP: ".$_SERVER['REMOTE_ADDR']."\nСообщение: ".$_POST['messageFF'];
  $boundary = md5(date('r', time()));
  $filesize = '';
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "From: " . $from . "\r\n";
  $headers .= "Reply-To: " . $from . "\r\n";
  $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
  $message="
Content-Type: multipart/mixed; boundary=\"$boundary\"

--$boundary
Content-Type: text/plain; charset=\"utf-8\"
Content-Transfer-Encoding: 7bit

?>