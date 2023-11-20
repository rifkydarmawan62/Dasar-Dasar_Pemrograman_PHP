<?php
//Referensi variabel digunakan agar variabel menunjuk ke alamat memori atau nilai variabel yang sama di variabel lain

$a = 1;
$b = &$a;
echo "Nilai variabel sebelum diubah\n";
echo "a = $a\n";
echo "b = $b\n\n";

$b = 3;
echo "Nilai variabel setelah diubah\n";
echo "a = $a\n";
echo "b = $b\n\n";

# Uraikan parameter oleh nilai variabel
//Apabila kita mengubah nilai parameter di dalam fungsi, maka nilai argumen di luar fungsi tidak diubah
$c = 14;
function ubah_nilai_variabel_dengan_parameter($objek_variabel, $nilai_variabel): void{
    $objek_variabel = $nilai_variabel;
}
ubah_nilai_variabel_dengan_parameter($c, 20);
echo "Ubah nilai variabel tanpa parameter referensi\n";
echo "c = $c\n\n";

function ubah_nilai_variabel_dengan_parameter_referensi(&$objek_variabel, $nilai_variabel): void{
    $objek_variabel = $nilai_variabel;
}
ubah_nilai_variabel_dengan_parameter_referensi($c, 20);
echo "Ubah nilai variabel dengan parameter referensi\n";
echo "c = $c\n\n";
?>