<?php
    $nMaior =$_POST["maior"];
    $nMenor =$_POST["menor"];
    $nMaiorc = intval($nMaior);
    $nMenorc = intval($nMenor);
    $soma = 0;

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
    <main class="resultado">
        <div class="mostra">
            <h4>A soma de todos os números dos dois valores é:</h4>
        <?php

            for($i=$nMenorc;$i<$nMaiorc+1;$i++){
                
                $soma += $i;
                
            };
            
            echo $soma.'<br>';
        ?>
        </div>
    </main>
</body>
</html>