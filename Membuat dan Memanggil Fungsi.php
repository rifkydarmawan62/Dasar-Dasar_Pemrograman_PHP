<?php
//Fungsi dapat digunakan dan dipanggil berkali-kali
//Mencegah pengulangan penulisan kode program (Don't Repeat Yourself)

# Penamaan Fungsi
//Kata kunci function digunakan untuk membuat fungsi
//Penamaan fungsi tidak boleh diawali dengan angka
//tanda kurung dan kurung kurawal harus diberikan setelah membuat nama fungsi
//Fungsi bersifat case insensitive

//Memanggil fungsi terlebih dahulu lalu membuat fungsi
cetak_hello_world();

function cetak_hello_world(){
    echo "Hello World!\n";
};

//Memanggil fungsi setelah membuat fungsi
cetak_hello_world();
//Fungsi dipanggil dengan huruf besar karena fungsi bersifat case insensitive
CETAK_HELLO_WORLD();
?>