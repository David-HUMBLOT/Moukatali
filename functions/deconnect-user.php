



<?


 
    // $_SESSION = array("");
    unset($_SESSION['user']);
    session_destroy(); //On détruit le cookie de l'identifiant.



?> 


<!-- retour sur index -->

<meta http-equiv="refresh" content="1; url=../index.php" />