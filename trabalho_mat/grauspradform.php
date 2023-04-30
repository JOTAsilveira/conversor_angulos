<!DOCTYPE html>
<html lang="en">
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
        
        form input{
            border-radius: 15px;
            background-color: #77ffc0;
            border: 0;
            width: 120px;
            height: 40px;
            font-family: Georgia;
            font-size: 15px;
            transition: 0.5s;
            outline: 0;
            color: purple;
        }

        form input:focus{
            background-color: purple;
            border: none;
            color: #77ffc0;
        }

        form input[type="submit"]:hover{
            background-color: purple;
            cursor: pointer;
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

<form action="grausprad.php" method="POST">	
   <center> <h2> 
        Informe o número em <u>graus</u> para ser transformado em <u>πrad</u>: 
        <input type=text name=graus size=15>
        <u><input type=submit value="converter valor"></u>
    </h2></center>

</form>   
</body>
</html>
