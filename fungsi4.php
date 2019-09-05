<?php
function tambah_string ($str) {
	$str = $str . ", jakrata";
	return $str;
}
//
$str = "universitas budi luhur";
echo "\$str = $str<br>";
echo tambah_string ($str). "<br>";
echo "\$str = $str<br>"; 
?>