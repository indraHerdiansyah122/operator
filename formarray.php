<html>
<head>
	<title>Array</title>
</head>
<body>
	<center>
		<p>Form Array</p>
	</center>
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
	<form action="formarraypro.php" method="post">
		<?php
		if (isset($_GET['simpan'])) {
			$jml = $_GET['jml'];
			for ($a=0; $a <  $jml ; $a++) {  
				echo 'Masukan bilangan <input type="text" name="nama[]" required>
				bilangan pangkat :<input type="text" name="kelas[]"> <br><br>';
			}
			echo '<input type="submit" name="next" value="next">
			<input type="reset" name="reset" value="reset">';
		}
?>			
      </fieldset>
    </form>
   </body>
</html>