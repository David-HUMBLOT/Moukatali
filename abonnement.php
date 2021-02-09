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

    <title>abonnement</title>
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

            <section class="container">
                <!-- OFFRE -->
                <div class=" row  d-flex justify-content-center ">
         
                    <div class="card  text-white bg-dark m-3  " style="max-width: 18rem; border-color:aqua">
                        <div class="card-header" style = "border-color:aqua" >Pack 1 €</div>
                        <div class="card-body text-center">
                            <img src="images/kisspng-court-piece-gift-game-smartphone-gift-box-open-fly-out-of-the-phone-vector-5a697a82ca38e5.4876160315168620828283.png" class="img-fluid " alt="..."  style="width: 92%;">
                          <h5 class="card-title mt-3">1 €/ mois pendant 12 mois</h5>
                          <p class="card-text">Ton vote compte double !! Parceque ta blague est sous son meilleur accent !</p>
                        </div>
                      </div>
                
                      <div class="card text-white bg-dark m-3 " style="max-width: 18rem; border-color:aqua">
                        <div class="card-header" style = "border-color:aqua">SPEACIAL</div>
                        <div class="card-body text-center">
                            <img src="images/boom.png" class="img-fluid" alt="..."  style="width: 199%; ">
                          <h5 class="card-title mt-3">2 € / MOIS</h5>
                          <p class="card-text">Ton vote compte triple ! Cest le chef qui commande ! (recevoir des offres régulièrement)</p>
                        </div>
                      </div>
                </div>
            </section>

    </section>
    <!-- ABONNEMENT FORMULAIRE -->

    <div class="d-flex justify-content-center mt-5 mx-3">
        <div class="mb-5 box-formulaire col-lg-4 col-md-4 col-sm-4">
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


                <!-- CHOIX DU PACK BOOST -->
                <div class="md-3 mb-3">

                    <label class="mb-3" for="exampleFormControlInput1" class="form-label">Pack booster</label>

                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Aucun</option>
                        <option value="1">VIP (2€/mois)</option>
                        <option value="2">Classique (1€/mois)</option>

                    </select>
                </div>


                <!-- ATTENTION nom et prénom sur la meme ligne ! -->

                <div class="row  mb-3 d-flex justify-content-between">
                    <!-- NOM -->
                    <div class=" col-6 ">

                        <label for="exampleFormControlInput1" class="form-label">Nom*</label>
                        <input type="text" class="form-control" id="Nom" name="Nom" placeholder="DUPONT" title="Veuillez inscrire votre Nom" required pattern="([A-z0-9À-ž\s]){2,}" minlength="4" maxlength="50" size="50" value="">
                        </input>
                    </div>

                    <!-- PRENOM -->
                    <div class="col-6 ">
                        <label for="exampleFormControlInput1" class="form-label">Prénom*</label>
                        <input type="text" class="form-control" id="Prenom" name="Prenom" placeholder="Vinshan" title="Veuillez inscrire votre prénom" required pattern="([A-z0-9À-ž\s]){2,}" minlength="4" maxlength="50" size="50" value="">
                        </input>
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email* </label>

                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" title="Veuillez inscrire votre email" size="60" minlength="3" maxlength="60" required value="">
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
                    <input type="number" class="form-control" id="age" name="age" placeholder="XXXX XXXXXX XXX" min="0" max="100" title="" required value="">
                    </input>
                </div>

                <!--    date Validité de la carte-->
                <div class="md-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date de fin de validité.</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="XX / XXXX" min="0" max="100" title="" required value="">
                    </input>
                </div>

                <!--   Clé de la carte (trois chiffre)-->
                <div class="md-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Saisir les 3 chiffres au dos de la
                        carte</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="XXX" min="0" max="100" title="" required value="">
                    </input>
                </div>

                <!-- MOT DE PASSE -->
                <div class="mb-3 ">
                    <label class="mb-3" for="mot de passe1">Mot de passe* </label>
                    <input type="password" class="form-control" id="password-1" name="password-1" required pattern="?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Saisir un mot de passe" minlength="1" maxlength="20" size="20" value="">
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