<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topi Bundar</title>
</head>
<body>
<h2>Hasil Operasi Matematika</h2>
    <p>
        <?php
            $angka = 65;
            echo "Aku adalah angka <strong>$angka</strong><br>";
            $angka *= 5;
            echo "Jika aku dikali 5, maka aku sekarang menjadi <strong>$angka</strong><br>";
            $angka /= 2;
            echo "Jika aku dibagi 2, maka aku sekarang menjadi <strong>$angka</strong><br>";
            $angka += 75;
            echo "Jika aku ditambah 75, maka aku sekarang menjadi <strong>$angka</strong><br>";
            $angka -= 20;
            echo "Jika aku dikurangi 20, maka aku sekarang menjadi <strong>$angka</strong>";
        ?>
    </p>
</body>
</html>