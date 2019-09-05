<?php
$array = array ('saya <br>',3 );
$aso = [
[
	'barang' => 'buku tulis',
	'harga' => '4000',
	'berat' => '100 gram',
],
];
foreach ($aso as $value) {
	echo $value["barang"] . "<br>";
	echo $value["harga"] . "<br>";
	echo $value["berat"] . "<br>";
}
?>