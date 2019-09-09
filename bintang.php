<html>
<head>
	<title></title>
	<FORM ACTION="" METHOD="POST">
		Masukan Bilangan : <input type="number" name="bintang"><br>
		<input type="submit" name="Input" value="Klik"><br>
</head>
<body>

</body>
</html>

<?php 
if (isset($_POST['Input'])) {
  $bintang = $_POST['bintang'];
    for ($a=0; $a < $bintang ; $a++) {
    	echo "*";

    }
    echo "<br>";  
    echo "Total Bintang = $bintang<hr>";
} 
?>

<?php 
if (isset($_POST['Input'])) {
  $bintang = $_POST['bintang'];
    for ($a=0; $a <= $bintang ; $a++) {
         for ($b=0; $b < $a ; $b++) { 
      echo "*";
   } 
      echo "<br>";

    }
    echo "<br>";  
    echo "Total Bintang = $bintang<hr>"; 
} 
?>

<?php 
if (isset($_POST['Input'])) {
  $bintang = $_POST['bintang'];

  $size = 5;
    for($h=1; $h <= $bintang ; $h++){
    for($j=1; $j <= $bintang-$h ; $j++){ 
      echo "*&nbsp;&nbsp;";
    }
    for ($k=1; $k <= $h ; $k++) { 
      echo "*&nbsp;&nbsp;";
    } 
      echo "<br/>";

    }
    echo "<br>";  
    echo "Total Bintang = $bintang<hr>"; 
} 
?>

<?php 
if (isset($_POST['Input'])) {
  $bintang = $_POST['bintang'];
    for($i=1; $i <= $bintang ; $i++){
        for($a=1; $a <= $i ; $a++){ 
           echo "*&nbsp";
    }
    for ($b=$bintang; $b >= $i ; $b--) { 
           echo "*";
    } 
      echo "<br/>";

    }
    echo "<br>";  
    echo "Total Bintang = $bintang<hr>"; 
} 
?>   