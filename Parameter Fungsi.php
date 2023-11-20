<?php
# Parameter
//Parameter hanya dapat ditambahkan pada fungsi di dalam tanda kurung
//Argumen harus diberikan sesuai dengan jumlah parameter dalam fungsi
//Argumen harus diberikan jika nilai parameter default tidak ada ketika pemanggilan fungsi

//Membuat fungsi dengan parameter $nama
function sapa_nama($nama){
    echo "Halo $nama\n";
}
//Memanggil fungsi dengan argumen "Rifky"
sapa_nama("Rifky");

# Parameter Default
//Argumen yang diberikan dapat diberikan secara opsional saat pemanggilan fungsi namun argumen yang diberikan tidak boleh melebihi jumlah parameter
//Parameter default disarankan ditempatkan paling kanan pada fungsi untuk mencegah parameter default menjadi wajib saat diberikan argumen

//Membuat fungsi dengan parameter default
function sapa_seseorang($nama = "semuanya!"){
    echo "Halo $nama\n";
}
sapa_seseorang("Rifky");
sapa_seseorang();
//Memanggil fungsi menggunakan nama variabel parameter
sapa_seseorang(nama : "nak");

# Tipe Deklarasi
//Menggunakan tipe deklarasi agar tipe data argumen yang diberikan harus sesuai dengan tipe data parameter pada fungsi
function cetak_nama_dan_kelas(string $nama, int $kelas){
    echo "$nama di kelas $kelas\n";
}
cetak_nama_dan_kelas(nama : "Rifky", kelas : 10);

# Tipe Union
//Tipe union memperbolehkan parameter memiliki dua tipe data atau lebih dan tipe data argumen harus diberikan sesuai dengan tipe data parameter pada fungsi
//Tipe union menggunakan simbol |
function cetak_nama_dan_berat_badan(string $nama, int | float $berat_badan){
    echo "$nama memiliki berat badan $berat_badan Kg\n";
}
cetak_nama_dan_berat_badan("Rifky", 33.3);
?>