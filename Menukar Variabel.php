<?php
//Menukar kedua variabel membutuhkan variabel sementara
$a = 1;
$b = 2;

$variabel_sementara = $a;
$a = $b;
$b = $variabel_sementara;

echo "a = $a\n";
echo "b = $b\n";
?>