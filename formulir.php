<?php
$bilangan = $_POST['bilangan'];
$pangkat = $_POST['pangkat'];
$hasil = pow ($bilangan, $pangkat);
?>

<html>
<head>
	<title>pangkat</title>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td>input bilangan</td>
				<td></td>
				<td><input name="bilangan" type="text" value="<?php echo $bilangan; ?>"/></td>
			</tr>
			<tr>
				<td>pangkat</td>
				<td></td>
				<td><input name="pangkat" type="text" value="<?php echo $pangkat; ?>"/></td>
			</tr>
			<tr>
				<td><input name="submit" type="submit" value="submit"/></td>
			</tr>
			<tr>
				<td>
					<?php
					if (isset ($bilangan))
						echo $hasil;
					?>					
				</td>
			</tr>
		</table>
     </body>
</html>