<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['lname'])) {$phone = $_POST['lname'];}
if (isset($_POST['fname'])) {$name = $_POST['fname'];}
if (isset($_POST['birthday'])) {$phone = $_POST['birthday'];}
/* Сюда впишите свою эл. почту */
$myaddres  = "natalyamartinchik@mail.ru"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: плечевая анкета\nТелефон: $phone\nИмя: $name";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Плечевая анкета'; //сабж
$email='ЕКСТО'; // от кого
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<h1>Спасибо!</h1>
</body>
</html>