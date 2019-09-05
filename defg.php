<?php
$arrNilai = array ("Ajeng" => 90, "Mamat" => 70, "Ucup" => 87, "Aang" => 95, "Syahrul" => 75); 
foreach ($arrNilai as $nama => $nlai) {
	echo "<pre>";
	if ($nilai > 85)
echo "Nama $nama  = : $nilai Grade A<br>";
}elseif (nilai > 75) {
	echo "Nama $nama  : $nilai Grade B<br>";
}elseif (nilai > 65) {
	echo "Nama $nama  : $nilai Grade C<br>";
	echo "</pre>";	
}


?>