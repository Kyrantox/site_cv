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
    <?php
    include('nav.php');
    ?>
</header>
<main>
<div class="bloc">
    <form action="/le_truc_en_php.php">
        <div class="lignec">
            <div class="col-25">
                <label for="prénom">Prénom</label>
            </div>
            <div class="col-75">
                <input type="text" id="prénom" name="prénom" placeholder="Votre prénom...">
            </div>
        </div>
        <div class="lignec">
            <div class="col-25">
                <label for="nom">Nom</label>
            </div>
            <div class="col-75">
                <input type="text" id="nom" name="nom" placeholder="Votre nom...">
            </div>
        </div>
        <div class="lignec">
            <div class="col-25">
                <label for="mail">E-mail</label>
            </div>
            <div class="col-75">
                <input type="text" id="mail" name="mail" placeholder="Votre mail...">
            </div>
        </div>
        <div class="lignec">
            <div class="col-25">
                <label for="numero">Numéro de téléphone</label>
            </div>
            <div class="col-75">
                <input type="text" id="numero" name="numero" placeholder="Votre numéro...">
            </div>
        </div>
        <div class="lignec">
            <div class="col-25">
                <label for="sujet">Message</label>
            </div>
            <div class="col-75">
                <textarea id="sujet" name="sujet" placeholder="Votre message..." style="height:200px"></textarea>
            </div>
        </div>
        <div class="lignec">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
</main>
<?php
    include('footer.php');
?>
</body>
</html>