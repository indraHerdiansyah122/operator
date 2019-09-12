<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<FORM ACTION="tugass.php" METHOD="POST" NAME="input">
		<table>
	<center><h2>Biodata</h2></center>
	<tr>
		<td>Nama </td>
		<td><input type="text" name="nama"></td><br>
	</tr>
	<tr>

	<td>NIS </td>
	<td><input type="text" name="nis"></td><br>
</tr>
<tr>

	<td>Alamat </td>
	<td><textarea name="saran" cols="20" rows="1"></textarea></td><br>
</tr>
<tr>

	<td>JenisKelamin </td>
	<td><input type="radio" name="Kelamin" value="Laki-Laki" checked>Laki-Laki
	<input type="radio" name="Kelamin" value="Perempuan" checked>Perempuan</td><br>
</tr>
<tr>

	<td>Agama </td>
	<td><select name="Agama">
	        <option value="islam">islam</option>     
			<option value="kristen">kristen</option>     
			<option value="budha">budha</option><br>
		</select></td><br>
	</tr>
	<tr>

	<td>Asal sekolah </td>
	<td><input type="text" name="asal"></td><br>
</tr>
<tr>

	<td>Nama orang Tua </td>
	<td><input type="text" name="ortu"></td><br>
</tr>
<tr>

	<td>Mata Pelajaran Yang di Sukai </td>
	<td><input type="checkbox" name="Matematika" value="Matematika" checked> Matematika
		    <input type="checkbox" name="Ilmu pengetahuan Alam" value="Ilmu Pengetahuan Alam" checked>Ilmu Pengetahuan Alam
		    <input type="checkbox" name="Ilmu pengetahuan Sosial" value="Ilmu pengetahuan Sosial" checked> Ilmu pengetahuan Sosial<br>
		    <input type="checkbox" name="Pendidikan Agama Islam" value="Pendidikan Agama Islam" checked> Pendidikan Agama Islam
		    <input type="checkbox" name="Matematika" value="Matematika" checked> Matematika</td><br>
		</tr>
		<tr>

	<td>Total Nilai Ijazah SMK </td>
	<td><input type="text" name="Nilai"></td><br>
</tr>
<tr>

	<td>Email </td>
	<td><input type="email" name="email"></td><br>
</tr>
		    <input type="submit" name="input" value="Input Data">
    </table>
</body>
