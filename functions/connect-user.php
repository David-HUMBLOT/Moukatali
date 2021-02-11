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
    global $errors, $email, $password_connect, $pdo;

    // INITIALISATION DES VARIABLES DONT CEUX PAR DEFAUT AFIN DE LES TRAITER AVANT REQUETE DE RECUPERATION EN BASE DE DONNEE 

    $email = "";
    $password_connect = "";




    echo ' suite... fin initilisation ... suite <br/>';





































    // fin function user
}

?>