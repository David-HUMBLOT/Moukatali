<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succes</title>



    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>


        <link rel="stylesheet" href="css/style-profil-succes.css">
    <link rel="stylesheet" href="css/styleDav.css">

</head>

<body>

   <!-- HEADER -->
   <header class="header-liste">
    <div class="container">

        <!-- NAVBAR -->
        <nav class="navigation d-flex align-items-center ">
            <a class="navbar-brand" href="index.php" >
            <img src="images/logo_moukatali_noir.png" class="img-fluid mt-2 ml-4"   style="height:6vh; width:22vh;" alt="logo_moukatali_noir.png"></img>
            </a>
            <div class="menu-toggle ">
                
                    <input class="position " type="checkbox" />
                    <span class="position"></span>
                    <span class="position"></span>
                    <span class="position"></span>
                
                <ul class="menu ">
                    <a href="index.php">
                        <li class="text-nav-head">Accueil</li>
                    </a>
                    <a href="liste-sujet.php">
                        <li class="text-nav-head">Moukatages</li>
                    </a>
                    <a href="connection.php">
                        <li class="text-nav-head">Se connecter</li>
                    </a>
                    <a href="profile.php">
                        <li class="text-nav-head">Espace Moukatér</li>
                    </a>
                    <a href="abonnement.php">
                        <li class="text-nav-head">S'abonner</li>
                    </a>
                    <a href="succes.php">
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




    <!------------------------------------------------------------------------------------------------->

    <!-- user_info -->
    <div class="row d-flex justify-content-center">
        <!-- TITRE -->
        <div class="mt-5 pt-4 col-12  d-flex column justify-content-center">
            <h1>Ton profil (user)</h1>
        </div>
        <!-- text -->
        <div class="col-12 mb-5 d-flex  justify-content-center">
            <p class="text-body-1">Vérifier ou modifier ses infos! &#x1F609; </p>
        </div>
    </div>


    <section class="container ">
        <div class="row d-flex justify-content-center mx-3">
            <!-- CONTAINER  -->
            <!-- <h3 class="pt-3 mb-5 text-white text-center">DASHBOARD</h3> -->
        

            <div class="row d-flex justify-content-center mb-5   col-lg-6 col-md-6" id="box-formulaire">
                <!-- user_info -->
                <div id="avatar">

                    <!-- photo_de_profile -->
                    <div class="row mt-5 ">
                        <div class="col text-center avatar-profil ">
                            <img src="images/Capture d’écran 2021-01-25 222915.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <!-- OK OK OK OK -->

                    <!-- Score Rang Statut -->
                    <div class="text-dark d-flex justify-content-around fw-bolder mb-3">
                        <p>SCORE</p>
                        <p>RANG</p>
                        <p>STATUT</p>
                    </div>


                    <!---Information user (NOM, Prénom, Addresse, Tel Sexe...)-->
       <div class="row ">
        <div class="text-dark d-flex flex-column text-center">

            <p>Nom / Prénom</p>
            <p>Date_naissance / Genre</p>
            <p>Age / Tel</p>
            <p>Addresse</p>

        </div>
    </div>
                    <!-- mes  succès et modifier profile -->
                    <div class="container-fluid d-flex justify-content-around mb-3  " style="height: 40px;">
                        <a href="succes.html"><button id="btn_succes"
                                class="btn btn-dark text-light  rounded-pill btn-sm fw-bolder" type="submit">
                                Success</button></a>


                        <!-- <button id="btn_editer" class="btn btn-dark text-light  rounded-pill btn-sm fw-bolder"
                    type="submit">Editer</button> -->


                        <a href="modifier.html"><button id="btn_succes"
                                class="btn btn-dark text-light  rounded-pill btn-sm fw-bolder" type="submit">Modifier
                                profil</button></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="box-footer  text-center pt-4 mt-5  justify-content-center">
        <a href="#" class="m-2   text-nav-foot">Contact</a>
        <a href="#" class="m-2  text-nav-foot">C.G.V</a>
        <a href="#" class="m-2  text-nav-foot">C.G.U</a>
        <a href="#" class="m-2  text-nav-foot">Mentions légales</a>

    </footer>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@next"></script>
    <!-- MON SCRIPT -->
    <script src="/script/script.js"></script>
</body>
 
</html>