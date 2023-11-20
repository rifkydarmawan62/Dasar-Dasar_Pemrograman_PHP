<?php
//Variabel scope dimana variabel tersebut masih dapat diakses
//Terdapat tiga jenis variabel scope dalam PHP;

# Variabel Global
//Variabel global adalah variabel yang dibuat diluar fungsi
//Variabel global hanya dapat diakses diluar fungsi, namun tidak dapat diakses di dalam fungsi
//Jika kita ingin mengakses variabel global di dalam fungsi maka kita harus menggunakan kata kunci global atau menggunakan variabel khusus $GLOBALS
$variabel_global = "Variabel dipanggil di dalam fungsi";
function cetak_variabel_global(): void{
    echo $variabel_global ?? "Variabel tidak terdefinisi saat dipanggil di dalam fungsi\n";
    echo $GLOBALS['variabel_global'] . " menggunakan variabel \$GLOBALS\n";
    global $variabel_global;
    echo $variabel_global . " menggunakan kata kunci global\n" ?? "Variabel tidak terdefinisi saat dipanggil di dalam fungsi\n";
}
cetak_variabel_global();

# Variabel Lokal
//Variabel lokal adalah variabel yang dibuat didalam fungsi
//Variabel lokal hanya dapat diakses pada fungsi itu sendiri
//Variabel lokal otomatis dihapus setelah program keluar dari fungsi
function penghitung_non_statis(): void{
    $jumlah_dihitung = 0;
    echo "Jumlah dihitung non statis = $jumlah_dihitung\n";
    ++$jumlah_dihitung;
}
penghitung_non_statis();
penghitung_non_statis();
penghitung_non_statis();

# Variabel Statis
//Variabel statis dibuat menggunakan kata kunci static
//Variabel statis tidak dihapus otomatis saat program keluar dari fungsi
//Variabel statis dapat digunakan untuk mempertahankan nilai yang disimpan pada fungsi
function penghitung_statis(): void{
    static $jumlah_dihitung = 0;
    echo "Jumlah dihitung statis = $jumlah_dihitung\n";
    ++$jumlah_dihitung;
}
penghitung_statis();
penghitung_statis();
penghitung_statis();
?>