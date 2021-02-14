<?



function deconnectUser(){
   

       // DECONNECTION SESSION
       if (isset($_GET['deconnection'])) {
        session_destroy();
        unset($_SESSION['user']);
        header('location: ../../index.php');
       
    }


   



};






?>


<!-- REDIRECTION SUR L INDEX APRES UNE DECONNECTION -->

<meta http-equiv="refresh" content="1; url=../index.php" />