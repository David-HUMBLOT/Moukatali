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
    <form action="POST" enctype="multipart/form-data">

    <input type = "file" name = "upload_file"></input> <br/>
    <input type = "submit"  name="inscription">
    
    </form>


<!-- script php gestion upload (a placer a notre fonction lié au formulaire) -->
    <?php  
    
if(isset($_POST['inscription'])){
    echo 'ok';
}


    ?>


</body>
</html>