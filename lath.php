<html>
<head>
	<title>Ulangan</title>
</head>
<body>
	<center>
		<p>Form Array</p>
	</center>
	<p>Ulangan</p>
	</center>
	   <fieldset>
		<legend>Form Pembelian Buku</legend>
		  <table>
			<tr>
	     <td>Nama </td>
	  <td><input type="text" name="name"></td>
   </tr>
<tr>
   <td>Alamat  </td>
	 <td><textarea name="alamat" cols="16" rows="2"></textarea></td>
   </tr>
<tr>
	<td>JenisKelamin </td>
	   <td><input type="radio" name="kelamin" value="Laki-Laki" checked>Laki-Laki
	     <input type="radio" name="kelamin" value="Perempuan" checked>Perempuan</td>
	   </tr>
	<tr>
 <td>Tanggal Beli </td>
	 <td><input type="date" name="tanggal"></td>
</tr>
   </table>
     <hr>
	<fieldset>
		<legend>Form Array</legend>
		 <form action=""method="get">
			<label for="">Masukan jumlah</label>
			 <input type="number" min="1" name="jml" required>
			   <br>
			   <br>
			 <input type="submit" name="simpan" value="simpan">
		   <hr>
		</form>
	<form action="proseslath.php" method="post">
<?php
		if (isset($_GET['simpan'])) {
			$jml = $_GET['jml'];
			for ($a=0; $a <  $jml ; $a++) {  
			echo 'Judul Buku: <br><input type="text" name="judul[]" required>
			   <br>Kode Buku: <br><input type="text" name="kode[]">
			   <br>Pengarang: <br><input type="text" name="ngarang[]" required>
			   <br>Jenis Buku: <br><select name="buku">
			   <option value="novel">Novel</option>
			   <option value="fiksi">Fiksi</option>
		       <option value="horror">Horror</option> 
		       <option value="cergam">Cergam</option>
		       <option value="komik">Komik</option></select>
		       <br>Harga Buku: <br><input type="number" name="harga[]" required>       
		       <hr>';
			  
		}
			echo '<input type="submit" name="next" value="next">
			<input type="reset" name="reset" value="reset">';
	}
?>	
      </fieldset>
    </form>
   </body>
</html>