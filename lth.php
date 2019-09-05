<?php
$array = array ('Judul <br>');
$aso = [
[
	'Judul' => '<h2>Belajar PHP & MySQL untuk pemula',
	'Penulis' => '<h4>Admin SMK',
],
[
	'Judul' => '<h2>Tutorial PHP dari Nol hingga Mahi',
	'Penulis' => '<h4>Admin SMK',
],
[
	'Judul' => '<h2>Membuat Aplikasi Web dengan PHP',
	'Penulis' => '<h4>Admin SMK',
],
];
foreach ($aso as $value) {
	echo "Judul :" . $array[$aso] . "<br>";
	echo $value["Judul"] . "<br>";
	echo $value["Penulis"] . "<br>";
	echo '<hr>';
}

?>