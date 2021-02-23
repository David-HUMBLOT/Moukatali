

<!-- METHODE PDO CONNECTION BDD -->

<?php 
function connectPdoBdd(){
   
    try {
        $conn = "sql11394745"; $pass = "Wdc7w3VDnF"; $pdo = new PDO('mysql:host=sql11.freemysqlhosting.net;dbname=sql11394745', $conn, $pass);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $db='sql11394745';
         echo 'METHOD PDO CONNECTION REUSSI AVEC FONCTION connectPdoBdd<br/>'; return $pdo;} 
catch (PDOException $e) {print "Erreur !: " . $e->getMessage() . "<br/>";die();}}
//   ATTENTION NE PAS EFFACER 
//FUNCTION CONNECTION METHODE PDO OK FONCTIONELLE
// connectPdoBdd();

?>












<!-- METHODE SQLI CONNECTION BDD-->

<?php
      function connectSqliBdd(){
        $servername = 'localhost'; $username = 'root'; $password = ''; $dbname = 'moukatali';
        //On établit la connexion
        $conn = new mysqli($servername, $username, $password, $dbname);
        //On vérifie la connexion
        if($conn->connect_error){ die('Erreur : ' .$conn->connect_error);}
        echo 'METHOD SQLI CONNECTION REUSSI AVEC FONCTION connectSqliBdd ';}
//   ATTENTION NE PAS EFFACER 
//   connectSqliBdd();
?>

