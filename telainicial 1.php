<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Test</title>
    <style>
        body {
            background: url(https://c4.wallpaperflare.com/wallpaper/529/208/29/harry-potter-gryffindor-hufflepuff-ravenclaw-wallpaper-preview.jpg); 
            background-size: 100%;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        header {
            background-color: black;
            color: red;
            margin-top: auto; 
            padding: 10px 0;
            font-size:20px;
        }
    </style>
</head>
<body> 
    <header>Exercício 1 Layout - RadioButton</header> 
    <h1>Form</h1>
    <br> 
    <form method="POST"> 

        <h3>Put your name<br> </h3>
        <p>
            <input type="text" name="txtnome" required> 
        </p>
        <br> <br> 
        <h3>Select your house<br> </h3>
        <p>
            <input type="radio" name="rbcurso" value="Gryffindor" required>Gryffindor<br> <br>
            <input type="radio" name="rbcurso" value="Slytherin">Slytherin<br> <br>
            <input type="radio" name="rbcurso" value="Ravenclaw">Ravenclaw<br> <br>
            <input type="radio" name="rbcurso" value="Hufflepuff">Hufflepuff<br> <br>
        </p>
        <p>
            <input type="submit" value="Send"> 
            <input type="reset" value="Clean"> 
        </p> 
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $opcaoSelecionada = $_POST['rbcurso'] ?? '';
            $nome = urlencode($_POST['txtnome'] ?? ''); 

            if ($opcaoSelecionada === "Gryffindor") {
                header("Location: Gryffindor.php?name=$nome");
                exit;
            } elseif ($opcaoSelecionada === "Slytherin") {
                header("Location: Slytherin.php?name=$nome");
                exit;
            } elseif ($opcaoSelecionada === "Ravenclaw") {
                header("Location: Ravenclaw.php?name=$nome");
                exit;
            } elseif ($opcaoSelecionada === "Hufflepuff") {
                header("Location: Hufflepuff.php?name=$nome");
                exit;
            }
        }
    ?> 
</body> 
</html>


