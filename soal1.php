<?php
$a = $array = array('volvo', 9,39);
echo "Data Nomer 0<br><li>";
echo $a[0] . "<br><li>";
echo $a[1] . "<br><li>";
echo $a[2] . "<br>";

echo "<br>";
$a = $array = array('bmw',15, 13);
echo "Data Nomer 1<br><li>";
echo $a[0] . "<br><li>";
echo $a[1] . "<br><li>";
echo $a[2] . "<br>";

echo "<br>";
$a = $array = array('saab',5, 2,'land rover', 17, 15);
echo "Data Nomer 2<br><li>";
echo $a[0] . "<br><li>";
echo $a[1] . "<br><li>";
echo $a[2] . "<br>";

echo "<br>";
echo "Data Nomer 3";
for ($i = 3; $i < count ($a); $i++) {
	echo "<li>" . $a[$i] . "<br>";
}

?>