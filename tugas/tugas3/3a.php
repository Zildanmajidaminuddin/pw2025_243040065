<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3a</title>
</head>
<body>
    
<?php 

 echo "<h4>Menghitung Luas Lingkaran</h4>";
 function hitungLuasLingkaran($r) 
 {
 //menghitung luas lingkaran rumusnya pi x r x r
    $luas = 3.14 * $r * $r;
    return $luas . " cm<sup>2</sup>";
    //tambahkan <sup> agar angkanya menjadi naik keatas
}
 echo "Jari-jari = 10 cm. <br>";
 echo "Luas lingkaran = " . hitungLuasLingkaran(10) . "<br>";
 echo "<hr>";

 echo "<h4>Menghitung Keliling Lingkaran</h4>";
 function hitungKelilingLingkaran($r)
 {
    //menghitung keliling lingkaran rumusnya 2 x pi x r
    $keliling = 2 * 3.14 * $r;
    return $keliling . " cm";
 }

 echo "Jari-jari = 20cm. <br>";
 echo "Luas lingkaran = " . hitungKelilingLingkaran(20) . "<br>";
 echo "<hr>";

?>

</body>
</html>