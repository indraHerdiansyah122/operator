<html>
<head>
	<title>Form Penggajian</title>
</head>
<body>
	<FORM ACTION="prosesgaji.php" METHOD="POST" NAME="input">	
	<table>
		<center><h2>Form Penggajian</h2></center>
<tr>
	<td>Nama </td>
	<td><input type="text" name="nama"></td><br>
</tr>
<tr>
	<td>NIP  </td>
	<td><input type="number" name="nip"></td><br>
</tr>
<tr>
	<td>JenisKelamin </td>
	<td><input type="radio" name="kelamin" value="Laki-Laki" checked>Laki-Laki
	     <input type="radio" name="kelamin" value="Perempuan" checked>Perempuan</td><br>
	 </tr>
	 <tr>
	<td>Alamat </td>
	<td><textarea name="alamat" cols="20" rows="1"></textarea></td><br>
</tr>
<tr>
	<td>Status  </td>
	<td><select name="status">
	       <option value="menikah">Menikah</option>     
		   <option value="belum menikah">Belum Menikah</option>     
		   </select></td><br>
</tr>
<tr>
	<td>Jabatan  </td>
	<td><select name="jabatan">
	         <option value="hrd">HRD</option>     
		     <option value="manager">Manager</option>
		     <option value="staff">Staff</option>
		     <option value="karyawan">Karyawan</option>     
		   </select></td><br>
</tr>
<tr>
	<td>Potongan </td>
	<td>
		<input type="checkbox" name="bpjs" value="bpjs">bpjs
		<input type="checkbox" name="koprasi" value="koprasi">koprasi
		<input type="checkbox" name="jamsostek" value="jamsostek">jamsostek
	</td>
</tr> 
<tr>
    <td>Golongan </td>
    <td><select name="golongan">
	         <option value="a1">A1</option>     
		     <option value="a2">A2</option>
		     <option value="a3">A3</option>     
		   </select></td><br>
</tr>
</table>
<input type="submit" name="pilih" value="Input Data">


</body>
</html>