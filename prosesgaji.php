<?php
if (isset($_POST['pilih'])) {  
	$nama = $_POST['nama'];
	$nip = $_POST['nip'];
	$kela = $_POST['kelamin'];
	$alam = $_POST['alamat'];
	$sts = $_POST['status'];
	$jbt = $_POST['jabatan'];
	$glng = $_POST['golongan'];
	$bpjs = $_POST['bpjs'];
	$koprasi = $_POST['koprasi'];
	$jamsostek = $_POST['jamsostek'];
    echo "<pre>";
    echo "<h3 align='right'>".date("d/m/Y H:i:s")."</h3>";
	echo "Nama          : $nama<br><br>";
	echo "NIP           : $nip<br><br>";
	echo "Jenis kelamin : $kela<br><br>";
	echo "Alamat        : $alam<br><br>";
	echo "Status        : $sts<br><br>";
	echo "Jabatan       : $jbt<br><br>";
	echo "Potongan      : ";
	
	if ($glng == 'a1') {
		$gol = 2500000;
	}elseif ($glng == 'a2') {
		$gol = 200000;
	}else {
		$gol = 150000;
	}

	if ($sts == "menikah") {
		$stts = 100000;
	}else {
		$stts = 50000;
	}

	if ($jbt == "hrd") {
		$jbtn = 5000000;
	}elseif ($jbt == "manager") {
		$jbtn = 4500000;
	}elseif ($jbt == "staff") {
		$jbtn = 3000000;
	}elseif ($jbt == "karyawan") {
		$jbtn = 2500000;
	}
	if (isset($bpjs)) {
		echo "<b>".$bpjs."</b>";
		$potongan1 = 250000;
	}
	if (isset($koprasi)) {
		echo "<br>, <b>".$koprasi."</b>";
		$potongan2 = 150000;
		
	}
	if (isset($jamsostek)) {
		echo "<br>, <b>".$jamsostek."</b>";
		$potongan3 = 150000;
		

	}
	$potongan = $potongan3 + $potongan2 + $potongan1;
	echo "<br>Golongan : <b>$glng</b><br>";
	$gajikotor = ($jbtn + $gol + $stts) - $potongan;
	echo "$gajikotor   : <b>Rp. ". $gajikotor. "</b><br>";
	$pajak = $gajikotor * 2.5/100;
	$gajibersih = $gajikotor - $pajak;
	echo "pajak : <b>Rp. $pajak</b><br>";
	echo "gaji bersih : <b>$gajikotor - $pajak : Rp. $gajibersih</b><br>";
	echo "<hr>";
	echo "keterangan : <br>";
	echo "golongan : <b>$glng = Rp. $gol</b>";
	echo "<br>status : <b>$stts = Rp. $stts</b>";
	echo "<br>jabatan : <b>$jbt = Rp. $jbt</b>";
	if (isset($_POST['bpjs'])) {
		echo "<br><b>potongan : bpjs = Rp. $potongan1</b>";
	}if (isset($_POST['koperasi'])) {
		echo "<br><b>koperasi = Rp. $potongan2</b>";
	}if (isset($_POST['jamsostek'])) {
		echo "<br><b>jamsostek = Rp. $potongan3</b>";
	}
	echo "<br>";
	echo "</pre>";


} 
?>