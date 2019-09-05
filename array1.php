<?php
$a = $array = array('Ahmad' , 19, true, 3.19);
//menampilkan array satu satu
echo "Array Menggunakan echo<br>";
echo $a[0] . "<br>";
echo $a[3] . "<br>";

echo "<br>";
echo "Array Menggunakan looping for<br>";
for ($i = 0; $i < count ($a); $i++) {
	echo "Array -" . $a[$i] . "<br>";
}

echo "<br>";
echo "Array Menggunakan looping foreach<br>";
foreach ($a as $data => $value) {
	echo "Array - ". $data . "&nbsp; -> ". $value. "<br>"; 
}

?>