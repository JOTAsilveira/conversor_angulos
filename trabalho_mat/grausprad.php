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
	
    $valor1 = 180;
    $valor2 = pi();
    $valor3 = $_POST['graus'];
	;

    $x = null;

    $x = ($valor2 * $valor3) / $valor1;

    echo "O valor em radianos é: " . $x/pi() . "π rad";

    echo "<br><br><br>";

    if ($valor3 > 0 and $valor3 < 90){
        echo "O ângulo está no primeiro quadrante.";
    }
    
    if ($valor3 > 90 and $valor3 < 180){
            echo "O ângulo está no segundo quadrante.";
    }

    if ($valor3 > 180 and $valor3 < 270){
            echo "O ângulo está no terceiro quadrante.";
    }   

    if ($valor3 > 270 and $valor3 < 360){
            echo "O ângulo está no quarto quadrante.";
    }


    if ($valor3 == 0 or $valor3 == 90 or $valor3 == 180 or $valor3 == 270 or $valor3 == 360){
         echo "O ângulo não pertence a nenhum quadrante.";
    }

    
?>


<br><br><br><br><br><br><br><br>

<h3>Clique <a href="main.php">aqui</a> para voltar a página principal.</h3>
</h2></center>

</body>
</html>