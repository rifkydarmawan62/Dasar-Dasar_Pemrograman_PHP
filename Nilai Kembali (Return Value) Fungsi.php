<?php
//Kata kunci return digunakan untuk mengembalikan nilai pada fungsi

//Menggunakan tipe data yang wajib dikembalikan pada fungsi
function sapa_seseorang(string $nama = "semuanya!"): string{
    return "Halo $nama\n";
}
echo sapa_seseorang();
function bagikan_kedua_bilangan_bulat(int $bilangan_bulat, int $dibagi): int | float{
    return $bilangan_bulat / $dibagi;
}
echo "hasil " . bagikan_kedua_bilangan_bulat(10, dibagi : 3) . PHP_EOL;
?>