<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UploadFile</title>
</head>

<body>


    <!-- ajout image et upload sur dossier depuis un formulaire -->
    <form method="POST" enctype="multipart/form-data">

        <input type="file" name="uploaded_file"></input> <br />
        <input type="submit" name="inscription"></input><br />

    </form>


    <!-- script php gestion upload (a placer a notre fonction lié au formulaire) -->
    <?php

    if (isset($_POST['inscription'])) {
        echo 'ok <br/>';
        // validation image
        $maxsize = 600000;
        $validExt = array('.jpg', '.jpeg', '.png');

        if ($_FILES['uploaded_file']['error'] > 0) {
            echo ' Une erreur est survenue lors du transfert ';
            die; //intermpre le script juste apres l erreur
        }

        $fileSize = $_FILES['uploaded_file']['size'];
        echo ($fileSize);

        if ($fileSize  >  $maxsize) {
            echo 'Le fichier de doit pas dépasser 600ko <br/>';
            die;
        }

        // eviter les doublons en images
        $fileName = $_FILES['uploaded_file']['name'];

        // Recupération de l'extension du fichier.
        $fileExt = '.' . strtolower(substr(strrchr($fileName, '.'), 1));

        if (!in_array($fileExt, $validExt)) {
            echo 'ERREUR IMAGES. Formats autorisés : jpg, jpeg, png  <br/>';
            die;
        }
        // eviter les doublons en images
        $tmpName = $_FILES['uploaded_file']['tmp_name'];
        $uniqueName = md5(uniqid(rand(), true));
        $fileName = "upload/" .  $uniqueName . $fileExt;
        // verification: on recupere le resultat
        $resultat_upload = move_uploaded_file($tmpName, $fileName);

        if($resultat_upload)
        {
            echo 'Transfert de l\' image terminé !';
        }


    }


    ?>


</body>

</html>