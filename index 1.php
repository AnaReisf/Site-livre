<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Test</title>
    <style>
        body {
            background: url(https://i.pinimg.com/736x/7d/78/55/7d785565d27923cfc8e943c821305d28.jpg) ; 
            background-size: 100%;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .caixa {
            background-color: black;
            color: white;
            border: 2px solid #fff;
            padding: 20px;
            width: 500px;
            text-align: center;
            border-radius: 15px; /* Bordas arredondadas */
            font-size: 25px;
        }
        .botao {
            background-color: gray; 
            color: black; 
            padding: 10px 20px; /* Espaçamento interno */
            text-align: center;
            display: inline-block; /* Para permitir padding */
            border-radius: 5px; /* Bordas arredondadas */
            cursor: pointer; /* Muda o cursor ao passar o mouse */
        }
    </style>
</head>
<body>
    <h1>Welcome to Harry Potter's World    </h1>
    <div class="caixa">
        <?php echo "Here you will found a hole world of magic and wizards!"; ?>
        <br>
    </div>
    <br>
    <br>
    <a href="telainicial.php" class="botao">Go to Horgwarts School</a> <!-- Link para a página telainicial -->
</body>
</html>