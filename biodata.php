<html>
<head>
	<title>pengolahan FORM</title>
<html>  
<head><title>Pengolahan Form</title></head>  
<body>   
	<FORM ACTION="" METHOD="POST" NAME="input">   
	Nama : <input type="text" name="nama"><br>
	kelas : <input type="text" name="kelas"><br>
	alamat : <input type="text" name="alamat"><br>
	hobi : <input type="text" name="hobi"><br>    
	<input type="submit" name="Input" value="Input">   
</FORM> 
</body> 
</html> 
 
<?php 
if (isset($_POST['Input'])) {
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $alamat = $_POST['alamat'];
  $hobi = $_POST['hobi'];  
  echo "Nama : <b>$nama</b><br>";
  echo "kelas : <b>$kelas</b><br>";
  echo "alamat : <b>$alamat</b><br>";
  echo "hobi : <b>$hobi</b><br>"; 
} 
?> 