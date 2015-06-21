<?php

//запись в переменную браузера (в сессию)

//setcookie("chat");//обозначение что будет производится запись в cookie.


setcookie("chat[4]","",time()+3600);//поиск

header("Location: http://www.kolpinkurs.ru/cdt/dima/tema2/chat.php");
exit;

?>



