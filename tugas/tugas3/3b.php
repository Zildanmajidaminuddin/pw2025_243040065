<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3b</title>
</head>
<body>
    
<?php 

function urutanAngka($angka) 
{
    $awal = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $awal . " ";
            $awal++;
        }
        echo "<br>";
    }
}   
urutanAngka(5);

?>

</body>
</html>