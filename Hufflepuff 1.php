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
            background: url(https://wallpapers.com/images/hd/grunge-hufflepuff-hogwarts-logo-fcgcanb1c79cck6l.jpg) ; 
            background-size: 100%;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .caixa {
            background-color: goldenrod;
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
    <h1>Welcome to Hufflepuff, <?php echo $name; ?>!</h1>
    <p>We are very happy that you are part of our house.</p>
    <div class="caixa">
        <?php echo 
        "Hufflepuff valued hard work, dedication, patience, loyalty, and fair play. Its emblematic animal was the badger,
         its representative gemstone was yellow diamonds, and yellow and black were its colours. Pomona Sprout was the Head of Hufflepuff 
         during 1991 to 1998, Sprout left the post of Head of Hufflepuff and Herbology Professor sometime before 2017 and her successor 
         for the position of Head of Hufflepuff was currently unknown. The Fat Friar was its ghost."; ?>
        <br>
    </div>
    <br>
    <div>
        <H3>The founder of the House was Helga Hufflepuff.</h3>
        <img src="https://1970789444.rsc.cdn77.org/assets/character/helga-hufflepuff_20220715133010.png" class="rounded mx-auto d-block" alt="..."><br>
        <h3>More about Hufflepuff's history</h3>
    </div>                
    <div class="caixa">
        <?php echo 
         "Hufflepuff corresponded to the element of earth. The Hufflepuff dormitories and common room were located somewhere in the basement,
          near the castle's kitchens. It could be accessed by tapping the barrel two from the bottom, middle of the second row in the rhythm of 
          'Helga Hufflepuff' and was described as being a cosy and welcoming place with yellow hangings, fat armchairs, and underground tunnels 
          that led to the dormitories, which had perfectly round doors, similar to barrel tops.[9] Famous Hufflepuffs included Hengist of Woodcroft 
          (founder of Hogsmeade), Newt Scamander (author of Fantastic Beasts and Where to Find Them), and Artemisia Lufkin (first female Minister 
          for Magic). The significant object of Hufflepuff was Helga Hufflepuff's Cup, which was turned into a Horcrux by Tom Riddle."; ?>
        <br>
    </div>
    <br>
    <a href="telainicial.php" class="botao">Go to back Horgwarts School</a> 

    </body>
</html>