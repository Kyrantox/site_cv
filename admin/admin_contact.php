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
        <?php
        include("head.php");
        ?>
    </head>

    <body class="admin">
    <header>
        <?php include("nav_admin.php"); ?>
    </header>

    <main>
        <h1>Messages reçus</h1>

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