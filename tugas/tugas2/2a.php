<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 2</title>
</head>
<body>
<?php
$nama_depan = "Zildan";  // Ganti dengan nama depanmu
$nama_belakang = "Majid";  // Ganti dengan nama belakangmu

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$nama_depan $nama_belakang<br>";
    } elseif ($i % 3 == 0) {
        echo "$nama_depan<br>";
    } elseif ($i % 5 == 0) {
        echo "$nama_belakang<br>";
    } else {
        echo "$i<br>";
    }
}
?>
    
</body>
</html>
