<?php

setcookie("chat");//обозначение что будет производится запись в сокет

setcookie("chat[4]",$_POST[poisk],time()+3600);

$ss=$_COOKIE["chat"];

?>



<html>
 <head>
  <title>Оставить сообщение</title>

 </head>
<body background="321.jpg">

<center>
<b><font face="Verdana, Arial, Helvetica, sans-serif" size="4"><a href="glav.htm">Главная</a></font></b><br>
<br>
<b><font face="Verdana, Arial, Helvetica, sans-serif" size="3"><a href="poisk.htm">поиск по чату</a></font></b><br>
<br>
<b><font face="Verdana, Arial, Helvetica, sans-serif" size="3"><a href="tranz2.php">Вернуться в основной чат</a></font></b>
</center>
<br>


<?php

//данные из переменной браузера(из сессии)
//echo "Зарегестрирован: ".$ss[1]."<br>";
//echo "Ваш пароль:  ".$ss[2]."<br>";
echo "<center>Ваш цвет: ".$ss[3]."</center>";



//проверка пароля

if ($ss[2]<>"dima") {echo"<center>неверный пароль, пройдите повторную авторизация</center><br>";
echo"<center><a href=http://www.kolpinkurs.ru/cdt/dima/tema2/reg.html>авторизация</a></center>";exit;}

//------------------------------------------------


//проверка имени----------------------------------

if ($ss[1]=="") {echo"<center>Вы не ввели свой nick, попробуйте снова</center><br>";
echo"<center><a href=http://www.kolpinkurs.ru/cdt/dima/tema2/reg.html>авторизация</a></center>";exit;}

//------------------------------------------------


//очистка чата------------------------------------

if ($_POST[soob]=="delete") {$f=fopen("basa.txt","w");
ftruncate($f,0);
fclose($f);}

//------------------------------------------------





//время--------------------------------------------

$today=getdate();
$hours=$today['hours'];
$minutes=$today['minutes'];
$seconds=$today['seconds'];
$vr=$today['hours'].":".$today['minutes'].":".$today['seconds'].".";

//------------------------------------------------




//запись ИМЕНИ и ТЕКСТА в переменые------------------------------

$nam=$ss[1];// записываем имя из сокета ($ss[1]) в переменную ($nam)
$zap=$_POST[soob];// теперь текст сообщения равняется переменной ($zap)

//------------------------------------------------




//условия для цвета имени.------------------------

if ($ss[3]=="зелёный") {$nam="<font color=green>".$nam."</font>";}

   // ($ss[3])-цвет. условие. если цвет выбран
   //зелёный, то ИМЯ($nam) равно Имени зелёного цвета. тоже самое с другими цветами.
  
if ($ss[3]=="красный") {$nam="<font color=red>".$nam."</font>";}
if ($ss[3]=="синий") {$nam="<font color=blue>".$nam."</font>";}
if ($ss[3]=="чёрный") {$nam="<font color=black>".$nam."</font>";}

//------------------------------------------------




//условия для вывода данных-----------------------

if($nam<>"") {if ($zap<>"") {$zap=$nam."<br>".$zap."<br>".$vr."<br><hr>"."\n";

   //если имя не равно пустышке и текст сообщения не равен пустышке, то
   //в переменную ($zap) записывается ИМЯ, перенос строки, текст сооющения, перенос строки, время,
   //перенос строки, горизонтальная линия.

//------------------------------------------------




//запись текста в файл----------------------------

$filename="basa.txt";

$a="<br> ";
$com=$zap;
if(is_writable($filename)) {
if(!$handle=fopen($filename,"a")) {echo "ошибка"; exit;}
if(fwrite($handle,$com)===FALSE) {echo "ошибка2"; exit;}
fclose ($handle);}
else {echo "ошибка3";}
}}

?>


<center>
  <b><br>
  </b>
<b>
<form name="test" method="post" action="chat.php">
 

     
 <b><font face="Verdana, Arial, Helvetica, sans-serif" size="4">Введите 
          сообщение: </font></b><br>
<br>
      
      
          <textarea name="soob" cols="75" rows="1"></textarea><br>
<br>
        
          <input type="submit" value="Отправить" name="submit">
          <input type="reset" value="Очистить" name="reset">
        
</center>

    <br>



</form>
</b>
<center>
<iframe src="chit.php" align="center" width="600" height="600" align="left">
</center>
</body>
</html>
