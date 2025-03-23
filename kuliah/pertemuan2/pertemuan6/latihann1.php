<?php
//membuat array
$hari = array ('senin','selasa','rabu');
$bulan = ['januari','februari','maret'];
$myArray=['Zildan',16,true];

//mencetak/menampilkan array
//menampilkan seluruh isi(hanya untuk debugging)
var_dump($hari);
echo"<br>";
print_r($bulan);
echo"<br>";
//gunakan code jika ingin menampilkan elemen menggunkan index
echo $hari[2];
echo"<br>";
echo $myArray[0];
echo"<hr>";

//menambahkan isi array
//gunakan []
$hari[]='kamis';
$bulan[]='maret';
$hari[]="jum'at";
print_r($hari);
echo"<br>";
