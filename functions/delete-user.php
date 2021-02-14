<!-- DELETE USER ACCOUNT -->


<!-- Pour supprimer le compte il faut d abord savoir qu'elle compte on va suprrimer donc il faut avoir l id de session en cour avant de pouvoir selectionner le compte en bdd et le supprimer DELETE définitivement -->


<?php

function delete_user()
{
    // INCLUSION DES INFORMATION DE CONNECTION
    require_once('bdd-connect.php');
    connectPdoBdd();
    echo 'Connection à la base de donnée OK <br/>';
    // INITIALISATION
    global  $pdo, $delete_id_user;
    $delete_id_user = $_SESSION['user']['id'];

    // si le bouton supprimer est cliqué alors :
    if (isset($_POST['supprimer'])) {
        // requete de suppression methode PDO
        $pdo =  connectPdoBdd(); //stockage de la connection à la bdd dans la variables $pdo
        $reqt = " DELETE FROM `users` WHERE id = $delete_id_user"; //supprime la ligne du compte en repérant l id en bdd en fontion de l id de session . L id de session est stocker dans la varaible $delete_id_user.
        $reqUpdate = $pdo->prepare($reqt); //preparation de la requete
        $reqUpdate->execute(); //execution de la requete
    }
}
?>