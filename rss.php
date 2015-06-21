


<?php
//проверка вывода данных из cookie
//------------------------

$ss=$_COOKIE["chat"];

?>


<html>
 <head>
  <title>проверочная стр.</title>
 </head>
      <body>



<?php

echo "Зарегестрирован: ".$ss[1].$ss[3]."<br>";
echo "Ваш пароль:  ".$ss[2]."<br>";

?>


     </body>
 </html>
