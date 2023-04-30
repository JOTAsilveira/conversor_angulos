<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <style>
        body{
            font-family: Georgia;
            background: #201B2C;
            color: #77ffc0;
        }

        
        u{
            color: purple;
        }

        a{
            color: purple;
        }
    </style>
</head>
<body>

<BR><BR><BR></BR></BR></BR><BR><BR></BR></BR>

<center> <h2> 
<?php
	
    $valor1 = pi();
    $valor2 = 180;
    $valor3 = $_POST['rad'] * pi();
	;

    $x = null;

    $x = ($valor2 * $valor3) / $valor1;

    echo "O valor em graus é: " . $x;

    echo "<br><br><br>";
    
    if ($x > 0 and $x < 90){
        echo "O ângulo está no primeiro quadrante.";
    }
    
    if ($x > 90 and $x < 180){
            echo "O ângulo está no segunudo quadrante.";
    }

    if ($x > 180 and $x < 270){
            echo "O ângulo está no terceiro quadrante.";
    }   

    if ($x > 270 and $x < 360){
            echo "O ângulo está no quarto quadrante.";
    }


    if ($x == 0 or $x == 90 or $x == 180 or $x == 270 or $x == 360){
         echo "O ângulo não pertence a nenhum quadrante.";
    }

    
   
?>

<br><br><br><br><br><br><br><br>

Clique <a href="main.php">aqui</a> para voltar a página principal.
</h2></center>

</body>
</html>