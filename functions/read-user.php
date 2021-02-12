

<!-- CETTE FONCTION NOUS SERVIRA 0 RECUPERER LES INFORMATIONS EN BDD D UN UTILISATEUR CONNECTER EN FONCTION DE SON ID DE SESSION QUI A ETAIT DEFINIT DANS LA FONCTIO CONNECT-USER LORS DE SA CONNECTION -->
<!-- SERVIRA EGALEMENT A FAIRE AFFICHER SES INFORMATIONS DANS SON PROFIL DIRECTEMENT DEPUIS LA BDD -->




<?php 

//$id sera re affecter avec l id de session lors de l apel de la fonction en parametre genre readUser($_SESSION['user']['id]);

//test en brut


global $id;
$id= 45 ;

function readUserById($id) {
 
   /******************************************
     * CONNECTION A LA BDD (attention : on a l include qui apel la fonction de connection depuis connect-bdd.php) *
     ******************************************/

    require_once('bdd-connect.php');
    // connectPdoBdd();
    echo 'Connection à la base de donnée OK <br/>';


    $con = connectPdoBdd(); //RECUPERATION DE LA FONCTION DE CONNECTION A LA BDD ET STOCKE DANS LA VAR $con
    $requete = "SELECT * from `users` where id = '$id' ";
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    $user = $stmt->fetch();
    if (!empty($row)) {


        //test du resultat de la requete si trouver par id avec id en brut
        var_dump($row);



        return $row[0];
    }
    else{
        echo 'La fonction readUserById n\' as pas fonctionnée ... <br/>';
    }
    
}

// test de notre read user  fonction une fois qu elle est est creer
readUserById(26);

?>




