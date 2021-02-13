<!-- CREATE USER WITH VALIDATION FORM AND SECURITY David -->




<?php

function create_user()
{

    /******************************************
     * CONNECTION A LA BDD (attention : on a l include qui apel la fonction de connection depuis connect-bdd.php) *
     ******************************************/

    require_once('bdd-connect.php');
    connectPdoBdd();
    echo 'Connection à la base de donnée OK <br/>';


    /******************************************
     * INITIALISATION des variables *
     ******************************************/
    echo ' Entrer de fonction creat-user <br/>';

    echo ' Inititialisation varibles GLOBAL  <br/>Initialisation  du tableaux des erreurs (IN FONCTIONS)  <br/>';
    // NOUS SERT PAR EXEMPLE A SORTIR LES INFORMATIOSN DU TABLEAUX DES ERREURS DE LA FONCTION
    global $errors, $success_inscription, $role, $pseudo, $email, $nom, $prenom, $pdo,  $password_hash;

    // INITIALISATION DES VARIBLES DONT CEUX PAR DEFAUT AFIN DE LES TRAITER AVANT REQUETE D INSERTION EN BASE DE DONNEE 
    $pseudo = ""; //initialisation
    $avatar = "";
    $email = "";
    $ville = "";
    $password_hash = "";
    // $telephone ="";
    $errors = array(); // VAR TABLEAUX QUI RECOIT LES MESSAGES D ERREUR POUR LE FORMULAIRE INSCRIPTION
    $success_inscription = array();
    $role = "user";
    echo ' suite... fin initilisation ... suite <br/>';

    if (isset($_POST["inscription"])) {
        echo ' Debut de la fonction create user ok <br/>';
        /************************************************************************************
         * TRAITEMENT DES VARIABLES POST RECUPERER DEPUIS PAGE INSCRIPTION APRES LE CLIQUE *
         *********************************************************************************/
        // ON RECUPERE LES VALEURS SAISIES DES POSTS ET ON LES TRAITE
        $pseudo = trim($_POST['pseudo']);
        // $avatar = $_POST['avatar']; 

        //POUR LA PHOTO DE PROFIL
        $avatar = strtolower(time() . '-' . $_FILES['avatar']['name']); //input de type file et securisation strtolower time (a etudier)
        // $avatar = strtolower(time() . '-' . $_FILES[$_POST['avatar']]);


        $nom = htmlentities(trim(ucwords(strtolower($_POST['nom']))));
        $prenom = htmlentities(trim(ucwords(strtolower($_POST['prenom']))));
        $genre = trim($_POST['genre']); //BOLLEEN EN BDD
        $age = trim($_POST['age']); // TYPE DATE EN BDD
        $email = trim($_POST['email']);
        $telephone = trim($_POST['telephone']);
        $password_1 = trim($_POST['password_1']);
        $password_2 = trim($_POST['password_2']);
        $ville = htmlentities(trim(ucwords(strtolower($_POST['ville']))));

        // TEST SI UNE DES VARIABLE QUI RECCUPERE UN POST FONCTIONNE ICI AVEC LE POST PASSWORD
        // var_dump($password_1);
        echo ' suite... fin traitement des variables POST. <br/> Password pas encore haché ...suite <br/>';

        /************************************
         * VALIDATION CHAMPS VIDE *
         ****************************************/
        // ON VERIFIE QUE LES CHAMPS SONT TOUS REMPLIES
        // ON PREPARE LES MESSAGE D ERREUR DANS NOTRE VARIBLE TABLEAUX $ERRORS []
        // Pour tester le echo test d un champs vide il faut au prealable enlever la securité sur le champs a tester. Son required , son pattern et son min ou max
        if (empty($pseudo)) {
            array_push($errors, "Entrer un pseudonyme");
        }

        // TEST SI UN CHAMP EST VIDE
        // echo 'CHAMP VIDE POUR PSEUDO! </br>';
        //     var_dump($errors);
        // 
        if (empty($avatar)) {
            array_push($errors, "Entrer une photo de profil");
            $uploadOk = 0;
        }


        //    // validation image
        //    $maxsize = 600000;
        //    $validExt = array('.jpg', '.jpeg', '.png');
   
        //    if ($_FILES['avatar']['error'] > 0) {
        //        echo ' Une erreur est survenue lors du transfert ';
        //        array_push($errors, "Une erreur est survenue lors du transfert");
        //     //    die; //intermpre le script juste apres l erreur
        //    }
   
        //    $fileSize = $_FILES['avatar']['size'];
        //    echo ($fileSize);
   
        //    if ($fileSize  >  $maxsize) {
        //        echo 'Le fichier de doit pas dépasser 600ko <br/>';
        //        array_push($errors, "Le fichier de doit pas dépasser 600ko <br/>");
        //     //    die;
        //    }
   
        //    // eviter les doublons en images
        //    $fileName = $_FILES['avatar']['name'];

        // //    $fileName = basename($_FILES['avatar']['name']);

        // //    var_dump($fileName);
   
        //    // Recupération de l'extension du fichier.
        //    $fileExt = '.' . strtolower(substr(strrchr($fileName, '.'), 1));

           
   
        //    if (!in_array($fileExt, $validExt)) {
        //        echo 'ERREUR FORMAT. Formats autorisés : jpg, jpeg, png  <br/>';
        //        array_push($errors, "ERREUR FORMAT. Formats autorisés : jpg, jpeg, png  <br/>");
        //     //    die;
        //    }
        //    // eviter les doublons en images
        // //    global $resultat_upload;
        //    $tmpName = $_FILES['avatar']['tmp_name'];
        //    //on recupere le chemin d acces de l image uploder dans notre variable a envoyer en bdd (chemin d acces de l imgage)
        // //    $avatar = $tmpName ;
        //    $uniqueName = md5(uniqid(rand(), true));
        //    $fileName = "../../images/uploads/" .  $uniqueName . $fileExt;
        //    // verification: on recupere le resultat
        //    $resultat_upload = move_uploaded_file($tmpName, $fileName);

        //    move_uploaded_file($_FILES['avatar']['tmp_name'], 'upload/' . basename($_FILES['avatar']['name']));
   
        //    $dirpath = realpath(dirname(getcwd($resultat_upload)));



        //    if($resultat_upload)
        //    {
        //        echo 'Transfert de l\' image terminé !';
        //    }
        //    else{
        //     array_push($errors, "ERREUR");
        // }

    
        $target_dir = "../../images/uploads/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["inscription"])) {
          $check = getimagesize($_FILES["avatar"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
   
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            array_push($errors, "Une erreur est survenue lors du transfert");
            $uploadOk = 0;
          }
        }
        
        // // Check if file already exists
        // if (file_exists($target_file)) {
        //   echo "Sorry, file already exists.";
        //   $uploadOk = 0;
        // }
        
        // Check file size
        if ($_FILES["avatar"]["size"] > 600000) {
          echo "Sorry, your file is too large.";
          array_push($errors, "Une erreur est survenue lors du transfert");
          $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          array_push($errors, "Une erreur est survenue lors du transfert");
          $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
          array_push($errors, "Une erreur est survenue lors du transfert");
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
            $avatar = $_FILES["avatar"]["name"];
            echo "The file ". htmlspecialchars( basename( $_FILES["avatar"]["name"])). " has been uploaded.
            ";
          } else {
            echo "Sorry, there was an error uploading your file.";
            array_push($errors, "Une erreur est survenue lors du transfert");
          }
        }





        


 







        if (empty($nom)) {
            array_push($errors, "Entrer votre nom");
        }
        if (empty($prenom)) {
            array_push($errors, "Entrer votre prenom");
        }
        if (empty($genre)) {
            array_push($errors, "Entrer votre genre");
        }
        if (empty($age)) {
            array_push($errors, "Entrer votre age");
        }

        if (empty($email)) {
            array_push($errors, "Entrer une adresse mail");
        }

        if (empty($telephone)) {
            array_push($errors, "Entrer votre numéro de téléphone");
        }
        if (empty($ville)) {
            array_push($errors, "Entrer votre ville");
        }
        if (empty($password_1)) {
            array_push($errors, "Vous avez oublié le mot de passe");
        }
        // ON VERIFIE SI LES DEUX MOTS DE PASSE SAISIE SONT IDENTIQUES
        echo 'Vérification mots de passe si identique pendant la saisie des POSTS <br/>';
        if ($password_1 != $password_2) {
            array_push($errors, "les deux mots de passe ne correspondent pas");
        }

        echo ' suite .. Fin des vérifications des champs vide .. suite <br/>';

        // Assurez-vous qu'aucun utilisateur n'est enregistré deux fois
        // l'e-mail et les noms d'utilisateur doivent être uniques
        /******************************************************
         * VERIFICATION BOUBLON EMAIL METHODE PDO *
         *************************************************/

        echo 'start recherche doublons <br/>';
        $pdo =  connectPdoBdd();
        $reqt  = "SELECT COUNT(*) AS nbr FROM  `users` WHERE  email = '$email' LIMIT 1";
        $reqEmail = $pdo->prepare("SELECT * FROM `users` WHERE email='$email'");
        $reqEmail->execute([$email]);
        $doublonEmail = $reqEmail->fetch();
        if ($doublonEmail) { // email existant
            if ($doublonEmail['email'] === $email) {
                array_push($errors, "Attention ! Cette addresse email existe déjà !");
            }
        } else { // email n'existe pas
            echo 'AUCUN DOUBLON EMAIL TROUVER <br/>';
        }

        /**********************************************
         * VERIFICATION BOUBLON PSEUDONYME METHODE PDO *
         **********************************************/

        $reqt  = "SELECT COUNT(*) AS nbr FROM  `users` WHERE pseudo = '$pseudo' LIMIT 1";
        $reqPseudo = $pdo->prepare("SELECT * FROM `users` WHERE pseudo='$pseudo'");
        $reqPseudo->execute([$pseudo]);
        $doublonPseudo = $reqPseudo->fetch();
        if ($doublonPseudo) { // email existant
            if ($doublonPseudo['pseudo'] === $pseudo) {
                array_push($errors, "Attention ! Ce Pseudonyme existe déjà !");
            }
        } else { // email n'existe pas
            echo 'AUCUN DOUBLON PSEUDO TROUVER <br/>';
        }

        echo 'Fin de recherche de doublons <br/>';

        /***********************************************
         * INSERTION (CREATE) UTILISATEUR EN BDD *
         ************************************************/

        // ON ENREGISTRE L UTILISATEUR SI IL N Y A AUCUNE ERREUR DANS LE FORMULAIRE
        // ON OUBLIE SURTOUT PAS DE ASSIGNER LE ROLE PAR DEFAUT EN TANT QUE UTILISATEUR
        // SI AUCUNE ERREUR N'EST TROUVE C EST A DIRE SI LA VARIABLE ERRORS RESTE VIDE. ALORS ON EFFECTUE LA REQUETE D INSERTION SQL EN BASE DE DONNEE.

        //CONDITION SI AUCUNE ERREUR EST PRESENTE VAR ERRORS = ["VIDE"];

        if (count($errors) == 0) {
            echo 'debut condition si aucune erreur <br/>';

            array_push($success_inscription, "Inscription réussie !<br/> Veuillez patienter.. ");

            //ON CRYPTE LE MOT DE PASSE AVANT L ENREGISTREMENT DANS LA BASE DE DONNEES
            echo 'Cryptage du mot de passe (hash) <br/>';
            $password_hash = password_hash($password_2, PASSWORD_DEFAULT); //NOUVELLE VARIABLE QUI ACCUILLE LE HASH DU MOT DE PASSE SAISIE QUI A ETE TRAITER EN AMONT

            // Verification du hash

            var_dump($password_hash);

            // resultat = string(60) "$2y$10$/guNGisFaPtfCJysQb9VketX1Vho3MlKDXSvNOZvhYNUtybhaD4vW" 

            echo 'Début de la requete d\' insertion <br/>';

            // TEST REQUETE FONCTIONNELLE EN BDD
            // ATTENTION AU DUPLICATA DES ID ET DES CLE PRIMAIRE COMME PSEUDO
            //INSERT INTO `users` (pseudo, prenom, nom, age, avatar, ville, telephone, email, password, genre, role, date_inscription) VALUES ( "pseudoO","prenom","nom", "34", "avatar", "ville", 0000000000, "email@gmail.com", "hashpasswor", 1, "user", now());

            // REQUETE D INSERTION (CREATION) UTILISATEUR EN BASSE DE DONEE. 13 INFORMATIONS AU TOTAL INSERTION DANS L ODRE DE LA TABLE EN BASSE DE DONNEE
            //  ID EST AUTO INCREMENTER EN BDD

            $reqt = "INSERT INTO `users` ( pseudo, prenom, nom, age, avatar, ville, telephone, email, password, genre, role, date_inscription) VALUES ( '$pseudo','$prenom','$nom', '$age', '$avatar', '$ville', '$telephone', '$email', '$password_hash', '$genre', '$role', now())";

            $reqInsert = $pdo->prepare($reqt); //preparation de la requete
            $reqInsert->execute(); //execution de la requete

            echo 'Fin de la requete d insertion <br/>  Fin de la fonction create-user <br/>';

            //REDIRECTION SUR LA PAGE STATICS DE CONFIRMATION DE L INSCRIPTION
?>
            <meta http-equiv="refresh" content="1; url=../pages/reussite-inscription.php" /><?php 

                                                                                            }
                                                                                            // 888888888888888888888888888888888888888888888888888888888888888888888888888
                                                                                            // FIN CONDITION IF COUNT ERRORS == 0{}
                                                                                        }
                                                                                        // 888888888888888888888888888888888888888888888888888888888888888888888888888
                                                                                        // FIN DU ISSET CLIQUE INSCRIPTION
                                                                                    }
                                                                                    // 888888888888888888888888888888888888888888888888888888888888888888888888888
                                                                                    // FIN FONCTION CREATE-USER
                                                                                    echo 'sorti de la fonction <br/>'

                                                                                                ?>