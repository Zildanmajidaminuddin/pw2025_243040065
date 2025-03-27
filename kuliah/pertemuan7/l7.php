<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6A</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        .row {
            display: flex;
        }
        .box {
            width: 40px;
            height: 40px;
            margin: 2px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: lightblue;
            border: 1px solid black;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    if (isset($_GET["angka"])) {
        $n = (int) $_GET["angka"];

        for ($i = $n; $i >= 1; $i--) {
            echo '<div class="row">';
            for ($j = 1; $j <= $i; $j++) {
                echo '<div class="box">' . $i . '</div>';
            }
            echo '</div>';
        }
    } else {
        echo "<h3>Silakan tambahkan parameter angka di URL, contoh: ?angka=10</h3>";
    }
    ?>
</div>

</body>
</html>
