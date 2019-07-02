<?php
if(!isset($_SESSION['mdp'])) {session_start();}
if(!isset($_SESSION['mdp'])){?>
    <meta http-equiv="refresh" content="0;URL=index.php">
    <?php
}
else{

    require_once('db.php');
    ?>
    <html lang="fr">

    <head>
        <!-- head -->
        <?php
        include("head.php");
        ?>
    </head>

    <body class="admin">
    <header>
        <!-- navbar -->
        <?php include("nav_admin.php"); ?>
    </header>

    <main>
        <h1>Messages reçus</h1>
        <!-- On récupère les messgaes reçus dans la base de données -->
        <?php
        $rqt = $pdo->prepare('SELECT * FROM messages');
        $rqt->execute();
        while($c = $rqt->fetch()){
            echo "<h2>Message de " .$c['prenom'] ." " .$c['nom'] . "</h2>";
            echo "<div>Mail : " . $c['mail'] ."</div>";
            echo "<div>Téléphone : " . $c['telephone'] ."</div>";
            echo "<div>Contenu du message : " . $c['message'] ."</div>";
        }
        ?>

    </main>
    </body>
    </html>

<?php  }
?>