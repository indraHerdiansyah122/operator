<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<FORM ACTION="tugass.php" METHOD="POST" NAME="input">
	<center><h2>Biodata</h2></center>
	Nama <input type="text" name="nama"><br>

	NIS <input type="text" name="nis"><br>

	Alamat <textarea name="saran" cols="20" rows="1"></textarea><br>

	JenisKelamin<input type="radio" name="Kelamin" value="Laki-Laki" checked>Laki-Laki
	<input type="radio" name="Kelamin" value="Perempuan" checked>Perempuan<br>

	Agama <select name="Agama">
	        <option value="islam">islam</option>     
			<option value="kristen">kristen</option>     
			<option value="budha">budha</option><br>
		</select><br>

	Asal sekolah <input type="text" name="asal"><br>

	Nama orang Tua <input type="text" name="ortu"><br>

	Mata Pelajaran Yang di Sukai---:<input type="checkbox" name="Matematika" value="Matematika" checked> Matematika
		    <input type="checkbox" name="Ilmu pengetahuan Alam" value="Ilmu Pengetahuan Alam" checked>Ilmu Pengetahuan Alam
		    <input type="checkbox" name="Ilmu pengetahuan Sosial" value="Ilmu pengetahuan Sosial" checked> Ilmu pengetahuan Sosial<br>
		    <input type="checkbox" name="Pendidikan Agama Islam" value="Pendidikan Agama Islam" checked> Pendidikan Agama Islam
		    <input type="checkbox" name="Matematika" value="Matematika" checked> Matematika<br>

	Total Nilai Ijazah SMK:<input type="text" name="Nilai"><br>

	Email<input type="email" name="email"><br>
		    <input type="submit" name="input" value="Input Data">
</body>
