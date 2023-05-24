<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $phoneNumber = $_POST['phoneNumber'];

  $to = 'm.rudenkov.115@gmail.com'; // Замените на вашу почту
  $subject = 'Новый номер телефона';
  $message = 'Номер телефона: ' . $phoneNumber;
  $headers = 'From: webmaster@example.com' . "\r\n" .
             'Reply-To: webmaster@example.com' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo 'Письмо успешно отправлено';
  } else {
    echo 'Ошибка при отправке письма';
  }
}
?>
