<?php

$kondisi = true;

//Percabangan kondisi menggunakan kurung kurawal
if($kondisi){
    echo "Kondisi Benar!\n";
}else{
    echo "Kondisi Salah!\n";
}

//Percabangan kondisi menggunakan titik dua harus diakhiri dengan kata kunci endif
if ($kondisi):
    echo "Kondisi Benar\n";
else:
    echo "Kondisi Salah\n";
endif
?>