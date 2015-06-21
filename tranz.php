<?php

//запись в переменную браузера (в сессию)

setcookie("chat");//обозначение что будет производится запись в cookie.

setcookie("chat[1]",$_POST[fio],time()+3600);
setcookie("chat[2]",$_POST[par],time()+3600);

setcookie("chat[3]",$_POST[col],time()+3600);//выбор цвета

header("Location: http://www.kolpinkurs.ru/cdt/dima/tema2/chat.php");
exit;

?>



