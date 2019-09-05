<?php
function cetak_ganjil ($awal, $akhir) {
	for ($i=0; $i<100; $i++) { 
		if ($i%2 == 1) {
			echo "$i";
		}
	}
}
//pemanggilan fungsi
$a = 10;
$b = 50;
echo "<b>Bilangan ganjil dari $a sampai $b : </b><b>";
cetak_ganjil($a,$b);
?>