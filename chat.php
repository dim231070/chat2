<?php

setcookie("chat");//����������� ��� ����� ������������ ������ � �����

setcookie("chat[4]",$_POST[poisk],time()+3600);

$ss=$_COOKIE["chat"];

?>



<html>
 <head>
  <title>�������� ���������</title>

 </head>
<body background="321.jpg">

<center>
<b><font face="Verdana, Arial, Helvetica, sans-serif" size="4"><a href="glav.htm">�������</a></font></b><br>
<br>
<b><font face="Verdana, Arial, Helvetica, sans-serif" size="3"><a href="poisk.htm">����� �� ����</a></font></b><br>
<br>
<b><font face="Verdana, Arial, Helvetica, sans-serif" size="3"><a href="tranz2.php">��������� � �������� ���</a></font></b>
</center>
<br>


<?php

//������ �� ���������� ��������(�� ������)
//echo "���������������: ".$ss[1]."<br>";
//echo "��� ������:  ".$ss[2]."<br>";
echo "<center>��� ����: ".$ss[3]."</center>";



//�������� ������

if ($ss[2]<>"dima") {echo"<center>�������� ������, �������� ��������� �����������</center><br>";
echo"<center><a href=http://www.kolpinkurs.ru/cdt/dima/tema2/reg.html>�����������</a></center>";exit;}

//------------------------------------------------


//�������� �����----------------------------------

if ($ss[1]=="") {echo"<center>�� �� ����� ���� nick, ���������� �����</center><br>";
echo"<center><a href=http://www.kolpinkurs.ru/cdt/dima/tema2/reg.html>�����������</a></center>";exit;}

//------------------------------------------------


//������� ����------------------------------------

if ($_POST[soob]=="delete") {$f=fopen("basa.txt","w");
ftruncate($f,0);
fclose($f);}

//------------------------------------------------





//�����--------------------------------------------

$today=getdate();
$hours=$today['hours'];
$minutes=$today['minutes'];
$seconds=$today['seconds'];
$vr=$today['hours'].":".$today['minutes'].":".$today['seconds'].".";

//------------------------------------------------




//������ ����� � ������ � ���������------------------------------

$nam=$ss[1];// ���������� ��� �� ������ ($ss[1]) � ���������� ($nam)
$zap=$_POST[soob];// ������ ����� ��������� ��������� ���������� ($zap)

//------------------------------------------------




//������� ��� ����� �����.------------------------

if ($ss[3]=="������") {$nam="<font color=green>".$nam."</font>";}

   // ($ss[3])-����. �������. ���� ���� ������
   //������, �� ���($nam) ����� ����� ������� �����. ���� ����� � ������� �������.
  
if ($ss[3]=="�������") {$nam="<font color=red>".$nam."</font>";}
if ($ss[3]=="�����") {$nam="<font color=blue>".$nam."</font>";}
if ($ss[3]=="������") {$nam="<font color=black>".$nam."</font>";}

//------------------------------------------------




//������� ��� ������ ������-----------------------

if($nam<>"") {if ($zap<>"") {$zap=$nam."<br>".$zap."<br>".$vr."<br><hr>"."\n";

   //���� ��� �� ����� �������� � ����� ��������� �� ����� ��������, ��
   //� ���������� ($zap) ������������ ���, ������� ������, ����� ���������, ������� ������, �����,
   //������� ������, �������������� �����.

//------------------------------------------------




//������ ������ � ����----------------------------

$filename="basa.txt";

$a="<br> ";
$com=$zap;
if(is_writable($filename)) {
if(!$handle=fopen($filename,"a")) {echo "������"; exit;}
if(fwrite($handle,$com)===FALSE) {echo "������2"; exit;}
fclose ($handle);}
else {echo "������3";}
}}

?>


<center>
  <b><br>
  </b>
<b>
<form name="test" method="post" action="chat.php">
 

     
 <b><font face="Verdana, Arial, Helvetica, sans-serif" size="4">������� 
          ���������: </font></b><br>
<br>
      
      
          <textarea name="soob" cols="75" rows="1"></textarea><br>
<br>
        
          <input type="submit" value="���������" name="submit">
          <input type="reset" value="��������" name="reset">
        
</center>

    <br>



</form>
</b>
<center>
<iframe src="chit.php" align="center" width="600" height="600" align="left">
</center>
</body>
</html>
