



<!--  NARBAR VUE-->


<!-- 88888888888888888 -->
<!-- englode l intégralité de la vue -->
<template>
    <div>
        <!-- _______________Notre navbar brut (attention par la suite pour les liens de son css ou de son script JS une fois importé et monté dans App.vue) -->
        <header class="header-liste">
            <div class="container">
                <!-- NAVBAR -->
                <nav class="navigation d-flex align-items-center">
                    <a class="navbar-brand" href="index.html">
                        <img src="/images/logo.png" alt="Logo Moukat A Li">
                    </a>
                    <div class="menu-toggle">
                            <input class="position" type="checkbox" />
                            <span class="position"></span>
                            <span class="position"></span>
                            <span class="position"></span>
                        <ul class="menu">
                            <a href="index.html">
                                <li>Accueil</li>
                            </a>
                            <a href="liste-sujet-vueJS3.html">
                                <li>Moukatages</li>
                            </a>
                            <a href="connection-vueJS3.html">
                                <li>Se connecter</li>
                            </a>
                            <a href="profile-vueJS3.html">
                                <li>Espace Moukatér</li>
                            </a>
                            <a href="abonnement-vueJS3.html">
                                <li>S'abonner</li>
                            </a>
                            <a href="succes-vueJS3.html">
                                <li>Mes succès</li>
                            </a>
                            <a href="#">
                                <li>Contact</li>
                            </a>
                            <a href="#">
                                <li>Se déconnecter</li>
                            </a>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- _________________________________ -->
    </div>
</template>
<!-- 888888888888888888 -->
<script>
    // bonne pratique : mettre l'exportation par defaut;
    export default {
        name: 'Navbar',
    }
</script>
<!-- 888888888888888888888 -->
<style></style>
<!-- 88888888888888888888 -->