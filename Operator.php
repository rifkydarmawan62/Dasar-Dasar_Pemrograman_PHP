<?php
# Operator Aritmatika
//Operator penjumlahan +
//Operator pengurangan -
//Operator perkalian *
//Operator pembagian /
//Operator sisa pembagian (modulus) %
//Operator perpangkatan **

var_dump(2 + 3);
var_dump(2 - 3);
var_dump(2 * 3);
var_dump(2 / 3);
var_dump(6 % 4);
var_dump(2 ** 3);

# Operator Penugasan
//Operator penugasan digunakan untuk membuat dan menyimpan nilai ke variabel atau variabel konstanta
//Operator penugasan =
//Operator penugasan penambahan $a += $b sama dengan $a = $a + $b
//Operator penugasan pengurangan $a -= $b sama dengan $a = $a - $b
//Operator penugasan perkalian $a *= $b sama dengan $a = $a * $b
//Operator penugasan pembagian $a /= $b sama dengan $a = $a / $b
//Operator penugasan sisa pembagian (modulus) $a %= $b sama dengan $a = $a % $b
//Operator penugasan perpangkatan $a **= $b sama dengan $a = $a ** $b

# Operator Penggabungan String
//Simbol . digunakan untuk menggabungkan string
//Operator penggabungan string menggunakan simbol .=

$a = "Hello ";
$b = "World";
var_dump($a . $b);

# Operator Perbandingan
//Operator perbandingan digunakan untuk membandingkan 2 buah nilai atau lebih
//Hasil dari operator perbandingan bernilai boolean true (benar) dan false (salah)
//Operator perbandingan sama dengan ==
//Operator perbandingan tidak sama dengan !=
//Operator perbandingan tidak sama dengan <>
//Operator perbandingan identik ===
//Operator perbandingan tidak identik !==
//Operator perbandingan lebih kecil <
//Operator perbandingan lebih kecil atau sama dengan <=
//Operator perbandingan lebih besar >
//Operator perbandingan lebih besar atau sama dengan >=

$a = 100;
var_dump($a == "100");
var_dump($a === "100");

# Operator Logika
//Operator logika membandingkan kedua tipe data boolean atau lebih
//Operator logika and $a && $b atau $a and $b
//Operator logika or $a || $b atau $a or $b
//Operator logika xor $a xor $b
//Operator logika not !$a

# Operator Increment dan Decrement
//Operator increment dan decrement juga dapat digunakan terhadap tipe data string
//Operator post-increment $a++
//Operator pre-increment ++$a
//Operator post-decrement $a--
//Operator pre-decrement --$a
?>