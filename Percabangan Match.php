<?php
//Percabangan match langsung mengembalikan nilai
//Tidak seperti percabangan switch case, percabangan match tidak memerlukan kata kunci break di setiap percabangan
//Tidak seperti percabangan switch case yang menggunakan operator sama dengan (==), percabangan match menggunakan operator identik (===)

$kondisi = '0';
echo match($kondisi){
    0 => "Kondisi bernilai nol dengan tipe data integer\n",
    "0" => "Kondisi bernilai nol dengan tipe data string\n",
    default => "Kondisi Tidak Bernilai Nol\n",
};

echo match(true){
    $kondisi >= 0 && $kondisi <= 100 => "Kondisi bernilai diantara 0 sampai 100\n",
    default => "Kondisi tidak bernilai diantara 0 sampai 100\n",
};

$bilangan_bulat = 100;
echo match(true){
    $kondisi % 2 === 0 => "$bilangan_bulat adalah bilangan genap\n",
    $kondisi % 2 === 1 => "$bilangan_bulat adalah bilangan ganjil\n",
    default => "$bilangan_bulat adalah bukan bilangan genap dan ganjil\n",
};

$teks = "a";
echo match($teks){
    "a", "b" => "Variabel bernilai a atau b\n",
    default => "Variabel tidak bernilai a atau b\n",
};
?>