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
    <!-- Une simple div pour montrer mon nom et mon "statut"-->
    <div class="ligne" id="intro1">
        <div id="intro">
            <p id="prenom">SEGUIN Ghislain</p>
            <div id="droite">
                <p>Etudiant</p>
            </div>
        </div>
    </div>
<!-- Un texte de bienvenue, il ne sert qu'a introduire le site -->
    <div class="categorie_texte">
        <h1>Bienvenue</h1>
        <p> Bienvenue sur mon site CV, je m'appelle SEGUIN Ghislain. Je suis actuellement étudiant en première année d'informatique à Ynov Aix-en-Provence.
            Sur ce site vous pourrez retrouver diverses informations me concernant tel que mes compétences informatique ou encore les expériences professionnelles que j'ai pu vivre.
            </p>
    </div>
    <div class="ligne">
        <!-- Ce bouton redirige vers à propos -->
        <div class="bouton">
            <a  href="a_propos.php" >  <button class="bouton_propre" type="button">A propos</button></a>
        </div>
        <!-- Ce bouton redirige vers Portfolio -->
        <div class="bouton">
            <a href="Portfolio.php" > <button class="bouton_propre" type="button">Portfolio</button></a>
        </div>
    </div>
</main>
<!-- Footer -->
<?php
    include('footer.php');
?>

</body>
</html>