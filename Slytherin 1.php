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
            background: url(https://i.pinimg.com/originals/5d/d8/af/5dd8af1ecbd64557cd24abbebc94b363.jpg) ; 
            background-size: 100%;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .caixa {
            background-color: darkgreen;
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
    <h1>Welcome to Slytherin, <?php echo $name; ?>!</h1>
    <p>We are very happy that you are part of our house.</p>
    <div class="caixa">
        <?php echo 
        "Slytherin valued ambition, leadership, self-preservation, cunning and resourcefulness and was founded by Salazar Slytherin.
         Its emblematic animal was the serpent, its representative gemstone was emeralds, and its colours were emerald green and silver.
          Professor Horace Slughorn was the Head of Slytherin during the 1997 to 1998 school year, replacing Severus Snape, who as well 
          replaced Slughorn as Potions Professor when he retired for the first time several years prior. Slytherin had produced the most 
          Death Eaters and Dark wizards, including Tom Riddle, Bellatrix Lestrange, and Lucius Malfoy, for example. But that does 
          not mean that other Houses hadn't produced any; Peter Pettigrew was a Gryffindor, and Quirinus Quirrell was a Ravenclaw."; ?>
        <br>
    </div>
    <br>
    <div>
        <H3>The founder of the House was Salazar Slytherin.</h3>
        <img src="https://1970789444.rsc.cdn77.org/assets/character/salazar-slytherin_20220623153011.png" class="rounded mx-auto d-block" alt="..."> <br>
        <h3>More about Slytherin's history</h3>
    </div>                
    <div class="caixa">
        <?php echo 
         "The Bloody Baron was the House ghost. The founder of the House was Salazar Slytherin. Slytherin corresponded roughly to the element of water.
          The Slytherin dormitories and common room were reached through a bare stone wall in the Dungeons. The Slytherin common room lay 
          beneath the Black Lake. It was a long, low underground room with rough stone walls and silver lamps hanging from the ceiling. 
          Famous Slytherins included Merlin, Tom Riddle, Draco Malfoy, and Dolores Umbridge. The significant object of Slytherin was 
          Salazar Slytherin's locket, which was turned into a Horcrux by Tom Riddle."; ?>
        <br>
    </div>
    <br>
    <a href="telainicial.php" class="botao">Go to back Horgwarts School</a> 

    </body>
</html>