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
    <!-- Cette div sert simplement à en dire plus sur moi -->
    <div class="categorie_texte">
        <h1>Qui suis-je ?</h1>
        <p> je m'appelle SEGUIN Ghislain, actuellement étudiant en première année d'informatique à Ynov Aix-en-Provence.
            Je suis ressortissant d'un baccalauréat STI2D option SIN qui m'a permis de débuter mon apprentissage en infrastructure réseau.
            En effet, j'ai déjà été chef de projet durant 1 an lors du développement d'une borne d'arcade connectée,
            dans laquelle je me suis occupé de la partie audiovisuelle et de la partie réseaux (connexion entre deux bornes différentes pour jouer en ligne).
            Vous pouvez retrouver ci-dessous mon CV au format PDF</p>
    </div>
    <div class="bouton">
        <a href="Docs/CV.pdf" target="_blank"> <button class="bouton_propre" type="button">  CV </button></a>
    </div>
    <!-- Cette div énumère mon parcours scolaire -->
    <div class="categorie_texte">
        <h1>Parcours</h1>
        <p> Lors de mon bac STI2D, j'ai pu commencer à développer ce qui m'a donné l'enguoument pour me lancer dans l'informatique.
            Au fur et à mesure de mes recherches, j'ai eu envie de m'orienter vers la cybersécurité qui m'intéresse grandement.
            Ma première année à Ynov a confirmé mon choix dans mon orientation.
            Ci-dessous vous pourrez retrouver mes compétences ou alors me contacter</p>
    </div>
    <div class="ligne">
        <!-- Ce bouton redirige vers compétences -->
        <div class="bouton">
            <a href="Competence.php"> <button class="bouton_propre" type="button">Compétences</button></a>
        </div>
        <!-- Ce bouton redirige vers Contact -->
        <div class="bouton">
            <a href="Contact.php"> <button class="bouton_propre" type="button">Contact</button></a>
        </div>
    </div>
</main>
<!-- Footer -->
<?php
    include('footer.php');
?>

</body>
</html>