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

    <body>
    <!-- On inclut modexp -->
    <?php
    require_once("modExp.php");
    ?>
    <header>
        <!-- navbar -->
        <?php include("nav_admin.php"); ?>
    </header>

    <main>
        <h1>Gérer les expériences professionnelles</h1>
        <!-- On supprime une expérience -->
        <div class="suppcomp">
            <h2>Supprimer une expérience</h2>
            <form method="post" class="row" action="admin_experience.php">
                <select name="SuppComp">
                    <option>
                        <?php
                        $rqt = $pdo->prepare('SELECT * FROM experience_pro');
                        $rqt->execute();
                        while($c = $rqt->fetch()){
                            $valueComp = $c['id_exp_pro'];
                            $nomComp = $c['libelle'];
                            echo "<option value='$valueComp'>$nomComp";
                        }
                        ?>
                </select>
                <input type="submit" name="submitSuppComp" value="Supprimer" />
            </form>
            <?php
            if(isset($messageDel)){
                echo '<div>' . $messageDel . '</div>';
            }
            ?>
        </div>
        <!-- On modifie une expérience -->
        <div class="modifcomp">
            <h2>Modifier une expérience</h2>
            <form action="admin_experience.php" method="post" enctype="multipart/form-data">
                <div>
                    <p>Sélectionner l'expérience à modifier :</p>
                    <select name="modifCompName">
                        <option>
                            <?php
                            $rqt = $pdo->prepare('SELECT * FROM experience_pro');
                            $rqt->execute();
                            while($c = $rqt->fetch()){
                                $valueComp = $c['id_exp_pro'];
                                $nomComp = $c['libelle'];
                                echo "<option value='$valueComp'>$nomComp";
                            }
                            ?>
                    </select>
                </div>

                <div>
                    <p>Sélectionner une image à charger :</p>
                    <input type="file" name="modifCompImg" accept="image/png">
                </div>

                <div>
                    <p>Nouveau titre :</p>
                    <textarea maxlength="50" name="modifCompTitre"></textarea>
                </div>

                <div>
                    <p>Nouveau Alt :</p>
                    <textarea maxlength="50" name="modifCompAlt"></textarea>
                </div>

                <div>
                    <p>Nouveau nom modal :</p>
                    <textarea maxlength="50" name="modifCompModal"></textarea>
                </div>

                <div>
                    <p>Nouveau contenu :</p>
                    <textarea maxlength="3000" name="modifCompType"></textarea>
                </div>

                <div><input type="submit" value="Valider les changements" name="submitModComp"></div>
            </form>
            <?php
            if(isset($messageMod)){
                echo '<div>' . $messageMod . '</div>';
            }
            ?>
        </div>
        <!-- On ajoute une expérience -->
        <div class="ajoutcomp">
            <h2>Ajouter une expérience</h2>
            <form method="post" action="admin_experience.php" enctype="multipart/form-data">

                <div>
                    <p>Titre :</p>
                    <textarea maxlength="50" name="AddCompTitre"></textarea>
                </div>

                <div>
                    <p>Contenu :</p>
                    <textarea maxlength="3000" name="AddCompType"></textarea>
                </div>

                <div>
                    <p>Sélectionner une image à charger :</p>
                    <input type="hidden" name="MAX_FILE_SIZE" value="120000" />
                    <input type="file" name="AddCompImg" accept="image/png">
                </div>

                <div>
                    <p>Nouveau nom modal :</p>
                    <textarea maxlength="50" name="AddCompModal"></textarea>
                </div>

                <div>
                    <p>Alt :</p>
                    <textarea maxlength="50" name="AddCompAlt"></textarea>
                </div>

                <input type="submit" value="Ajouter l'expérience" name="submitAddComp">
            </form>
            <div class="message">
                <?php
                if(isset($messageAdd)){
                    echo($messageAdd);
                }
                ?>
            </div>
        </div>

    </main>
    </body>
    </html>

<?php  }
?>