<!-- CONNETION USER WITH VALIDATION FORM AND SECURITY David -->
<!-- NE PAS OUBLIER DE LANCER UNE SESSION ET DE STOCKER DES INFOS EN VARIABLES DE SESSION -->


<?php

echo 'hors de la finction connecion <br/>';
function connect_user()
{
    echo 'début de la function de connection <br/>';

    /******************************************
     * CONNECTION A LA BDD (attention : on a l include qui apel la fonction de connection depuis connect-bdd.php) *
     ******************************************/


    require_once('bdd-connect.php');
    connectPdoBdd();
    echo 'Connection à la base de donnée OK <br/>';


    /******************************************
     * INITIALISATION des variables *
     ******************************************/

    echo ' Entrer de fonction connect-user <br/>';
    echo ' Inititialisation varibles GLOBAL  <br/>Initialisation  du tableaux des erreurs (IN FONCTIONS)  <br/>';

    // NOUS SERT PAR EXEMPLE A SORTIR LES INFORMATIOSN DU TABLEAUX DES ERREURS DE LA FONCTION
    global $errors, $email, $password_connect, $pdo ,$db;

    // INITIALISATION DES VARIABLES DONT CEUX PAR DEFAUT AFIN DE LES TRAITER AVANT REQUETE DE RECUPERATION EN BASE DE DONNEE 

    $email = "";
    $password_connect = "";
    $errors = array();


    echo 'Traitement des champs saisie <br/>';
    if (isset($_POST['connection'])) {
        $email = trim($_POST['email']);
        $password_connect = trim($_POST['password-connect']);


        echo 'Traitement des champs vides <br/>';
        if (empty($email)) {
            array_push($errors, "Saisir une adresse email !");
        }
        // if (empty($password_connnect)) {
        //     array_push($errors, "Mot de passe requis");
        // }

        var_dump($errors);
        echo ' vérification des conditions <br/>';
        if (empty($errors)) {
            
            echo 'Requete de recherche en bdd. <br/>';
            $pdo =  connectPdoBdd();
            $reqt  = "SELECT COUNT(*) AS nbr FROM  `users` WHERE  email = '$email' LIMIT 1";
            $reqEmail = $pdo->prepare("SELECT * FROM `users` WHERE email='$email'");
            $reqEmail->execute([$email]);
            $doublonEmail = $reqEmail->fetch();
            echo 'Vérification du mot de passe et de l\' email. <br/>';
            if ($doublonEmail) { // email existant

                // VERIFICATION DES CHAMPS SAISIE AVEC LES MATCH EN BDD
                // VERIFICATION DES CORRESPONDANCE DES MOTS DE PASSE (saisie à l'input et présente en bdd)
                // utilisation de la fonction password_verify qui compart le hasf password en bdd avec le mot de passe saisie à l'input lors de la connection
                // password_verify entre $password_connect et $doublonEmail['PASSWORD et non pas PASSWORD-CONNECT]. PASSWORD car cela correspond a commebnt il est nommé en bdd sur les ligne.

        
                if ($doublonEmail['email'] === $email && password_verify($password_connect, $doublonEmail['password']))  {
                  echo 'compte trouvé en bdd ok <br/>';
                }
            } else { // email n'existe pas
                array_push($errors, "Votre compte n\' existe pas ! <br/>!");
            }
        }
        // fin verification en bdd







    }




































    // fin function user
}

?>