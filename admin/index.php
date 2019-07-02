<?php
session_start();
include_once('db.php');
?>


<html lang="fr" class="height">
<head>
    <!--head-->
    <?php
    include("head.php");
    ?>
</head>

<body class="height">
<header>
    <!--navbar-->
    <?php include("nav_admin.php"); ?>
</header>

<main id="admin">

    <?php

    //Ici on va gérer les différents formulaires
    if(isset($_POST['submit'])){
        switch($_POST['submit']) {
            case 'Connexion' :
                /*if(isset($_POST['psd'])&&isset($_POST['mdp']))
                {*/
                $reponse = $pdo->prepare("SELECT * FROM utilisateur WHERE user_name = ?");
                $reponse->execute(array($_POST['psd']));
                $utilisateur=$reponse->fetch();
                $_SESSION['psd']=$utilisateur['user_name'];
                if($_POST['mdp']==$utilisateur['user_passwd'])
                {
                    $_SESSION['mdp']= $_POST['mdp'];
                }
                else
                {
                    $idormdp = "id ou mdp incorrect";
                    session_destroy();
                }
                /*}
                else
                {
                    session_destroy();
                }*/
                break;



        }

    }
    ?>



    <!-- Ici on se deconnecte -->
    <?php
    if(isset($_SESSION['mdp']))
    {
        require_once ('deco.php');
        ?>

        <div>
            <h1>Administration site CV</h1>
            <?php
            echo "<p>Bonjour " . $_SESSION['psd'] . "</p>";
            ?>

            <form method='POST' id="deconnect" action="index.php">
                <input type="submit" value="Se déconnecter" name='disconnect'/>
            </form>

        </div>
        <!-- Ici on se connecte -->
        <?php
    }

    else{
        ?>
        <div>
            <h1>Connexion</h1>
            <h2>Se connecter pour accéder à la page d'administration</h2>
            <form method='POST' class="colonne" id="aligncenter" action="index.php">
                <div class="check">
                    <input type='text' name="psd" placeholder='Identifiant' required/>
                    <input type='password' name='mdp' id="passwd" placeholder=' Mot de passe' required/>
                </div>
                <input type="submit" name="submit" value="Connexion"/>
            </form>
            <?php
            if (isset($idormdp)){
                echo '<div id="idormdp">' . $idormdp . '</div>';
            }
            ?>
        </div>
    <?php } ?>

</main>
</body>
</html>
