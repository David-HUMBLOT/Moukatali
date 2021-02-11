

<!-- 
/*********************
* CONNECTION BDD *
*********************/ -->
<!-- 8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888 -->
<!-- CONNECTION PDO A LA BDD A EFFECER PLUS TARD PUISQUE DEJA CREER SUR BDD6CONNECT ON PLACE ICI DANS LE CADRE DES TEST DE LA REQUETE CREATE UTILISATEUR -->
<?php
function connectPdoBdd(){
    try {
        $user = "root"; $pass = ""; $pdo = new PDO('mysql:host=localhost;dbname=moukatali', $user, $pass);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         echo 'METHOD PDO CONNECTION REUSSI AVEC FONCTION connectPdoBdd depuis CREATE USER A EFFACER PLUS TARD <br/>'; return $pdo;} 
catch (PDOException $e) {print "Erreur !: " . $e->getMessage() . "<br/>";die();}}
//   ATTENTION NE PAS EFFACER 
//FUNCTION CONNECTION METHODE PDO OK FONCTIONELLE
// connectPdoBdd();
//  CONNECTION PDO A LA BDD A EFFECER PLUS TARD PUISQUE DEJA CREER SUR BDD6CONNECT ON PLACE ICI DANS LE CADRE DES TEST DE LA REQUETE CREATE UTILISATEUR 
// 8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
?>




<?php  
//8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888 
// on execute fonction de connection ici avec methode pdo A EFFACER PLSU TARD
connectPdoBdd();

//8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888 
?>


<?php 
/*********************
* TEST *
*********************/

//TEST SIMPLE DU BOUTON SI FONCTIONNEL
if(isset($_POST["inscription"])){
    echo 'le boutton register est cliqué localisation create-user.php <br/>';


//     $pseudo = ""; //initialisation
// $avatar = ""; 
// $email = ""; 
// $ville = ""; 
// // $telephone ="";
// $errors = array(); // VAR TABLEAUX QUI RECOIT LES MESSAGES D ERREUR POUR LE FORMULAIRE INSCRIPTION
// $success_reg = false; //POUR DEFINIR LA REUSSITE DE L INSCRIPTION
// $role = "user"; 

// echo 'initialisation des varible ok';
// var_dump($role);
}

/*********************
* INITIALISATION HORS DE LA FONCTION *
*********************/

// INITIALISATION DES VARIBLES DONT CEUX PAR DEFAUT AFIN DE LES TRAITER AVANT REQUETE D INSERTION EN BASE DE DONNEE 
$pseudo = ""; //initialisation
$avatar = ""; 
$email = ""; 
$ville = ""; 
// $telephone ="";
$errors = array(); // VAR TABLEAUX QUI RECOIT LES MESSAGES D ERREUR POUR LE FORMULAIRE INSCRIPTION
$success_reg = false; //POUR DEFINIR LA REUSSITE DE L INSCRIPTION
$role = "user"; 

echo 'EN DEHORS DU ISSET INSCRIPTION INITIALISATION DES VARIABLE  OK <br/>';




//SI LE BOUTON REGISTER EST CLIQUE ALORS :

function create_user(){
    // 888888888888888888888888888888888888888888888888888888888888888888888888888
    if (isset($_POST["inscription"])) {
/*********************
* TRAITEMENT DES VARIABLES POST RECUPERER DEPUIS PAGE INSCRIPTION APRES LE CLIQUE *
*********************/
        // ON RECUPERE LES VALEURS SAISIES DES POSTS ET ON LES TRAITE
        $pseudo = trim($_POST['pseudo']);
        $avatar = $_POST['avatar']; //POUR LA PHOTO DE PROFIL
        $nom = htmlentities(trim(ucwords(strtolower($_POST['nom']))));
        $prenom = htmlentities(trim(ucwords(strtolower($_POST['prenom']))));
        $genre= trim($_POST['genre']); //BOLLEEN EN BDD
        $age = trim($_POST['age']);// TYPE DATE EN BDD
        $email = trim($_POST['email']);
        $telephone = trim($_POST['telephone']);
        $password_1 = trim($_POST['password_1']);
        $password_2 = trim($_POST['password_2']);
        $ville = htmlentities(trim(ucwords(strtolower($_POST['ville']))));
    
    // TEST SI UNE DES VARIABLE QUI RECCUPERE UN POST FONCTIONNE ICI AVEC LE POST PASSWORD
        // var_dump($password_1);



        
















        // 888888888888888888888888888888888888888888888888888888888888888888888888888
        // FIN DU ISSET CLIQUE INSCRIPTIO?
    }
    // 888888888888888888888888888888888888888888888888888888888888888888888888888
    // FIN FONCTION CREATE-USER
}

 



?>