



<!--  AUTHENTIFICATION VUE-->

<!-- 88888888888888888 -->
<!-- englode l intégralité de la vue -->
<template>
  <div>
    <!-- _______________Notre FORMULAIRE D AUTHENTIFICATION (CONNECTION) brut (attention par la suite pour les liens de son css ou de son script JS une fois importé et monté dans App.vue) -->
    <section id="form-connexion">
      <div
        class="container d-flex flex-column justify-content-center align-items-center"
      >
        <!-- FORMULAIRE AUTHENTIFICATION -->
        <div class="mb-5 box-formulaire col-lg-8 col-md-8">
          <form class="col px-3 py-4" method="post">
            <!-- EMAIL -->
            <div class="mb-3">
              <label
                for="exampleFormControlInput1"
                class="form-label text-dark mb-0"
                >Email*
              </label>

              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="name@example.com"
                title="Veuillez inscrire votre email"
                size="60"
                minlength="3"
                maxlength="60"
                required
                value=""
              />
            </div>

            <!-- MOT DE PASSE -->
            <div class="mb-3">
              <label class="mb-0 text-dark" for="mot de passe1"
                >Mot de passe*
              </label>

              <input
                type="password"
                class="form-control"
                id="password-1"
                name="password-1"
                required
                pattern="?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                title="Saisir un mot de passe"
                minlength="1"
                maxlength="20"
                size="20"
                value=""
              />
            </div>

            <!--  BOUTON CONNEXION -->
            <div class="mt-3 d-flex justify-content-center">
              <button type="button" class="btn btn-dark">CONNEXION</button>
            </div>

            <div class="mt-1 d-flex justify-content-center text-dark">
              <i>(* Champs obligatoires)</i>
            </div>

            <div class="mt-3 d-flex justify-content-center">
              <a href="inscription.html" class="text-nav-foot pb-2"
                >Pas encore de compte !? Inscrit toi ici !! </a
              ><br />
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- _________________________________ -->
  </div>
</template>
<!-- 888888888888888888 -->
<script>
// bonne pratique : mettre l'exportation par defaut;
export default {
  name: "Auth_Form",
};
</script>
<!-- 888888888888888888888 -->
<style></style>
<!-- 88888888888888888888 -->