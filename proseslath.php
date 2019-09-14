<?php
if (isset($_POST['next'])) {
 	
 	$judul = $_POST['judul'];
 	$kode = $_POST['kode'];
 	$ngarang =  $_POST['ngarang'];
 	$buku = $_POST['buku'];
 	$harga = $_POST['harga'];
 	foreach ($judul as $data => $x) {
 		echo "Judul Buku : " . $judul[$data]. "<br>";
 		echo " Kode Buku: " . $kode[$data]. "<br>";
 		echo " Pengarang: " . $ngarang[$data]. "<br>";
 		echo " Jenis  Buku: " . $buku[$data]. "<br>";
 		echo " Harga  Buku: " . $harga[$data]. "<hr>";
 	}
 } 
 // jumlah pembayaran
 // echo "<prev>";
 // for ($i=0; $i <count($harga) ; $i++) {
 // 	$hsl = $harga[$i]+$hsl;
 // }
 // echo "total Pembayaran : $hsl";
 // echo "<br>";
	// 