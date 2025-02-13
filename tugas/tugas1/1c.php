<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1c</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .row {
            display: flex;
            gap: 0;
        }
        .box {
            width: 75px;
            height: 75px;
            background-color: lightblue;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            border: 1px solid black;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="box">1</div>
        </div>
        <div class="row">
            <div class="box">2</div>
            <div class="box">2</div>
        </div>
        <div class="row">
            <div class="box">3</div>
            <div class="box">3</div>
            <div class="box">3</div>
        </div>
    </div>
</body>
</html>
