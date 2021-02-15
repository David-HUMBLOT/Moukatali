<?php

$title = "";
$topic_description = "";
$picture = "";
$topic_id = 0;
$published = 0;
$update_topic = false;


global $db, $success, $errors;
// récupére tous les topics de la BDD
function getAllTopics()
{

    global $db;
    // L'administrateur peut afficher tous les topics
    // L'auteur ne peut voir que ses topics
    if ($_SESSION['user']['role'] == "admin") {
        $sql = "SELECT * FROM topics";
    } elseif ($_SESSION['user']['role'] == "author" || $_SESSION['user']['role'] == "moderator") {
        $user_id = $_SESSION['user']['id'];
        return $user_id;
        var_dump($user_id);
        // 88888888888888888888888888888888888888888888888888888
        //Selectionne quel id de topic et lié a celui de l id de l utilisateur en fonction de son role
        $sql = "SELECT * FROM topics WHERE id = $user_id";
        // 88888888888888888888888888888888888888888888888888888
    }


    $result = mysqli_query($db, $sql);
    $topics = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $final_topics = array();
    foreach ($topics as $topic) {
        $topic['author'] = getTopicAuthorById($topic['user_id']);
        array_push($final_topics, $topic);
    }
    return $final_topics;
}


// récupére l'auteur d'un topic
function getTopicAuthorById($user_id)
{

    global $db;

    $sql = "SELECT username FROM users WHERE id = $user_id";
    $result = mysqli_query($db, $sql);
    if ($result) {
        // retourner le nom d'utilisateur
        return mysqli_fetch_assoc($result)['username'];
    } else {
        return null;
    }
}

// si l'utilisateur clique sur le bouton créer une publication
if (isset($_POST['create-topic'])) {
    createTopic($_POST);
}

// si l'utilisateur clique sur l'icône modifier
if (isset($_GET['edit-topic'])) {
    $update_topic = true;
    $topic_id = $_GET['edit-topic'];
    editTopic($topic_id);
}

// si l'utilisateur clique sur le bouton de mise à jour
if (isset($_POST['update-topic'])) {
    updateTopic($_POST);
}

// si l'utilisateur clique sur le bouton Supprimer la publication
if (isset($_GET['delete-topic'])) {
    $topic_id = $_GET['delete-topic'];
    deleteTopic($topic_id);
}

global $db, $errors, $user_id;

// 88888888888888888888888888888888888888
// $user_id est définit a ce stade
var_dump($user_id);

global $db, $errors, $success;

function createTopic($request_values)
{
    if (isset($_POST["create-topic"])) {
        $picture = strtolower(time() . '-' . $_FILES['picture']['name']);
        $title = htmlentities(trim($_POST['title']));
        $topic_description = htmlentities(trim($_POST['topic-description']));
        global $db, $errors, $success;

        // global $user_id;

        $user_id = $_SESSION['user']['id'];
        var_dump($user_id);



        // 88888888888888888888888888888888888888888888888888888888888888

        // 88888888888888888888888888888888888888888888888888888888888888
        // $picture = strtolower(time() . '-' . $_FILES['picture']['name']);
        // $title = htmlentities(trim($request_values['title']));
        // $topic_description = htmlentities(trim($request_values['topic-description']));
        //88888888888888888888888888888888888888888888888888888888888888
        // validation formulaire
        if (empty($title)) {
            array_push($errors, "Entrer un titre");
            return $errors;
            die;
        }
        if (empty($topic_description)) {
            array_push($errors, "Entrer une description");
            return $errors;
            die;
        }
        if (empty($picture)) {
            array_push($errors, "Entrer une photo de profil");
            return $errors;
            $uploadOk = 0;
            die;
        }
        //88888888888888888888888888888888888888888888888888888888888888888888888888888888888
        // PARAMETRAGE DES VARIBLES D ACCES, EXTENSION, UPLOAD, ET DU DOSSIER DE DESTINATION DES IMAGES UPLOADER
        $target_dir = "../../images/uploads/";  //chemin du sossier ou les fichiers seront uploader
        $target_file = $target_dir . basename($_FILES["picture"]["name"]); //parametrage du nom de l image
        $uploadOk = 1; //condition si uplooad aboutie
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); //définition de l extension de l image
        // _______________________________________________________________________________________________

        //VERIFICATION SI L IMAGE EST UNE VRAI OU UNE FAUSSE

        $check = getimagesize($_FILES["picture"]["tmp_name"]);
        if ($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";


            $uploadOk = 1;
        } else {
            // echo "File is not an image.";
            array_push($errors, "Ce fichier n'est pas une image !");
            return $errors;
            $uploadOk = 0; //CONDITION = 0 CAR N EST PAS UNE IMAGE
            die;
        }

        // _____________________________________________________________________________________________
        // VERIFICATION DE LA TAILLE DE L IMAGE
        if ($_FILES["picture"]["size"] > 600000) {
            // echo "Sorry, your file is too large.";
            array_push($errors, "Image volumineuse ! Elle ne doit pas  dépasser 600ko .");
            return $errors;
            $uploadOk = 0;  //CONDITION = 0 CAR N EST TROP VOLUMINEUSE
            die;
        }
        // __________________________________________________________________________________________
        // VERIFICATION DES EXTENSIONS
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"

        ) {
            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            array_push($errors, "Format d'image non accepté ! Requis : png, pjeg ou png");
            return $errors;
            $uploadOk = 0;
            die;
        }
        // ____________________________________________________________________________________________
        // VERIFICATION SI UNE ERREUR IMAGE EST SURVENUE
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            array_push($errors, "Désoler, votre image n'as pas été transférées.");
            // SI AUCUNE ERREUR ALORS ON PRECEDE AU TELECHARGEMENT DANS LE DOSSIER UPLOAD PREALABLEMENT CREER.
            // LA FONCTION MOVE UPLOAD FILE PREND DEUX PARAMETRE (VARIABLE DE NOTRE IMAGE TRAITER  , SON CHEMIN DE DESTINATION)
        } else {
            // CONDITION QUAND TRANSFERT REUSSI
            if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)) {
                $picture = $_FILES["picture"]["name"];
                // echo "The file " . htmlspecialchars(basename($_FILES["picture"]["name"])) . " has been uploaded. ";
            }
            // CONDITION QUAND LE TRANSFERT ECHOUE
            else {
                echo "Sorry, there was an error uploading your file.";
                array_push($errors, "Désolé, une erreur est survenue lors du transfert ... Veuillez recommençer.");
                return $errors;
            }
        }
    }



    // return $errors;
    // créer si aucune erreur
    if (count($errors) == 0) {
        // 8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
        // GOOD

        array_push($success, "Inscription réussie !<br/> Veuillez patienter.. ");
        $sql = "INSERT INTO topics ( titre, image, topic_description, quota_vote, date_creation) VALUES( '$title', '$picture', '$topic_description', 0, now())";
        $reqInsert = $db->prepare($sql); //preparation de la requete
        $reqInsert->execute(); //execution de la requete
        // 8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
        // $query = "INSERT INTO topics (id, titre, image, topic_description, nb_comment, vote_for, vote_against, published, creation_date, update_date) VALUES($user_id, '$picture', '$title', '$topic_description', 0, 0, 0, 0, now(), now())";
        // 8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888
        // if (mysqli_query($db, $query)) { // si le sujet a été insérer avec succès

        //     $_SESSION['message'] = "Sujet créé avec succés";
        //     echo "Sujet créé avec succés";
        //     header('location: subject.php');
        //     exit(0);
        // }
        return $errors;
        return $success;
    }
}


/* * * * * * * * * * * * * * * * * * * * *
* - Prend l'identifiant de publication comme paramètre
* - Récupère le message de la base de données
* - définit les champs de publication sur le formulaire pour modification
* * * * * * * * * * * * * * * * * * * * * */
function editTopic($topic_id)
{
    global $db, $title, $topic_description, $update_topic, $topic_id;
    $sql = "SELECT * FROM topics WHERE id = $topic_id LIMIT 1";
    $result = mysqli_query($db, $sql);
    $topic = mysqli_fetch_assoc($result);
    // définir les valeurs du formulaire sur le formulaire à mettre à jour
    $title = $topic['title'];
    $topic_description = $topic['topic_description'];
}

function updateTopic($request_values)
{
    global $db, $errors, $title, $picture, $topic_id, $topic_description;

    $topic_id = $_POST['topic-id'];
    $title = trim($request_values['title']);
    $topic_description = htmlentities(trim($request_values['topic-description']));


    // validation formulaire
    if (empty($title)) {
        array_push($errors, "Entrer un titre");
    }
    if (empty($topic_description)) {
        array_push($errors, "Entrer une description");
    }

    // si une nouvelle image vedette a été fournie
    if (isset($_POST['picture'])) {
        $picture = strtolower(time() . '-' . $_FILES['picture']['name']);
        // pour le téléchargement de l'images
        // $target_dir = ROOT_PATH . '/public/images/upload/' . basename($picture);
        // VALIDATION
        // valider la taille de l'image, la taille est calculée en octet
        if ($_FILES['picture']['size'] > 200000) {
            array_push($errors, "La taille de l'image ne doit pas dépasser 200 ko");
        }
        // On vérifie l'extension et la taille de l'image
        $picture_ext = pathinfo($picture, PATHINFO_EXTENSION); // ou $picture_ext = pathinfo($picture)['extension'];
        if (!in_array($picture_ext, ['jpg', 'jpeg', 'png'])) {
            array_push($errors, "Votre image doit être .jpg, .jpeg ou .png");
        }
        if (empty($errors)) {
            //   if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_dir)) {
            $results = mysqli_query($db, "SELECT * FROM topics WHERE id = $topic_id");
            $topics = mysqli_fetch_all($results, MYSQLI_ASSOC);
            /*
            $file = ROOT_PATH . '/public/images/upload/' . $topics[0]['picture'];
            $del_file = fopen($file);
            fclose($del_file);
            *//*
            if (file_exists($file)) {
              unlink($file);
            }*/

            $query = "UPDATE topics SET picture = '$picture' WHERE id = $topic_id";
            mysqli_query($db, $query);
        } else {
            array_push($errors, "Une erreur s'est produite lors du téléchargement du fichier");
        }
    }
}

// // enregistrer le sujet s'il n'y a pas d'erreurs dans le formulaire
// if (count($errors) == 0) {
//     $query = "UPDATE topics SET title = '$title', topic_description = '$topic_description', update_date = now()  WHERE id = $topic_id";

//     if (mysqli_query($db, $query)) {
//         $_SESSION['message'] = "le sujet a été mis à jour.";
//         header('location: subject.php');
//         exit(0);
//     } else {
//         echo 'ERREUR BDD';
//     }
// }
// }

// supprimer topic
function deleteTopic($topic_id)
{
    global $db;
    $sql = "DELETE FROM topics WHERE id = $topic_id";
    if (mysqli_query($db, $sql)) {
        $_SESSION['message'] = "Le sujet a bien été supprimé";
        header("location: subject.php");
        exit(0);
    }
}
/*
// si l'utilisateur clique sur le bouton de publication de l'article
if (isset($_GET['publish']) || isset($_GET['unpublish'])) {
	$message = "";
	if (isset($_GET['publish'])) {
		$message = "Sujet publié";
		$topic_id = $_GET['publish'];
	} else if (isset($_GET['unpublish'])) {
		$message = "Le sujet n'est pas publié";
		$topic_id = $_GET['unpublish'];
	}
	togglePublishTopic($topic_id, $message);
}
// activer - desactiver
function togglePublishTopic($topic_id, $message)
{
	global $db;
	$sql = "UPDATE topics SET published = !published WHERE id = $topic_id";

	if (mysqli_query($db, $sql)) {
		$_SESSION['message'] = $message;
		header("location: topics.php");
		exit(0);
	}
}
*/
if (isset($_GET)) {
    if (isset($_GET['publish'])) {
        $topic_id = $_GET['publish'];
        $query = "UPDATE topics SET published = 0 WHERE published = 1";
        mysqli_query($db, $query);
        $sql = "UPDATE topics SET published = 1 WHERE id = $topic_id";
        mysqli_query($db, $sql);
    }
    if (isset($_GET['unpublish'])) {
        $topic_id = $_GET['unpublish'];
        $query = "UPDATE topics SET published = 1 WHERE published = 0";
        mysqli_query($db, $query);
        $sql = "UPDATE topics SET published = 0 WHERE id = $topic_id";
        mysqli_query($db, $sql);
    }
}
