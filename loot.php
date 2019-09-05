<?php
$loot=20;
$num=1;

for ($i=0; $i <= $loot ; $i++) {
	if ($i == 1) {
		echo "aku data ke- ". $num++. "dan mendpatkan mendali emas<br>";
	}elseif ($i == 2) {
		echo "aku data ke- ". $num++. "dan mendpatkan mendali perak<br>";
	}elseif ($i == 3) {
		echo "aku data ke- ". $num++. "dan mendpatkan mendali perunggu<br>";
	}elseif ($i >= 4 && $i <= 6) {
		echo "aku data ke- ". $num++. "dan mendpatkan laptop<br>";
	}elseif ($i >= 7 && $i <= 9) {
		echo "aku data ke- ". $num++. "dan mendpatkan karung<br>";
	}elseif ($i >= 10) {
		echo "aku data ke- ". $num++. "dan tidak mendpatkan apapaun <br>";
	}
}