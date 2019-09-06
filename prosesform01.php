<?php 
if (isset($_POST['Input'])) {  
	$nama = $_POST['nama'];  
	$Mapel1 = $_POST['Mapel1'];  
	$Mapel2 = $_POST['Mapel2'];
	$ratarata=($Mapel1*$Mapel2)/2;
	echo "Nama : <b>$nama</b><br>";
	echo "Mapel1 : <b>$Mapel1</b><br>";
	echo "Mapel2 : <b>$Mapel2</b><br>";
	echo "ratarata : <b>$ratarata</b><br>";
	if ($ratarata>75) {   
		echo "<h2>Lulus</h2>";  
	} else {   
		echo "<h2>tidak lulus</h2>";  
	} 
}  
?>