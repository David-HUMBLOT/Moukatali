


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOSTRAP 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- style.css -->
    <link rel="stylesheet" href="css/styleDav.css">


    <title>Inscription</title>
</head>



<body>
    <!-- HEADER -->
    <header class="header-liste">
        <div class="container">

            <!-- NAVBAR -->
            <nav class="navigation d-flex align-items-center ">
                <a class="navbar-brand" href="index.html" >
                <img src="images/logo_moukatali_noir.png" class="img-fluid mt-2 ml-4"   style="height:6vh; width:22vh;" alt="logo_moukatali_noir.png"></img>
                </a>
                <div class="menu-toggle ">
                    
                        <input class="position" type="checkbox" />
                        <span class="position"></span>
                        <span class="position"></span>
                        <span class="position"></span>
                    
                    <ul class="menu ">
                        <a href="index.html">
                            <li class="text-nav-head">Accueil</li>
                        </a>
                        <a href="liste-sujet.html">
                            <li class="text-nav-head">Moukatages</li>
                        </a>
                        <a href="connection.html">
                            <li class="text-nav-head">Se connecter</li>
                        </a>
                        <a href="profile.html">
                            <li class="text-nav-head">Espace Moukatér</li>
                        </a>
                        <a href="abonnement.html">
                            <li class="text-nav-head">S'abonner</li>
                        </a>
                        <a href="succes.html">
                            <li class="text-nav-head">Mes succès</li>
                        </a>
                        <a href="#">
                            <li class="text-nav-head">Contact</li>
                        </a>
                        <a href="#">
                            <li class="text-nav-head">Se déconnecter</li>
                        </a>
                    </ul>
                </div>
            </nav>

        </div>
    </header>

<div class="box-formulaire">  
<?php
//connection a la bdd
include('functions/server.php');
// include('functions/config.php');
// pour gérer l'enregistrement et la connexion
include('functions/registration-login.php');
?>

</div>






    <!--88888888888888888888888888888888888888888 -->
    <!-- BODDY -->

    <section class="container">
        <div class="row d-flex justify-content-center">

            <!-- TITRE -->
            <div class="mt-5 pt-4 col-12  d-flex column justify-content-center">

                <h1>INSCRIT TOI ICI</h1>

            </div>

            <!-- text -->
            <div class="col-12 mb-5 d-flex  justify-content-center">

                <p class="text-body-1">Mi veu moukater ! &#x1F609; </p>

            </div>

            <!-- FORMULAIRE -->
            <!-- FORMULAIRE D'INSCRIPTION -->
            <div class="mb-5 mx-3 box-formulaire col-lg-6 col-md-6 ">
                <!-- action envoie les donnée a la page register.php pour traitement -->
                <form method="post" action="functions/registration-login.php" class="col p-4 mt-5 mb-5">

                    <!-- PSEUDONYME -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Pseudonyme*</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Tibili 974" title="Choisir un pseudo ou un nom d'utilisateur" required pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" minlength="4" maxlength="30" size="30" value="">
                        </input>

                    </div>
                    <!-- ATTENTION nom et prénom sur la meme ligne ! -->
                    <div class="row  mb-3 d-flex justify-content-between">
                        <!-- NOM -->
                        <div class=" col-6 ">

                            <label for="exampleFormControlInput1" class="form-label">Nom*</label>
                            <input type="text" class="form-control" id="Nom" name="nom" placeholder="DUPONT" title="Veuillez inscrire votre Nom" required pattern="([A-z0-9À-ž\s]){2,}" minlength="4" maxlength="50" size="50" value="">
                            </input>
                        </div>

                        <!-- PRENOM -->
                        <div class="col-6 ">
                            <label for="exampleFormControlInput1" class="form-label">Prénom*</label>
                            <input type="text" class="form-control" id="Prenom" name="prenom" placeholder="Vinshan" title="Veuillez inscrire votre prénom" required pattern="([A-z0-9À-ž\s]){2,}" minlength="4" maxlength="50" size="50" value="">
                            </input>
                        </div>
                    </div>


                    <!-- ATTENTION GENRE ET AGE SUR LA MEME LIGNE-->
                    <div class="row  mb-3 d-flex justify-content-between">
                        <!-- GENRE -->

                        <div class="col md-3  ">

                            <label for="exampleFormControlInput1" class="form-label">Genre</label>

                            <select class="custom-select" id="inputGroupSelect01" name="genre">
                                <option selected>Choisir son genre</option>
                                <option value="1">Homme</option>
                                <option value="2">Femme</option>
                                <option value="2">3ième type</option>
                            </select>
                        </div>


                        <!-- AGE -->
                        <div class="col md-3 ">
                            <label for="exampleFormControlInput1" class="form-label">Age*</label>
                            <input type="number" class="form-control" id="age" name="age" placeholder="18" min="0" max="100" title="" required value="">
                            </input>
                        </div>


                    </div>


                    <!-- PHOTO DE PROFIL -->
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Photo de profil</label>
                        <input class="form-control" type="file" id="formFile" id="profil" name="profil">
                    </div>


                    <!-- EMAIL -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email* </label>

                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" title="Veuillez inscrire votre email" size="60" minlength="3" maxlength="60" required value="">
                        </input>

                    </div>


                    <!-- MOT DE PASSE -->
                    <div class="mb-3 ">
                        <label class="mb-3" for="mot de passe1">Mot de passe* </label>

                        <input type="password" class="form-control" id="password_1" name="password_1" required pattern="?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Saisir un mot de passe" minlength="1" maxlength="20" size="20" value="">
                        </input>

                    </div>

                    <!-- CONFIRMATION MOT DE PASSE-->
                    <div class="mb-3 ">
                        <label class="mb-3" for="mot de passe2">Confirmation* </label>

                        <input type="password" class="form-control" id="password_2" name="password_2" required pattern="?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Confirmation mot de passe" minlength="1" maxlength="20" size="20" value="">
                        </input>

                    </div>

                    <!-- VILLE  -->
                    <div class="md-3  ">

                        <label for="exampleFormControlInput1" class="form-label">Ville</label>

                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Saint-Denis</option>
                            <option value="1">Saint-Marie</option>
                            <option value="2">Saint-Suzanne</option>
                            <option value="2">Tampon</option>
                        </select>
                    </div>

                    <!-- BOUTON INSCRIPTION -->
                    <div class="mt-5 d-flex justify-content-center">
                        <button type="submit" action="" method="post" name="register" class="btn btn-dark">INSCRIPTION</button>

                    </div>
                    <div class="mt-3 d-flex justify-content-center"> <i>(* Champs obligatoires)</i></div>

                    <div class="mt-3 d-flex justify-content-center"><a href="connection.php" class="text-lien-form  pb-2">Déjà un compte pour moukater ? </a><br>
                    </div>
                </form>

            </div>
        </div>

    </section>






    <!-- 888888888888888888888888888888888888888888 -->
    <!-- FOOTER -->

    <footer class=" box-footer  text-center pt-4 mt-5  justify-content-center">
        <a href="#" class="m-2   text-nav-foot">Contact</a>
        <a href="#" class="m-2  text-nav-foot">C.G.V</a>
        <a href="#" class="m-2  text-nav-foot">C.G.U</a>
        <a href="#" class="m-2  text-nav-foot">Mentions légales</a>


    </footer>

    <!-- 888888888888888888888888888888888888888888 -->
</body>




<!--    VUE JS -->
<script>



</script>
<!-- FIN VUE JS -->

</html>