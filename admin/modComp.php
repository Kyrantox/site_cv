<?php
if(isset($_SESSION['mdp'])) {
    if (isset($_POST['submitSuppComp'])) {
        if ($_POST['SuppComp'] == "") {
            $_POST['SuppComp'] = NULL;
        }
        /* On supprime la compétence */
        if (isset($_POST['SuppComp'])) {
            $idComp = $_POST['SuppComp'];
            $rqt = $pdo->prepare('SELECT libelle FROM competence WHERE id_competence = ?');
            $rqt->execute(array($idComp));
            $c = $rqt->fetch();
            $dir = '../Logo/';
            $filename = mb_strtolower($c['libelle']) . ".png";
            $dirfile = $dir . $filename;
            unlink($dirfile);
            $rqt = $pdo->prepare('DELETE FROM competence WHERE id_competence = ?');
            $rqt->execute(array($idComp));
            $SuppMsg = 'Ok. Compétence' . $c['libelle'] . 'supprimée';
        } else {
            $SuppMsg = '<script>alert("Aucune compétence à supprimer n\'a été sélectionnée")</script>';
        }
    }
    /* Ici on modifie la compétence */
    if (isset($_POST['submitModComp'])) {
        if ($_POST['modifCompName'] == "") {
            $_POST['modifCompName'] = NULL;
        }
        if ($_FILES['modifCompImg']['name'] == "") {
            $_FILES['modifCompImg']['name'] = NULL;
        }
        if ($_POST['modifCompTitre'] == "") {
            $_POST['modifCompTitre'] = NULL;
        }
        if ($_POST['modifCompType'] == "") {
            $_POST['modifCompType'] = NULL;
        }
        if ($_POST['modifCompAlt'] == "") {
            $_POST['modifCompAlt'] = NULL;
        }

        if (isset($_POST['modifCompName'])) {
            $idComp = htmlspecialchars($_POST['modifCompName']);
            if (isset($_POST['modifCompTitre'])) {
                $q = $pdo->prepare('SELECT libelle FROM competence WHERE id_competence = ?');
                $q->execute(array($idComp));
                $c = $q->fetch();
                $oldName = htmlspecialchars($c['libelle']);
                $oldNameImage = mb_strtolower('../Logo/' . $oldName . '.png');
                $newName = htmlspecialchars($_POST['modifCompTitre']);
                $newNameImage = mb_strtolower('../Logo/' . $newName . '.png');
                $newDBNameImage = mb_strtolower('Logo/' . $newName . '.png');
                rename($oldNameImage, $newNameImage);
                $rqt = $pdo->prepare('UPDATE competence SET libelle = ?, logo = ? WHERE id_competence = ?');
                $rqt->execute(array($newName, $newDBNameImage, $idComp));
                $messageModName = 'Ok, nom de la compétence définie sur ' . $newName . '<br>';
            }
            if (isset($_POST['modifCompAlt'])) {
                $alt = htmlspecialchars($_POST['modifCompAlt']);
                $rqt = $pdo->prepare('UPDATE competence SET alt = ? WHERE id_competence = ?');
                $rqt->execute(array($alt, $idComp));
                $messageModAlt = 'Ok, alt de l\'image défini sur ' . $alt . '<br>';
            }
            if (isset($_POST['modifCompType'])) {
                $cat = htmlspecialchars($_POST['modifCompType']);
                $rqt = $pdo->prepare('UPDATE competence c JOIN type_competence cc ON c.id_type = cc.id_type SET c.id_type = ? WHERE c.id_competence = ?');
                $rqt->execute(array($cat, $idComp));
                $messageModCat = 'Ok, compétence de ' . $idComp . ' définie sur ' . $cat . '<br>';
            }
            if (isset($_FILES['modifCompImg']['name'])) {
                $uploaddir = '../Logo/';
                $rqt = $pdo->prepare('SELECT libelle FROM competence WHERE id_competence = ?');
                $rqt->execute(array($idComp));
                $c = $rqt->fetch();
                $nomMin = mb_strtolower($c['libelle']);
                $uploadfile = $uploaddir . $nomMin . ".png";
                if (move_uploaded_file($_FILES['modifCompImg']['tmp_name'], $uploadfile)) {
                    $messageModImg = "Ok, image de " . $idComp . ' modifiée <br>';
                } else {
                    echo "Erreur envoi image : " . $_FILES['modifCompImg']['error'];
                }
            }
        }
        /* Les messages de "log" */
        $messageMod = "";
        if (isset($messageModName)) {
            $messageMod = $messageMod . $messageModName;
        } else {
            $messageMod = $messageMod . "Le nom n'a pas été modifié<br>";
        }
        if (isset($messageModAlt)) {
            $messageMod = $messageMod . $messageModAlt;
        } else {
            $messageMod = $messageMod . "Le alt n'a pas été modifié<br>";
        }
        if (isset($messageModCat)) {
            $messageMod = $messageMod . $messageModCat;
        } else {
            $messageMod = $messageMod . "La catégorie n'a pas été modifiée<br>";
        }
        if (isset($messageModImg)) {
            $messageMod = $messageMod . $messageModImg;
        } else {
            $messageMod = $messageMod . "L'image n'a pas été modifiée<br>";
        }
    } else {
        $messageMod = "Veuillez sélectionner une compétence à modifier.";
    }

    /* Ajouts de compétence */
    if (isset($_POST['submitAddComp'])) {
        if ($_POST['AddCompAlt'] == "") {
            $_POST['AddCompAlt'] = NULL;
        }
        if ($_POST['AddCompType'] == "") {
            $_POST['AddCompType'] = NULL;
        }
        if ($_POST['AddCompHrefTxt'] == "") {
            $_POST['AddCompHrefTxt'] = NULL;
        }
        if ($_FILES['AddCompImg']['name'] == "") {
            $_FILES['AddCompImg']['name'] = NULL;
        }
        if ($_FILES['AddCompHref']['name'] == "") {
            $_FILES['AddCompHref']['name'] = NULL;
        }
        if (isset($_POST['AddCompTitre']) && isset($_POST['AddCompAlt']) && isset($_POST['AddCompHrefTxt']) && isset($_POST['AddCompType']) && isset($_FILES['AddCompImg']['name']) && isset($_FILES['AddCompHref']['name'])) {
            $uploaddir = '../Logo/';
            $uploaddirpdf = '../Docs/';
            $nompdf = htmlspecialchars($_POST['AddCompHrefTxt']);
            $nomMinPDF = mb_strtolower(($nompdf));
            $uploadfilepdf = $uploaddirpdf . $nomMinPDF . ".pdf";
            $uploadfilepdfname = 'Docs/' . $nomMinPDF . '.pdf';
            $nomComp = htmlspecialchars($_POST['AddCompTitre']);
            $nomMin = mb_strtolower($nomComp);
            $uploadfile = $uploaddir . $nomMin . ".png";
            $uploadfilename = 'Logo/' . $nomMin . '.png';
            $thealt = htmlspecialchars($_POST['AddCompAlt']);
            $cat = htmlspecialchars($_POST['AddCompType']);
            $rqt = $pdo->prepare('SELECT * FROM competence WHERE libelle = ?');
            $rqt->execute(array($nomComp));
            $compExists = $rqt->rowcount();
            if ($compExists == 0) {
                if (move_uploaded_file($_FILES['AddCompImg']['tmp_name'], $uploadfile) && move_uploaded_file($_FILES['AddCompHref']['tmp_name'], $uploadfilepdf)) {
                    $rqt = $pdo->prepare('INSERT INTO competence(libelle,alt,id_type, logo, href) VALUES (?, ?, ?, ?, ?)');
                    $rqt->execute(array($nomComp, $thealt, $cat, $uploadfilename, $uploadfilepdfname));
                    $messageAdd = 'Ok, compétence' . $nomComp . 'ajoutée';
                } else {
                    echo "Erreur envoi image : " . $_FILES['AddCompImg']['error'];
                }
            } else {
                $messageAdd = 'Une compétence similaire existe déjà.';
            }
        } else {
            $messageAdd = '<script>alert("Veuillez remplir tous les champs")</script>';
        }
    }
}

?>