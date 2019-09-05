<?php
 $harga_jambu = 15000;
 $dus = 6;
 $harga_dus = 2000;
 $kg = 5;

 $kg_dus=$dus * $kg;
 $jml_dus=$harga_dus * $dus;
 $jml_jambu=$harga_jambu * $kg_dus;
 $jml_seluruh=$jml_jambu + $dus;
 
 echo "jumlah seluruh jambu :".$dus * $kg;
 echo "<br>harga jambu di kali (x) dengan jumlah jambu :".$harga_jambu * $kg_dus;
 echo "<br>jumlah dus dikali 2000 :".$jml_dus;
 echo "<br>jumlah seluruh jambu :".$jml_seluruh;
  ?>