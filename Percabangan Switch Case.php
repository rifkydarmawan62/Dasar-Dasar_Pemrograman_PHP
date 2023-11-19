<?php
//Operator perbandingan dan logika tidak dapat digunakan pada percabangan switch case
//Kata kunci break digunakan untuk menghentikan blok percabangan case agar program tidak masuk ke percabangan case berikutnya

$kondisi = 0;

//Percabangan switch case menggunakan kurung kurawal
switch($kondisi){
    case 0:
        echo 'Kondisi bernilai nol' . PHP_EOL;
        break;
    default:
        echo 'Kondisi tidak bernilai nol' . PHP_EOL;
}

//Percabangan switch case menggunakan titik dua
switch($kondisi):
    case 0:
        echo 'Kondisi bernilai nol' . PHP_EOL;
        break;
    default:
        echo 'Kondisi tidak bernilai nol' . PHP_EOL;
endswitch
?>