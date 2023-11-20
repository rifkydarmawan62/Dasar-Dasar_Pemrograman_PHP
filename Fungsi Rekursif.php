<?php
//Fungsi rekursif adalah fungsi yang dapat memanggil fungsi dirinya sendiri
function cetak_hello_world_rekursif(int $jumlah_rekursif): void{
    if ($jumlah_rekursif > 0):
        echo "Hello World\n";
        cetak_hello_world_rekursif(--$jumlah_rekursif);
    endif;
}
cetak_hello_world_rekursif(5);

function hasil_faktorial(int $angka): string | int{
    if($angka > 1):
        return $angka * hasil_faktorial($angka - 1);
    elseif($angka === 1):
        return 1;
    else:
        return "tidak valid!\nBilangan Faktorial Harus Lebih Dari Nol!\n";
    endif;
}
$angka = 5;
echo "hasil faktorial dari $angka adalah " . hasil_faktorial($angka);
?>