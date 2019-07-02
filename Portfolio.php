<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SEGUIN Ghislain</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <!--navbar-->
    <?php
    include('nav.php');
    ?>
</header>
<main>
    <!-- Flipcard me permettant d'aller vers Experiences -->
<div class="categorie ligne">
    <button class="flip-card" onclick="window.location.href='Experiences.php'">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="Logo/livre.png" alt="Expériences professionelles" class="taille_flip">
            </div>
            <div class="flip-card-back">
                <h1>Expériences professionnelles</h1>
                <p>Ici se trouvent toutes les expériences professionnelles auxquelles j'ai été confronté</p>
            </div>
        </div>
    </button>
    <!-- Flipcard me permettant d'aller vers Projet -->
    <button class="flip-card" onclick="window.location.href='Projet.php'">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="Logo/engrenages.png" alt="Projets" class="taille_flip">
            </div>
            <div class="flip-card-back">
                <h1>Projets</h1>
                <p>Ici se trouvent tous les projets que j'ai pu mener à bien</p>
            </div>
        </div>
    </button>
</div>
</main>
<!-- Footer -->
<?php
    include('footer.php');
?>
</body>
</html>