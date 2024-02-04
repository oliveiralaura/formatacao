<?php 

    $numero = '1437.25';
    $transforma = number_format($numero,2,',', '.');
    date_default_timezone_set('America/Sao_Paulo');
    $dia = date('Y:m:d');
    $date = new DateTimeImmutable();
    $dia = $date;
   
    
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <?php 
        echo "<div class='caixa'>
             R$ $transforma</div>";
        echo "<div class='caixa caixa2'>".$dia->format(' d/m/Y')."
        </div>";
        
    ?>
    </main>
    

</body>
</html>