<?php

//������ � ���������� �������� (� ������)

setcookie("chat");//����������� ��� ����� ������������ ������ � cookie.

setcookie("chat[1]",$_POST[fio],time()+3600);
setcookie("chat[2]",$_POST[par],time()+3600);

setcookie("chat[3]",$_POST[col],time()+3600);//����� �����

header("Location: http://www.kolpinkurs.ru/cdt/dima/tema2/chat.php");
exit;

?>



