<?php
# Operator Bitwise
//Operator bitwise digunakan untuk melakukan operasi pada bilangan biner
//Operator bitwise and &
//Operator bitwise or |
//Operator biwise xor ^
//Operator bitwise shift left <<
//Operator bitwise shift right >>

$a = 0b00100101;
$b = 0b00111110;

printf("8 bit variabel a = %08b\n", $a);
printf("8 bit variabel b = %08b\n", $b);
echo "bilangan desimal variabel a = $a\n";
echo "bilangan desimal variabel b = $b\n\n";

echo "Operator Bitwise Not\n";
//Operator bitwise not menggunakan harus 64 bit
printf("a      = %064b\n", $a);
printf("~a     = %064b\n", ~$a);
printf("a      = %d\n", $a);
printf("~a     = %d\n\n", ~$a);

echo "Operator Bitwise And\n";
printf("a     = %08b\n", $a);
printf("b     = %08b\n", $b);
echo "-----------------\n";
printf("a & b = %08b\n\n", $a & $b);

echo "Operator Bitwise Or\n";
printf("a     = %08b\n", $a);
printf("b     = %08b\n", $b);
echo "-----------------\n";
printf("a | b = %08b\n\n", $a | $b);

echo "Operator Bitwise Xor\n";
printf("a     = %08b\n", $a);
printf("b     = %08b\n", $b);
echo "-----------------\n";
printf("a ^ b = %08b\n\n", $a ^ $b);

$jumlah_bit_digeser = 1;

echo "Operator Bitwise Shift Left\n";
printf("a      = %064b\n", $a);
echo "-------------------------------------\n";
printf("a << $jumlah_bit_digeser = %064b\n\n", $a << $jumlah_bit_digeser);

$a = 0b00001001010000;
echo "Operator Bitwise Shift Right\n";
printf("a      = %064b\n", $a);
echo "-------------------------------------\n";
printf("a >> $jumlah_bit_digeser = %064b\n\n", $a >> $jumlah_bit_digeser);
?>