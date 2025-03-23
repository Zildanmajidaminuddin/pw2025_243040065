<?php
$mahasiswa = [
    ['Zildan majid ', '243040065', 'zildanmajid16@gmail.com', 'Teknik Informatika', 'zildann.jpg'],
    ['tastafian', '243040053', 'tastafian09@gmail.com', 'Teknik Informatika', 'nw.jpg'],
    ['naufal', '243040023', 'naufal@gmail.com', 'Teknik Informatika', '.nw.jpg'],
    ['salman', '243040013', 'salmanl@gmail.com', 'Teknik Informatika', ' nw.jpg'],
    ['fadli', '243040003', 'fadli09@gmail.com', 'Teknik Informatika', 'images.jpg'],
    ['Gandul', '243040063', 'gandul9@gmail.com', 'Teknik Informatika', 'nw.jpg'],
    ['deni', '243040002', 'deni@gmail.com', 'Teknik Informatika', 'images.jpg'],
    ['rifki', '243040004', 'rifki@gmail.com', 'Teknik Informatika', 'images.jpg'],
    ['raja Kepli', '243040010', 'rajakepli@gmail.com', 'Teknik Informatika', 'nw.jpg'],
    ['Halim', '243040027', 'halimsur@gmail.com', 'Teknik Informatika', 'images.jpg'],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas5</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>
                <img src="img/<?= $m[4]; ?>">
            </li>
            <li>Nama: <?= $m[0]; ?> </li>
            <li>NIM: <?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan: <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>