
<?php
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Visitante';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: url(https://i.pinimg.com/originals/11/fd/8f/11fd8fc34fac643ad79e035eaba7e35f.jpg) ; 
            background-size: 100%;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .caixa {
            background-color: darkblue;
            color: white;
            border: 2px solid #fff;
            padding: 20px;
            width: 700px;
            text-align: center;
            border-radius: 15px; /* Bordas arredondadas */
            font-size: 15px;
        }
    </style>
</head>
<body>
    <h1>Welcome to Ravenclaw, <?php echo $name; ?>!</h1>
    <p>We are very happy that you are part of our house.</p>
    <div class="caixa">
        <?php echo 
        "Ravenclaw valued intelligence, knowledge, curiosity, creativity and wit. Its emblematic animal was the eagle,
        its representative gemstone was sapphires, and its colours were blue and bronze. The Ravenclaw Head of House in the 1990s
         was Filius Flitwick. The ghost of Ravenclaw was the Grey Lady, who was the daughter of Rowena Ravenclaw, the House's founder.
          Ravenclaw corresponded to the element of air."; ?>
        <br>
    </div>
    <br>
    <div>
        <H3>The founder of the House was Rowena Ravenclaw.</h3>
        <img src="https://1970789444.rsc.cdn77.org/assets/character/rowena-ravenclaw_20220623152932.png" class="rounded mx-auto d-block" alt="..."><br>
        <h3>More about Ravenclaw's history</h3>
    </div>                
    <div class="caixa">
        <?php echo 
         "The Ravenclaw common room and dormitories were located in a tower on the
         west side of the castle. Ravenclaw students must answer a riddle as opposed to giving a password to enter their dormitories.
         This riddle, however, could be answered by non-Ravenclaws. Famous Ravenclaws included Luna Lovegood, Gilderoy Lockhart,
        Ignatia Wildsmith (inventor of Floo powder), and Garrick Ollivander. The significant object of Ravenclaw was Rowena Ravenclaw's
        diadem, which was turned into a Horcrux by Tom Riddle."; ?>
        <br>
    </div>
    <br>
    <a href="telainicial.php" class="botao">Go to back Horgwarts School</a> 

    </body>
</html>