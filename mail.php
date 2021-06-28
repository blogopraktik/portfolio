<?php
/*
Template Name: mail
*/
?>
<noindex><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language="javascript">
<!-- Old browser shield
window.location.href="https://mlife.com.ua/portfolio/thank.html";
// -->
</script>
 <?php
$to = "mlifestudio@gmail.com"; // емайл получателя данных из формы
$tema = "Письмо с лэндинга"; // тема полученного емайла
$message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?></noindex>