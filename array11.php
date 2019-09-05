<?php
$transfort = array('foot','bike','car','plane');
echo "<pre>";
print_r($transfort);
echo "</pre>";

$mode = current($transfort);
echo $mode. "<br>"; // $mode = 'foot';
$mode = next($transfort);
echo $mode. "<br>"; // $mode = 'bike';
$mode = current($transfort);
echo $mode. "<br>"; // $mode = 'bike';
$mode = prev($transfort);
echo $mode. "<br>"; // $mode = 'foot';
$mode = end($transfort);
echo $mode. "<br>"; // $mode = 'plane';
$mode = current($transfort);
echo $mode. "<br>"; // $mode = 'plane';
?>