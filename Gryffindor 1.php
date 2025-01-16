<?php
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Visitante';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gryffindor</title>
    <style>
        body {
            background: url(https://wallpapers.com/images/hd/harry-potter-gryffindor-wallpaper-j6di32i56ch9sy4n.jpg) ; 
            background-size: 100%;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .caixa {
            background-color: darkred;
            color: white;
            border: 2px solid #fff;
            padding: 20px;
            width: 700px;
            text-align: center;
            border-radius: 15px; /* Bordas arredondadas */
            font-size: 15px;
        }
    </style>
<body>
    <h1>Welcome to Gryffindor, <?php echo $name; ?>!</h1>
    <p>We are very happy that you are part of our house.</p>
    <div class="caixa">
        <?php echo 
        "Gryffindor valued bravery, daring, nerve, and chivalry. Its emblematic animal was the lion, its representative gemstone was rubies,
     and its colours were scarlet and gold. Minerva McGonagall was the most recent Head of Gryffindor. Sir Nicholas de Mimsy-Porpington,
      also known as 'Nearly Headless Nick', was the House Ghost. "; ?>
        <br>
    </div>
    <br>
    <div>
        <H3>The founder of the House was Godric Gryffindor.</h3>
        <img src="https://1970789444.rsc.cdn77.org/assets/character/godric-gryffindor_20220715144130.png" class="rounded mx-auto d-block" alt="..."><br>
        <h3>More about Gryffindor's history</h3>

    </div>                
    <div class="caixa">
        <?php echo 
         "The house Gryffindor corresponded to the element of fire. The common room was located in one of the highest towers at Hogwarts, 
       the entrance was situated on the seventh floor in the east wing of the castle and was guarded by a portrait of The Fat Lady. 
       She permitted entrance if given the correct password, which was changed numerous times throughout the school year.
       Famous Gryffindors included Albus Dumbledore, Harry Potter, and Minerva McGonagall. The significant object of Gryffindor
        was the Sword of Gryffindor. Their motto was 'Forti Animo Estote', which, in Latin, means 'Be of good courage'."; ?>
        <br>
    </div>
    <br>
    <a href="telainicial.php" class="botao">Go to back Horgwarts School</a> 
    </body>
</html>
