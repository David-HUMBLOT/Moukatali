<?php

// variables utilisateur Admin
$admin_id = 0;
$username = "";
$first_name = "";
$last_name = "";
$email = "";
$role = "";
$role = "Admin";
$topic_title = "";
$topic_description = "";
$errors = array();
$update = false;
$update_topic = false;
$success = array();
// $role = "User";

global $db, $errors, $role, $username, $email, $first_name, $last_name, $success;

require_once('bdd-connect.php');
connectPdoBdd();
echo 'Connection à la base de donnée OK <br/>';
$db = connectPdoBdd();



// si l'utilisateur clique sur le bouton créer un administrateur
if (isset($_POST['create-admin'])) {
    createAdmin($_POST);
}
// si l'utilisateur clique sur l'icône modifier
if (isset($_GET['edit-admin'])) {
    $update = true;
    $admin_id = $_GET['edit-admin'];
    editAdmin($admin_id);
}

// si l'utilisateur clique sur le bouton mettre à jour
if (isset($_POST['update-admin'])) {
    updateAdmin($_POST);
}

// si l'utilisateur clique sur l'icône supprimer
if (isset($_GET['delete-admin'])) {
    $admin_id = $_GET['delete-admin'];
    deleteAdmin($admin_id);
}

// Reçoit les nouvelles données d'administration du formulaire
// Créer un nouvel utilisateur administrateur
// Renvoie tous les utilisateurs administrateurs avec leurs rôles

function createAdmin($request_values)
{


    global $db, $errors, $role, $username, $email, $first_name, $last_name, $success;

    require_once('bdd-connect.php');
    connectPdoBdd();
    echo 'Connection à la base de donnée OK <br/>';







    $username = trim($request_values['username']);
    $first_name = htmlentities(trim(ucwords(strtolower($request_values['first-name']))));
    $last_name = htmlentities(trim(ucwords(strtolower($request_values['last-name']))));
    $email = trim($request_values['email']);
    $password_1 = trim($request_values['password-1']);
    $password_2 = trim($request_values['password-2']);

    if (isset($request_values['role'])) {
        $role = trim($request_values['role']);
    }

    // validation du formulaire: assurez-vous que le formulaire est correctement rempli
    if (empty($username)) {
        array_push($errors, "Entrer un nom d'utilisateur");
    }
    if (empty($first_name)) {
        array_push($errors, "Entrer votre prénom");
    }
    if (empty($last_name)) {
        array_push($errors, "Entrer votre nom");
    }
    if (empty($email)) {
        array_push($errors, "Entrer une adresse mail");
    }
    if (empty($role)) {
        array_push($errors, "Le rôle est requis pour les utilisateurs administrateurs");
    }
    if (empty($password_1)) {
        array_push($errors, "Vous avez oublié le mot de passe");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "les deux mots de passe ne correspondent pas");
    }


    // 888888888888888888888888888888888888888888888888888888888888888888
    // Assurez-vous qu'aucun utilisateur n'est enregistré deux fois
    // l'e-mail et les noms d'utilisateur doivent être uniques
    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // si l'utilisateur existe
        if ($user['username'] === $username) {
            array_push($errors, "Ce nom d'utilisateur existe déjà");
        }
        if ($user['email'] === $email) {
            array_push($errors, "Cet adresse mail existe déjà");
        }
    }
  // 888888888888888888888888888888888888888888888888888888888888888888


 /******************************************************
         * VERIFICATION BOUBLON EMAIL METHODE PDO *
         *************************************************/

        //UN UTILISATEUR NE DOIT PAS POUVOIR S INSCRIRE DEUX FOIS AVEC LES MEME IDENTIFIANT
        // l'e-mail et les noms d'utilisateur doivent être uniques

        echo 'start recherche doublons <br/>';
        $pdo =  connectPdoBdd(); //connection a la bdd
        $reqt  = "SELECT COUNT(*) AS nbr FROM  `users` WHERE  email = '$email' LIMIT 1"; //requete de selection dans table user en fonction de l email
        $reqEmail = $pdo->prepare("SELECT * FROM `users` WHERE email='$email'"); //préparation de la requete
        $reqEmail->execute([$email]);  //EXECUTION DE LA REQUETE
        $doublonEmail = $reqEmail->fetch();  //RECUPERATION RESULTAT DE LA REQUETE AUTREMENT DIT SI UN DOUBLON EST TROUVER EN FONCTION DE L EMAIL FOURNI

        // SI DOUBLON EXISTANT
        if ($doublonEmail) {
            if ($doublonEmail['email'] === $email) {
                array_push($errors, "Attention ! Cette addresse email existe déjà !");
            }
            //SI AUCUN DOUBLON ECHO TEST ET ON CONTINUE
        } else {
            echo 'AUCUN DOUBLON EMAIL TROUVER <br/>';
        }













    // enregistrer l'utilisateur s'il n'y a pas d'erreurs dans le formulaire
    if (count($errors) == 0) {
        // crypter le mot de passe avant de l'enregistrer dans la base de données
        $password = password_hash($password_1, PASSWORD_DEFAULT);



        // 888888888888888888888888888888888888888888888888888888888888888888888888888




        // $query = "INSERT INTO users (pseudo, password) VALUES ('$username', '$password')";
        // mysqli_query($db, $query);
        // 888888888888888888888888888888888888888888888888888888888888888888888888888
        //   FONCTIONNE AVEC CHOIS DU ROLE A L INSCRITION ADMIN
        $db = connectPdoBdd();
        $sql = "INSERT INTO users (  pseudo, prenom, nom, email, password,  role, date_inscription) VALUES ( '$username','$first_name','$last_name', '$email', '$password',  '$role', now())";
        $reqInsert1 = $db->prepare($sql); //preparation de la requete
        $reqInsert1->execute(); //execution de la requete
        $resultReqInsert1 = $reqInsert1;
        var_dump($resultReqInsert1);
        array_push($success, "Compte  créé avec succès ");
        // verification par message erreur
     
       return $success;
       return $errors;
   


        // $requete = "SELECT * from `users` where id = '$id' ";
        // $stmt = $con->query($requete);
        // $user = $stmt->fetch();
        //88888888888888888888888888888888888888888
        // $sql = "UPDATE INTO users ( id, pseudo, prenom, nom, email, password,  role, date_inscription) VALUES ((SELECT id FROM users WHERE pseudo = '$username'), '$username','$first_name','$last_name', '$email', '$password',  '$role', now())";
        // $reqInsert2 = $db->prepare($sql); //preparation de la requete
        // $reqInsert2->execute($sql); //execution de la requete
        //88888888888888888888888888888888888888888
        // mysqli_query($db, $sql);
        //888888888888888888888888888888888888888888888888888888
        // $_SESSION['message'] = "Administrateur créé avec succès";
        // header('Location: form-admin-create.php');
        exit(0);
        //888888888888888888888888888888888888888888888888888888888888888

        // 888888888888888888888888888888888888888888888888888888888888888888888888888
        // $reqt = "INSERT INTO `users` ( pseudo, prenom, nom, age, avatar, ville, telephone, email, password, genre, role, date_inscription) VALUES ( '$pseudo','$prenom','$nom', '$age', '$avatar', '$ville', '$telephone', '$email', '$password_hash', '$genre', '$role', now())";
        // 888888888888888888888888888888888888888888888888888888888888888888888888888


    }
    array_push($success, "Compte  créé avec succès ");
}





// Prend l'ID d'administrateur comme paramètre
// Récupère l'administrateur de la base de données
// définit les champs d'administration du formulaire pour l'édition
function editAdmin($admin_id)
{
    global $db, $username, $role, $update, $admin_id, $email, $first_name, $last_name;

    $sql = "SELECT * FROM `users` WHERE id = $admin_id LIMIT 1";
    $result = mysqli_query($db, $sql);
    $admin = mysqli_fetch_assoc($result);
    // définir les valeurs du formulaire ($ username et $ email) sur le formulaire à mettre à jour
    $username = $admin['pseudo'];
    $first_name = $admin['nom'];
    $last_name = $admin['prenom'];
    $email = $admin['email'];
    $role = $admin['role'];
}

// récupére les entrées du formulaire et met à jour la base de données
function updateAdmin($request_values)
{

    global $db, $errors, $role, $username, $update, $admin_id, $email, $first_name, $last_name;
    // obtenir l'identifiant de l'administrateur à mettre à jour
    $admin_id = $request_values['admin_id'];
    // définir l'état d'édition sur faux
    $update = false;

    $username = trim($request_values['username']);
    $first_name = htmlentities(trim(ucwords(strtolower($request_values['first-name']))));
    $last_name = htmlentities(trim(ucwords(strtolower($request_values['last-name']))));
    $email = trim($request_values['email']);
    $password_1 = trim($request_values['password-1']);
    $password_2 = trim($request_values['password-2']);

    if (isset($request_values['role'])) {
        $role = $request_values['role'];
    }
    // enregistrer l'utilisateur s'il n'y a pas d'erreurs dans le formulaire
    if (count($errors) == 0) {
        // crypter le mot de passe avant de l'enregistrer dans la base de données
        $password = password_hash($password_1, PASSWORD_DEFAULT);

        $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $admin_id";
        /*mysqli_query($db, $query);*/
        if (mysqli_query($db, $query)) {
            echo '1 OK';
        } else {
            exit('ERREUR 1');
        }

        $sql = "UPDATE user_info SET username='$username', first_name = '$first_name', last_name = '$last_name', email = '$email', role = '$role', password = '$password' WHERE user_id = $admin_id";

        //88888888888888888888888888888888888888888
        // $reqInsert = $db->prepare($sql); //preparation de la requete
        // $reqInsert->execute(); //execution de la requete
        //88888888888888888888888888888888888888888

        //88888888888888888888888888888888888888888
        mysqli_query($db, $sql);
        if (mysqli_query($db, $sql)) {
            echo '2 OK';
        } else {
            exit('ERREUR 2');
        }

        $_SESSION['message'] = "L'administrateur a bien été mis à jour";
        header('form-admin-create.php');
        exit(0);
        //88888888888888888888888888888888888888888
    }
}

// supprimer l'utilisateur administrateur
function deleteAdmin($admin_id)
{
    global $db;
    $sql = "DELETE FROM users WHERE id = $admin_id";
    if (mysqli_query($db, $sql)) {
        $_SESSION['message'] = "L'utilisateur a bien été supprimé";
        header("Location:form-admin-create.php");
        exit(0);
    }
}
// 88888888888888888888888888888888888888888888888888888
// FONCTIONNE AU VAR DUMP RECUPERE LES COMPTES SI LE ROLE C EST Admin
function getAdminUsers()
{
    global $db, $roles;
    // $roles = ['Admin', 'Author', 'Moderator', 'User'];
    $role = "Admin";
    $db = connectPdoBdd();
    $sql = "SELECT * FROM users WHERE role = 'Admin'";

    $stmt = $db->query($sql);
    $users = $stmt->fetch();

    // $result = mysqli_query($db, $sql);
    // $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // var_dump($users);
    return $users;
}
// 88888888888888888888888888888888888888888888888888888
function getAllUsers()
{
    global $db, $roles;
    $sql = "SELECT * FROM user_info WHERE role IS NULL";
    $result = mysqli_query($db, $sql);
    $all_users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $all_users;
}
//*******************************************************************************************************************************//
