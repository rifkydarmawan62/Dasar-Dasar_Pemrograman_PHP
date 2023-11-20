<?php
# Built-in Function String
//Dokumentasi : https://www.php.net/manual/en/ref.strings.php

$string = "Hello World";
$string_spasi_kosong = "  Hello World  ";
$sub_string = "l";
$indeks_string = 1;
# Menghitung Panjang String
echo "Panjang string \"$string\" adalah " . strlen($string) . PHP_EOL;
# Mengindeks String
echo "Indeks $indeks_string dari string \"$string\" adalah \"" . $string[$indeks_string] . "\"\n";
# Menghitung Jumlah Kata
echo "Jumlah kata dari string \"$string\" adalah " . str_word_count($string) . "\n";
print_r(str_word_count($string, 1));
var_dump(str_word_count($string, 1));
# Menghitung Jumlah Substring
echo "Jumlah substring \"$sub_string\" dari string \"$string\" adalah " . substr_count($string, $sub_string) . "\n";
# Menghapus string spasi kosong (whitespace) pada awal dan akhir string
echo "String \"$string_spasi_kosong\" setelah spasi kosong awal dan akhir di hapus menjadi \"" . trim($string_spasi_kosong) . "\"\n";
# Menghapus string spasi kosong pada awal string
echo "String \"$string_spasi_kosong\" setelah spasi kosong awal di hapus menjadi \"" . ltrim($string_spasi_kosong) . "\"\n";
# Menghapus string spasi kosong pada akhir string
echo "String \"$string_spasi_kosong\" setelah spasi kosong akhir di hapus menjadi \"" . rtrim($string_spasi_kosong) . "\"\n";

$string_huruf_kecil = "hello world";
$string_huruf_besar = "HELLO WORLD";
# Mengubah string menjadi huruf kecil
echo "String huruf besar \"$string_huruf_besar\" menjadi string huruf kecil \"" . strtolower($string_huruf_besar) . "\"\n";
# Mengubah string menjadi huruf besar
echo "String huruf kecil \"$string_huruf_kecil\" menjadi string huruf besar \"" . strtoupper($string_huruf_kecil) . "\"\n";
# Mengubah huruf pertama string menjadi huruf kecil
echo "String \"$string_huruf_besar\" menjadi string huruf pertama kecil \"" . lcfirst($string_huruf_besar) . "\"\n";
# Mengubah huruf pertama string menjadi huruf besar
echo "String \"$string_huruf_kecil\" menjadi string huruf pertama besar \"" . ucfirst($string_huruf_kecil) . "\"\n";
# Mengubah huruf pertama di setiap kata menjadi huruf besar
echo "String huruf kecil \"$string_huruf_kecil\" menjadi string huruf besar di setiap kata \"" . ucwords($string_huruf_kecil) . "\"\n\n";

echo "# Fungsi String Bawaan Untuk PHP 8\n";
echo "Apakah string \"$string\" mengandung substring \"$sub_string\" : " . match(true){
    str_contains($string, $sub_string) => "Ya\n",
    default => "Tidak\n",
};
echo "Apakah string \"$string\" diawali dengan sub string \"$sub_string\" : " . match(true){
    str_starts_with($string, $sub_string) => "Ya\n",
    default => "Tidak\n",
};
echo "Apakah string \"$string\" diakhiri dengan sub string \"$sub_string\" : " . match(true){
    str_ends_with($string, $sub_string) => "Ya\n",
    default => "Tidak\n",
};
//Mengambil string dari string
$indeks_mulai = 2;
$panjang_string = 4;
echo "String \"" . substr($string, $indeks_mulai, $panjang_string) . "\" diambil dari string \"$string\" dengan indeks mulai $indeks_mulai dan panjang string $panjang_string\n";
//Membalikkan isi string
echo "String \"$string\" setelah dibalik menjadi \"" . strrev($string) . "\"\n";
//Mengulangi string
$jumlah_pengulangan = 3;
echo "String \"$string\" setelah diulangi $jumlah_pengulangan menjadi \"" . str_repeat($string, $jumlah_pengulangan) . "\"\n";

?>