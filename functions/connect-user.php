<!-- CONNETION USER WITH VALIDATION FORM AND SECURITY David -->
<!-- NE PAS OUBLIER DE LANCER UNE SESSION ET DE STOCKER DES INFOS EN VARIABLES DE SESSION -->


<?php

echo 'hors de la finction connecion <br/>';
function connect_user(){
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
     global $errors, $role, $pseudo, $email, $nom, $prenom, $pdo,  $password_hash;




// fin function user
}

?>
