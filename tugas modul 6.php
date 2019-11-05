<?php

function hitungluaspersegipanjang($panjang, $lebar)
{
$luas = $panjang * $lebar;
return $luas;
}
$x = 5 ;
$y = 10;

$luas=hitungluaspersegipanjang($x,$y);
echo $luas;
?>