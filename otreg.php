<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <title>����� �����������</title>
 </head>
 <body background="321.jpg">
<center>
<h1><font color='red'>���� ������ ����������</font></h1><br>
<br>
<b><font face="Verdana, Arial, Helvetica, sans-serif" size="4"><a href="glav.htm">�������</a></font></b>

<?php


$mmm='���: '.$_POST['gor']."\r\n";
$mmm=$mmm.'��� �������: '. $_POST['hotgor']."\r\n";
$mmm=$mmm.'� ���� �: '.$_POST['hotstr']."\r\n";
$mmm=$mmm.'�: '.$_POST['otd']."\r\n";
$mmm=$mmm.'����: '.$_POST['lang1']."\r\n";
$mmm=$mmm.'����: '.$_POST['lang2']."\r\n";
$mmm=$mmm.'����: '.$_POST['lang3']."\r\n";
$mmm=$mmm.'����: '.$_POST['lang4']."\r\n";
$mmm=$mmm.'����: '.$_POST['lang5']."\r\n";
$mmm=$mmm.'����: '.$_POST['lang6']."\r\n";

$mmm=$mmm.'��� e-mail: '.$_POST['email1']."\r\n";
$mmm=$mmm.'��������: '.$_POST['comment']."\r\n";
mail ( 'dim100472@gmail.com', '������' , $mmm, '������������� ����' );



?> 
</center>

 </body>
</html>
