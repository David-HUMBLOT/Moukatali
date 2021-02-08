<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOSTRAP 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

    <!-- style.css -->
    <link rel="stylesheet" href="css/styleDav.css">

    <title>abonnement</title>
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

    <section class="container">
        <div class="row d-flex justify-content-center">
            <!-- CONNNECTER EN TANT QUE -->


            <!-- TITRE -->
            <div class="mt-5 pt-4 col-12  d-flex column justify-content-center">

                <h1>MES ABONNEMENTS</h1>

            </div>

            <!-- text -->
            <div class="col-12 mb-5 d-flex  justify-content-center">

           
                <p class="text-body-1">Mi souhaite en plis! &#x1F609; </p>
               

            </div>

        <!-- OFFRE -->
        <div class="col row d-flex justify-content-around">
            <div class="card mb-3 " style="max-width: 500px;">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex">
                        <img src="/images/1euro.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Offre VIP (La Villa)</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 500px;">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex">
                        <img src="/images/2euro.jpg" class="img-fluid " alt="...">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">Offre classique (da Kour)</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- ABONNEMENT FORMULAIRE -->

    <div class="d-flex justify-content-center mt-5 mx-3"  >
        <div class="mb-5 box-formulaire col-lg-4 col-md-4 col-sm-4" >
            <form class="col p-4 mt-5 mb-5" method="" action="">


                <!-- CHOIX DE L OFFRE -->
                <div class="md-3 mb-3">

                    <label class="mb-3" for="exampleFormControlInput1" class="form-label">Choisir offre</label>

                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>--</option>
                        <option value="1">VIP (2€/mois)</option>
                        <option value="2">Classique (1€/mois)</option>

                    </select>
                </div>



                <!-- ATTENTION nom et prénom sur la meme ligne ! -->

                <div class="row  mb-3 d-flex justify-content-between">
                    <!-- NOM -->
                    <div class=" col-6 ">

                        <label for="exampleFormControlInput1" class="form-label">Nom*</label>
                        <input type="text" class="form-control" id="Nom" name="Nom" placeholder="DUPONT"
                            title="Veuillez inscrire votre Nom" required pattern="([A-z0-9À-ž\s]){2,}" minlength="4"
                            maxlength="50" size="50" value="">
                        </input>
                    </div>

                    <!-- PRENOM -->
                    <div class="col-6 ">
                        <label for="exampleFormControlInput1" class="form-label">Prénom*</label>
                        <input type="text" class="form-control" id="Prenom" name="Prenom" placeholder="Vinshan"
                            title="Veuillez inscrire votre prénom" required pattern="([A-z0-9À-ž\s]){2,}" minlength="4"
                            maxlength="50" size="50" value="">
                        </input>
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email* </label>

                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                        title="Veuillez inscrire votre email" size="60" minlength="3" maxlength="60" required value="">
                    </input>

                </div>

                <!-- TYPE DE LA CARTE -->
                <div class="md-3 mb-3">

                    <label class="mb-3" for="exampleFormControlInput1" class="form-label">Type de carte bancaire</label>

                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>--</option>
                        <option value="1">ELECTRON</option>
                        <option value="2">VISA </option>
                        <option value="2">VITAL </option>
                        <option value="2">GOLDEN </option>

                    </select>
                </div>

                <!--    Numéro de la carte -->
                <div class="md-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numéro de la carte (14 chiffres)</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="XXXX XXXXXX XXX" min="0"
                        max="100" title="" required value="">
                    </input>
                </div>

                <!--    date Validité de la carte-->
                <div class="md-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date de fin de validité.</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="XX / XXXX" min="0"
                        max="100" title="" required value="">
                    </input>
                </div>

                <!--   Clé de la carte (trois chiffre)-->
                <div class="md-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Saisir les 3 chiffres au dos de la
                        carte</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="XXX" min="0" max="100"
                        title="" required value="">
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
                <div class="mt-5 d-flex justify-content-center ">
                    <button type="button " class="btn btn-dark ">SOUSCRIRE</button>
                </div>
            </form>
        </div>
    </div>



    <!-- 888888888888888888888888888888888888888888 -->

  <!-- FOOTER -->
  <footer class=" box-footer  text-center pt-4 mt-5  justify-content-center">
    <a href="#" class="m-2   text-nav-foot">Contact</a>
    <a href="#" class="m-2  text-nav-foot">C.G.V</a>
    <a href="#" class="m-2  text-nav-foot">C.G.U</a>
    <a href="#" class="m-2  text-nav-foot">Mentions légales</a>
</footer>
</body>


<!--    VUE JS -->
<script>


</script>
<!-- FIN VUE JS -->

</html>