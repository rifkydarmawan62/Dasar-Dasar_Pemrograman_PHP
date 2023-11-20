<?php
///Variabel fungsi menyimpan nama fungsi ke variabel
//Jika nama fungsi dalam variabel terdapat dalam fungsi maka program akan mengeksekusi fungsi yang terdapat pada nilai variabel

//Tanpa parameter
function cetak_hello_world(): void{
    echo "Hello World\n";
}
$variabel = "cetak_hello_world";
$variabel();

//Dengan parameter
function cetak_nama_dan_kelas(string $nama, int $kelas): void{
    echo "$nama di kelas $kelas\n";
}
$variabel = "cetak_nama_dan_kelas";
$variabel("Fulan", 12);
?>