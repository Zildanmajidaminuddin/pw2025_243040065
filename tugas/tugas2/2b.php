<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2a.php</title>
</head>
<body>
    <h2><em>
        
        <?php
           for ($i = 1; $i <= 10; $i++) {
               for ($j = 1; $j <= $i; $j++) {
                   echo "$j ";
               }
               echo "<br>";
           }
        ?>
    
    </em></h2>
</body>
</html>

