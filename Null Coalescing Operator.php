<?php
//Operator null coalescing operator digunakan untuk memeriksa apakah variabel bernilai null atau tidak
$kondisi = "Kondisi tidak bernilai null!\n";
echo $kondisi ?? "Kondisi bernilai null!\n";
//Atau menggunakan fungsi isset() untuk memeriksa nilai variabel apakah null atau tidak
if(isset($kondisi)){
    echo $kondisi . PHP_EOL;
}else{
    echo "Kondisi bernilai null!\n";
}

//unset() digunakan untuk menghapus variabel
unset($kondisi);
echo $kondisi ?? "Kondisi bernilai null!\n";
?>