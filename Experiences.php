<?php
session_start();
require_once('db.php');
/* On fait une requête pour afficher toute les expériences  */
$rqtE = "SELECT * FROM experience_pro";

$stmt = $pdo->prepare($rqtE);
$stmt->execute();
/* On fait une requête pour afficher tout les modaux */
$rqtM = "SELECT * FROM modaux";

$stmtM = $pdo->prepare($rqtM);
$stmtM->execute();

?>

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

    <div class="categorie ligne" id="exp">
        <div id="exp_pro">
            <h1>Mes expériences profesionnelles</h1>
            <!-- On affiche l'image de l'expérience -->
            <?php
            while($c = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<img src='" . $c['logo'] . "' alt='" . $c['alt'] . "' data-toggle='modal' data-target='" . $c['data_target'] . "'/>";
            }
            ?>

        </div>
    </div>
    <!-- On affiche les modaux des expériences-->
    <?php
    while($c = $stmtM->fetch(PDO::FETCH_ASSOC)){
        echo "<div class='categorie'>";
        echo "<div class='modal fade' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true' id='" .  $c['id_mod'] ."'>";
        echo "<div  class='modal-dialog modal-dialog-centered' role='document'>";
        echo "<div class='modal-content'>";
        echo "<div class='modal-header'>";
        echo "<h5 class='modal-title'>" . $c['titre'] . "</h5>";
        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
        echo "<span aria-hidden='true'>x</span>";
        echo "</button>";
        echo "</div>";
        echo "<div class='modal-body'>" . $c['contenu'] . "</div>";
        echo "<div class='modal-footer'>";
        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</main>
<!-- Footer -->
<?php
    include('footer.php');
?>

</body>
</html>