<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <title>Отчёт регистрации</title>
 </head>
 <body background="321.jpg">
<center>
<h1><font color='red'>Ваша заявка отправлена</font></h1><br>
<br>
<b><font face="Verdana, Arial, Helvetica, sans-serif" size="4"><a href="glav.htm">Главная</a></font></b>

<?php


$mmm='имя: '.$_POST['gor']."\r\n";
$mmm=$mmm.'Мой возраст: '. $_POST['hotgor']."\r\n";
$mmm=$mmm.'Я живу в: '.$_POST['hotstr']."\r\n";
$mmm=$mmm.'Я: '.$_POST['otd']."\r\n";
$mmm=$mmm.'Знаю: '.$_POST['lang1']."\r\n";
$mmm=$mmm.'Знаю: '.$_POST['lang2']."\r\n";
$mmm=$mmm.'Знаю: '.$_POST['lang3']."\r\n";
$mmm=$mmm.'Знаю: '.$_POST['lang4']."\r\n";
$mmm=$mmm.'Знаю: '.$_POST['lang5']."\r\n";
$mmm=$mmm.'Знаю: '.$_POST['lang6']."\r\n";

$mmm=$mmm.'Мой e-mail: '.$_POST['email1']."\r\n";
$mmm=$mmm.'Сообение: '.$_POST['comment']."\r\n";
mail ( 'dim100472@gmail.com', 'Анкета' , $mmm, 'Администрация чата' );



?> 
</center>

 </body>
</html>
