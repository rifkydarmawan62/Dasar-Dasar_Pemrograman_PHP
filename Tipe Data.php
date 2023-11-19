<?php
# Tipe Data Null
//Tipe data null berarti kosong
//Kata kunci null bersifat case insensitive

$variabel_null = null;
#var_dump() dapat digunakan untuk mencetak tipe data
var_dump($variabel_null);
var_dump(null);

# Tipe Data Boolean
//Tipe data boolean hanya terdiri dari true (benar) dan false (salah);
//Kata kunci true dan false bersifat case insensitive

var_dump(true);
var_dump(false);

# Tipe Data Integer
//Dapat digunakan untuk menyimpan bilangan bulat positif atau bilangan bulat negatif
//Nilai maksimal yang dapat disimpan dalam tipe data integer terdapat pada PHP_INT_MIN dan PHP_INT_MAX
//Jika nilai integer melebihi nilai PHP_INT_MIN dan PHP_INT_MAX, maka tipe data integer akan diubah secara otomatis menjadi tipe data float
//Tipe data integer juga dapat digunakan untuk menyimpan bilangan biner (0b), bilangan oktal (0 atau 0o), dan bilangan heksadesimal (0x)

var_dump(PHP_INT_MIN);
var_dump(PHP_INT_MAX);
//Mengonversi otomatis tipe data integer ke float di output
var_dump(PHP_INT_MAX + 1);
//Menampilkan integer 2 miliar dengan garis bawah
var_dump(2_000_000_000);
//Mencetak integer dari bilangan biner
var_dump(0b1100);
//Mencetak integer dari bilangan oktal
var_dump(01100);
//Mencetak integer dari bilangan heksadesimal
var_dump(0x1100);

# Tipe Data Float
//Tipe data float digunakan untuk menyimpan bilangan desimal positif atau bilangan desimal negatif atau pecahan
//Tipe data float tidak dapat menggunakan sistem bilangan lain seperti bilangan biner, oktal, dan heksadesimal
//Dapat ditulis dalam notasi eksponensial
//Simbol . digunakan untuk memisahkan digit desimal
//Tipe data float memiliki akurasi yang salah pada digit desimal saat melakukan operasi matematika

var_dump(0.5);
var_dump(-0.5);
//Mencetak nilai 1 juta koma 5 menggunakan simbol garis bawah
var_dump(1_000_000.5);
//Menggunakan eksponensial untuk mencetak nilai 1,5 juta
var_dump(1.5E6);
//
var_dump(0.1 + 0.2);

# Tipe Data String
//Tipe data string digunakan untuk membuat teks
//Setiap karakter string beukuran 1 byte (8 bit)
//PHP belum mendukung unicode
//Deklarasi string diawali dan diakhiri dengan simbol " atau '
//Dapat menggunakan heredoc untuk mendeklarasikan string
//Dapat mengggunakan nowdoc untuk mendeklarasikan string
//Gunakan simbol \ untuk mencetak simbol " dan ' di output
//Deklarasi string dengan simbol ' tidak dapat membuat baris baru dengan simbol \n

var_dump("Tipe Data String");
var_dump('baris 1\nbaris 2');
var_dump("baris 3\nbaris 4");
$string_tambahan = "Selamat";
var_dump('$string_tambahan Datang');
var_dump("$string_tambahan Datang");

//Menggunakan heredoc untuk membuat string
$string_heredoc = <<<akhir_heredoc
$string_tambahan Datang
string yang dibuat dari heredoc
akhir_heredoc;
var_dump($string_heredoc);

//Menggunakan nowdoc untuk menggunakan string
$string_nowdoc = <<<'akhir_nowdoc'
$string_tambahan Datang
string yang dibuat dari nowdoc
akhir_nowdoc;
var_dump($string_nowdoc);
?>