<?php
$ss=$_COOKIE["chat"];
?>

<html>
<head>
<title>������ ����</title>
<META HTTP-EQUIV="Refresh" CONTENT="5; URL=http://www.kolpinkurs.ru/cdt/dima/tema2/chit.php">
</head>
<body bgcolor="white">



<?php



//----------------------------------------------------------

//������

$file_array=file("basa.txt");//������� ���� ������ � ������


$bs=$file_array;//������ ����� � ������


$bs=array_reverse($bs);

//sort($bs);

//echo count($bs);
//-----------------------------------------------------------


//-----------------------------------------------------------

//����
for($nn=0;$nn<=count($bs);$nn=$nn+1) {

//�����
$pos=strpos($bs[$nn],$ss[4]);//���������� ($pos) ����� - ����� - ��� ������(� $bs[$nn] , � ��� ������($ss[4])

if ($pos>0) {echo "������ ������ ".$ss[4]."<br>".$bs[$nn];}
if ($ss[4]=="") {echo $bs[$nn];}
}

//-----------------------------------------------------------

?>
</body>
</html>