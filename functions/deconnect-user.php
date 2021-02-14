<?



function deconnect_user(){
    session_unset();

    // on ecrase toute les variable de session()
    session_destroy();
    
    // header('location:../index.php')
};






?>


<!-- REDIRECTION SUR L INDEX APRES UNE DECONNECTION -->

<meta http-equiv="refresh" content="1; url=../index.php" />