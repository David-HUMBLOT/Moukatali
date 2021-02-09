<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Slackey&display=swap"
        rel="stylesheet">

    <!-- MON CSS -->
    <link rel="stylesheet" href="css/styleListe.css">
    <link rel="stylesheet" href="css/styleDav.css">

    <title>Liste des sujets - Moukat A Li</title>
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
<div class="row d-flex justify-content-center">

    <!-- TITRE -->
    <div class="mt-3 pt-4 col-12  d-flex column justify-content-center">

       <h1>MOUKATALI !</h1>

   </div>

   <!-- text -->
   <div class="col-12 mb-3 d-flex  justify-content-center">

       <p class="text-body-1">TOPICS DE LA SEMAINE ! &#x1F609; </p>
      
   </div>

</div>


    <section>

        <div class="container pt-4">

            <!-- SUJET -->
            <div class="sujet bg-light p-3 mb-3 d-flex flex-column flex-md-row align-items-md-center">
                <div class="image mb-2 mb-md-0 mr-md-2"><img src="images/image-mobile.jpg" alt="Image du sujet"></div>
                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in lobortis nisl.
                    Vestibulum mauris metus, luctus quis volutpat vitae, laoreet.</p>
            </div>
            <!-- PROGRESS BAR -->
            <div class="info p-3 mb-3 bg-light">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%"
                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <!-- INFO -->
            <div class="info px-4 py-3 mb-3 bg-light d-flex align-items-center justify-content-md-center">
                <div
                    class="nombre black text-light d-flex align-items-center justify-content-center font-weight-bolder mr-2 p-1">
                    1333</div>
                <p class="mb-0 font-weight-light text-dark">Moukatages à faire avant fermeture</p>
            </div>
            <!-- PUBLIER -->
            <form class="bg-light p-4" id="form-publier">
                <div class="form-group mb-0">
                    <textarea class="form-control mb-2 border-0" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Publier un moukatage"></textarea>
                    <div class="d-flex justify-content-end">
                        <button type="submit"
                            class="btn black text-uppercase font-weight-bold text-light letter-spacing">publier</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
    <section>
        <div class="container py-4">

            <!-- TRIER-->
            <div class="trier d-flex justify-content-between mb-3">
                <div class="btn-group">
                    <button class="btn btn-light btn-sm dropdown-toggle text-uppercase letter-spacing" type="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        trier
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">par pertinence</a>
                        <a class="dropdown-item" href="#">par date</a>
                    </div>
                </div>
                <!-- VOIR PLUS-->
                <div>
                    <button type="button" class="btn btn-light letter-spacing text-uppercase">voir plus de
                        moukatages</button>
                </div>
            </div>

         <!-- _____________________________________________________________________________________ -->
            <!-- MOUKATAGE -->
            <div class="moukatage p-3 bg-light text-dark mb-3">
                  <!-- PROFIL -->
                  <div class="profil d-flex justify-content-between">
                    <div class="avatar">
                        <img src="/images/avatar-1.jpg" alt="Avatar">
                    </div>
                    <div class="info-profil">
                        <p class="mb-0 text-uppercase font-weight-bolder">pseudo</p>
                        <p class="mb-0">1 janvier 2021 à 00h00</p>
                    </div>
                </div>
                <!-- TEXTE -->
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in lobortis nisl. Vestibulum mauris
                    metus, luctus quis volutpat vitae, laoreet. Lorem ipsum dolor sit amet.</p>
                <!-- LIKE DISLIKE -->
                <div class="like-dislike d-flex justify-content-end mb-4">
                    <div class="d-flex align-items-center mr-3">
                        <div class="mr-1"><img src="/images/icones/thumbs-up.svg" alt="Like"></div>
                        <div
                            class="nb-vote black text-light d-flex justify-content-center align-items-center font-weight-bold">
                            1233</div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="mr-1"><img src="/images/icones/thumbs-down.svg" alt="Like"></div>
                        <div
                            class="nb-vote black text-light d-flex justify-content-center align-items-center font-weight-bold">
                            1233</div>
                    </div>
                </div>
              
            </div>
            <!-- MOUKATAGE -->
            <div class="moukatage p-3 bg-light text-dark mb-3">
                <!-- PROFIL -->
                <div class="profil d-flex justify-content-between">
                  <div class="avatar">
                      <img src="/images/avatar-1.jpg" alt="Avatar">
                  </div>
                  <div class="info-profil">
                      <p class="mb-0 text-uppercase font-weight-bolder">pseudo</p>
                      <p class="mb-0">1 janvier 2021 à 00h00</p>
                  </div>
              </div>
              <!-- TEXTE -->
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in lobortis nisl. Vestibulum mauris
                  metus, luctus quis volutpat vitae, laoreet. Lorem ipsum dolor sit amet.</p>
              <!-- LIKE DISLIKE -->
              <div class="like-dislike d-flex justify-content-end mb-4">
                  <div class="d-flex align-items-center mr-3">
                      <div class="mr-1"><img src="/images/icones/thumbs-up.svg" alt="Like"></div>
                      <div
                          class="nb-vote black text-light d-flex justify-content-center align-items-center font-weight-bold">
                          1233</div>
                  </div>
                  <div class="d-flex align-items-center">
                      <div class="mr-1"><img src="/images/icones/thumbs-down.svg" alt="Like"></div>
                      <div
                          class="nb-vote black text-light d-flex justify-content-center align-items-center font-weight-bold">
                          1233</div>
                  </div>
              </div>
            
          </div>
           <!-- MOUKATAGE -->
           <div class="moukatage p-3 bg-light text-dark mb-3">
            <!-- PROFIL -->
            <div class="profil d-flex justify-content-between">
              <div class="avatar">
                  <img src="/images/avatar-1.jpg" alt="Avatar">
              </div>
              <div class="info-profil">
                  <p class="mb-0 text-uppercase font-weight-bolder">pseudo</p>
                  <p class="mb-0">1 janvier 2021 à 00h00</p>
              </div>
          </div>
          <!-- TEXTE -->
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc in lobortis nisl. Vestibulum mauris
              metus, luctus quis volutpat vitae, laoreet. Lorem ipsum dolor sit amet.</p>
          <!-- LIKE DISLIKE -->
          <div class="like-dislike d-flex justify-content-end mb-4">
              <div class="d-flex align-items-center mr-3">
                  <div class="mr-1"><img src="/images/icones/thumbs-up.svg" alt="Like"></div>
                  <div
                      class="nb-vote black text-light d-flex justify-content-center align-items-center font-weight-bold">
                      1233</div>
              </div>
              <div class="d-flex align-items-center">
                  <div class="mr-1"><img src="/images/icones/thumbs-down.svg" alt="Like"></div>
                  <div
                      class="nb-vote black text-light d-flex justify-content-center align-items-center font-weight-bold">
                      1233</div>
              </div>
          </div>
        
      </div>

        </div>
    </section>
    <!-- SECTION AUTRE SUJETS -->
    <section class="mb-5">
        <div class="container">

            <!-- AUTRE SUJET -->
            <div class="autre bg-light p-4 text-dark d-flex align-items-center mb-3">
                <img src="/images/autre-sujet.jpg" class="mr-2" alt="Image sujet">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac.</p>
            </div>
            <!-- AUTRE SUJET -->
            <div class="autre bg-light p-4 text-dark d-flex align-items-center">
                <img src="/images/autre-sujet.jpg" class="mr-2" alt="Image sujet">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac.</p>
            </div>

        </div>
    </section>

    <!-- 888888888888888888888888888888888888888888 -->
  <!-- FOOTER -->

  <footer class=" box-footer  text-center pt-4 mt-5 pb-3 justify-content-center">
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