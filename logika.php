<?php
//if
$gol = 6;
if ($gol >= 10){
	echo "mendali emas, dengan total cetak gol : " . $gol;
	switch ($gol) {
		case 20:
			echo "mendapatkan bonus 100jt";
			break;
	}switch ($gol) {
		case 9:
			echo "mendapatkan bonus 80jt";
			break;
	}switch ($gol) {
		case 5:
			echo "mendapatkan bonus 50jt";
			break;
	}switch ($gol) {
		default;
			echo "tidak mendapatkan hadiah";
			break;
	}
} elseif ($gol >= 8) {
	echo "mendali perak, dengan total cetak gol : " . $gol;
} elseif ($gol >= 4) {
	echo "mendali perunggu, dengan total cetak gol : " . $gol;
} elseif ($gol < 4) {
	echo "mendali ngambang, dengan total cetak gol : " . $gol;
}

?>