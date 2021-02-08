<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Slackey&display=swap"
        rel="stylesheet">

    <!-- style.css -->
    <link rel="stylesheet" href="css/styleDav.css">

    <title>Connection</title>
</head>

<body>


    <!-- HEADER -->
    <header class="header-liste" id="id-navbar">
        <div class="container ">
            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand " href="index.php">
                    <img src="images/logo_moukatali_noir.png" class="img-fluid" style="height:5vh;"
                        alt="logo_moukatali_noir.png"></img>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-center  font-weight-bold text-nav-head"
                                href="inscription.php">INSCRIPTION</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-center  font-weight-bold text-nav-head"
                                href="liste-sujet.php">VISITER</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-center  font-weight-bold text-nav-head"
                                href="abonnement.php">Abonnement</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-center  font-weight-bold text-nav-head"
                                href="profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center  font-weight-bold text-nav-head" href="index.php">
                                RETOUR</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <!-- BODDY -->
    <!-- 
    <h5 class="text-danger h4">Menu</h5>
    <span class="ml-4 text-nav-head"><a href="liste-sujet.html">Visiter</a></span>
    <span class="ml-4 text-nav-head"><a href="abonnement.html">Mi veut plis !</a></span>
    <span class="ml-4 text-nav-head"><a href="connection.html">Allon moukater!!</a></span>
    <span class="ml-4 text-nav-head"><a href="inscription.html">Pas encore de compte ?</a></span>
</div> -->


    <section class="container">
        <div class="row d-flex justify-content-center">
            
            <!-- TITRE -->
            <div class="mt-5 pt-4 col-12  d-flex column justify-content-center">

                <h1>CONNECTE TOI VITE</h1>

            </div>

            <!-- text -->
            <div class="col-12 mb-5 d-flex  justify-content-center">

           
                <p class="text-body-1">Oté !! Allon moukat à li ! &#x1F609; </p>
               

            </div>
            

            <!-- FORMULAIRE D'INSCRIPTION -->
            <div class="mb-5 mx-3 box-formulaire col-lg-6 col-md-8 ">
                <form class="col p-4 mt-5 mb-5" method="" action="">



                    <!-- EMAIL -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email* </label>

                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                            title="Veuillez inscrire votre email" size="60" minlength="3" maxlength="60" required
                            value="">
                        </input>

                    </div>


                    <!-- MOT DE PASSE -->
                    <div class="mb-3 ">
                        <label class="mb-3" for="mot de passe1">Mot de passe* </label>

                        <input type="password" class="form-control" id="password-1" name="password-1" required
                            pattern="?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            title="Saisir un mot de passe" minlength="1" maxlength="20" size="20" value="">
                        </input>

                    </div>


                    <!--  BOUTON CONNEXION -->
                    <div class="mt-5 d-flex justify-content-center">
                        <button type="button" class="mb-3 btn btn-dark">CONNEXION</button>

                    </div>
                    <div class="mt-1 d-flex justify-content-center"> <i>(* Champs obligatoires)</i></div>

                    <div class="mt-3 d-flex justify-content-center"><a href="inscription.php"
                            class="text-lien-form pb-2">Pas
                            encore de compte !? Inscrit toi ici !! </a><br>
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


<!--    VUE JS -->
<script>


</script>
<!-- FIN VUE JS -->

</html>