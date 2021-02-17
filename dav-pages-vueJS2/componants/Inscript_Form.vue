



<!-- INSCRIPTION VUE-->

<!-- 88888888888888888 -->
<!-- englode l intégralité de la vue -->
<template>
  <div>
    <!-- _______________Notre FORMULAIRE D INSCRIPTION brut (attention par la suite pour les liens de son css ou de son script JS une fois importé et monté dans App.vue) -->
<section id="form-inscription">
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <!-- FORMULAIRE D'INSCRIPTION -->
            <div class="mb-5 box-formulaire col-lg-8 col-md-8 col-12">

                <form class="col px-3 py-4" method="post">

                    <!-- PSEUDONYME -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-dark mb-0">Pseudonyme*</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Tibili 974"
                            title="Choisir un pseudo ou un nom d'utilisateur" required
                            pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" minlength="4" maxlength="30" size="30" value="">
                    </div>
                
                    <!-- ATTENTION nom et prénom sur la meme ligne ! -->

                    <div class="mb-3 d-flex flex-column flex-md-row justify-content-between">
                        <!-- NOM -->
                        <div class=" col-md-6 col-12 px-0 mb-3 mb-md-0 pr-md-1">

                            <label for="exampleFormControlInput1" class="form-label text-dark mb-0">Nom*</label>
                            <input type="text" class="form-control" id="Nom" name="Nom" placeholder="DUPONT"
                                title="Veuillez inscrire votre Nom" required pattern="([A-z0-9À-ž\s]){2,}" minlength="4"
                                maxlength="50" size="50" value="">
                        </div>

                        <!-- PRENOM -->
                        <div class="col-md-6 col-12 px-0 pl-md-1">
                            <label for="exampleFormControlInput1" class="form-label text-dark mb-0">Prénom*</label>
                            <input type="text" class="form-control" id="Prenom" name="Prenom" placeholder="Vinshan"
                                title="Veuillez inscrire votre prénom" required pattern="([A-z0-9À-ž\s]){2,}"
                                minlength="4" maxlength="50" size="50" value="">
                        </div>
                    </div>

                    <!-- ATTENTION GENRE ET AGE SUR LA MEME LIGNE-->
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <!-- GENRE -->

                        <div class="col-md-6 px-0 mb-3 mb-md-0 pr-md-1">

                            <label for="exampleFormControlInput1" class="form-label text-dark mb-0">Genre</label>

                            <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Choisir son genre</option>
                                <option value="1">Homme</option>
                                <option value="2">Femme</option>
                                <option value="2">3ième type</option>
                            </select>

                        </div>

                        <!-- AGE -->
                        <div class="col-md-6 px-0 mb-3 mb-md-0 pl-md-1">
                            <label for="exampleFormControlInput1" class="form-label text-dark mb-0">Date de naissance*</label>
                            <input type="date" class="form-control" id="age" name="date-naissance" placeholder="18" required>
                        </div>
                    </div>

                    <!-- VILLE  -->
                    <div class="mb-3">

                        <label for="exampleFormControlInput1" class="form-label text-dark mb-0">Ville</label>

                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Saint-Denis</option>
                            <option value="1">Saint-Marie</option>
                            <option value="2">Saint-Suzanne</option>
                            <option value="2">Tampon</option>
                        </select>
                    </div>

                    <!-- PHOTO DE PROFIL -->
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label text-dark" for="customFile">Avatar</label>
                      </div>

                    <!-- EMAIL -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label text-dark mb-0">Email* </label>

                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                            title="Veuillez inscrire votre email" size="60" minlength="3" maxlength="60" required
                            value="">
                    </div>

                    <!-- MOT DE PASSE -->
                    <div class="mb-3 ">
                        <label class="text-dark mb-0" for="mot de passe1">Mot de passe* </label>

                        <input type="password" class="form-control" id="password-1" name="password-1" required
                            pattern="?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            title="Saisir un mot de passe" minlength="1" maxlength="20" size="20" value="">
                    </div>

                    <!-- CONFIRMATION MOT DE PASSE-->
                    <div class="mb-3 ">
                        <label class="text-dark mb-0" for="mot de passe2">Confirmation* </label>

                        <input type="password" class="form-control" id="password-2" name="password-2" required
                            pattern="?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            title="Confirmation mot de passe" minlength="1" maxlength="20" size="20" value="">
                    </div>

                    <!-- BOUTON INSCRIPTION -->
                    <div class="d-flex justify-content-center">
                        <button type="button" action="" class="btn btn-dark">INSCRIPTION</button>

                    </div>
                    <div class="mt-3 d-flex justify-content-center"> <i>(* Champs obligatoires)</i></div>

                    <div class="mt-3 d-flex justify-content-center"><a href="connection.html"
                        class="text-nav-foot pb-2">Déjà un compte pour moukater ? </a><br>
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
  name: "Inscript_Form",
};
</script>
<!-- 888888888888888888888 -->
<style></style>
<!-- 88888888888888888888 -->