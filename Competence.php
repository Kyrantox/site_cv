<?php
session_start();
require_once('db.php');

$rqtUC1 = "SELECT * FROM competence WHERE id_type=1";
$rqtUC2 = "SELECT * FROM competence WHERE id_type=2";

$stmt1 = $pdo->prepare($rqtUC1);
$stmt1->execute();

$stmt2 = $pdo->prepare($rqtUC2);
$stmt2->execute();

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
    <?php
    include('nav.php');
    ?>
</header>

<main>

<div id="competences">
    <h1>Compétences</h1>
    <div class="ligne">

    <?php
    while($c = $stmt1->fetch(PDO::FETCH_ASSOC)){
        echo "<div class='col'>";
            echo "<img src='" . $c['logo'] . "' alt='" . $c['alt'] . "'/>";
            echo "<h2>" . $c['libelle'] . "</h2>";
        echo "</div>";
    }
    ?>
    </div>
</div>

<div id="certification">
    <h1>Certifications</h1>
    <?php
    while($c = $stmt2->fetch(PDO::FETCH_ASSOC)){
        echo "<a href='" . $c['href'] . "' target='_blank'>";
        echo "<img src='" . $c['logo'] . "' alt='" . $c['alt'] . "'/>";
        echo "</a>";
    }
    ?>
</div>

</main>

<?php
    include('footer.php');
?>
</body>
</html>