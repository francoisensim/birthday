<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anniversaire </title>
    <link rel="stylesheet" href="fichier2.css">
</head>
<body>
    <div id="container"></div>
   
        <div class="nom"> NOUBIENGANG TIDJO FRANCOIS RAPHAEL</div>
        <div class="date"> DATE : 24/05/2024</div>
        <div class="heure">HEURE: 15H </div>
        <div class="theme">THEME :soyons tous responsable </div>
        <div class="lien"> <a href="https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/le-
            descriptif-des-salles-municipales/la-salle-du-jardin-des-plantes/"> LIEU </a></div>
            <form id ="rap" method ="post" action="register.php" >
                <label for="text">NOM</label>
                <input type="text" id="text" name="text"><br>
                <label for="nombre">NOMBRE</label>
                <input type="nombre" id="nombre" name="nombre"><br>
                <button type="submit">ENVOYER</button>
</form>

   
  
    <div id="game-grid" >
        <button id="button"  > en savoir plus</button>
        <p>Total Guests: <?php include 'count_guests.php'; ?></p>
       
        
    <div > <p id="info">MONSIEURS,Madame <br> Vous etes tous vivement invités à la ceremonie marquant mes un de plus ,je compte sur vous tous pour m'honorer avec votre presence .<br>A PLUS TARD  </p></div>
    <script src="script.js"></script>
    <?php include "register.php";?>
  
</body>
</html>