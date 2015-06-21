<?php
$ss=$_COOKIE["chat"];
?>

<html>
<head>
<title>чтение чата</title>
<META HTTP-EQUIV="Refresh" CONTENT="5; URL=http://www.kolpinkurs.ru/cdt/dima/tema2/chit.php">
</head>
<body bgcolor="white">



<?php



//----------------------------------------------------------

//чтение

$file_array=file("basa.txt");//—читать файл текста в массив


$bs=$file_array;//запись файла в массив


$bs=array_reverse($bs);

//sort($bs);

//echo count($bs);
//-----------------------------------------------------------


//-----------------------------------------------------------

//цикл
for($nn=0;$nn<=count($bs);$nn=$nn+1) {

//поиск
$pos=strpos($bs[$nn],$ss[4]);//переменна€ ($pos) равна - поиск - где искать(в $bs[$nn] , и что искать($ss[4])

if ($pos>0) {echo "запрос поиска ".$ss[4]."<br>".$bs[$nn];}
if ($ss[4]=="") {echo $bs[$nn];}
}

//-----------------------------------------------------------

?>
</body>
</html>