<?php

$maksimum_perulangan = 10;

# Perulangan While
//Perulangan while dengan kurung kurawal
$total_perulangan = 0;
while($total_perulangan < $maksimum_perulangan){
    ++$total_perulangan;
    echo "total perulangan while dengan kurung kurawal = $total_perulangan\n";
}
//Perulangan while dengan titik dua
$total_perulangan = 0;
while($total_perulangan < $maksimum_perulangan):
    ++$total_perulangan;
    echo "total perulangan while dengan titik dua = $total_perulangan\n";
endwhile;

# Perulangan Do While
//Program akan dieksekusi terlebih dahulu sebelum pemeriksaan kondisi pada perulangan do while
//Perulangan do while harus menggunakan kurung kurawal
$total_perulangan = 0;
do{
    ++$total_perulangan;
    echo "total perulangan do while = $total_perulangan\n";
}while($total_perulangan < $maksimum_perulangan);

# Perulangan For
//Perulangan for dengan kurung kurawal
for($total_perulangan = 0; $total_perulangan < 10; ++$total_perulangan){
    echo "jumlah perulangan for dengan kurung kurawal = $total_perulangan\n";
}
//Perulangan for dengan titik dua
for($total_perulangan = 0; $total_perulangan < 10; ++$total_perulangan):
    echo "jumlah perulangan for dengan titik dua = $total_perulangan\n";
endfor
?>