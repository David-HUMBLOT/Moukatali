<!--  FOOTER VUE-->


<!-- 88888888888888888 -->
<!-- englode l intégralité de la vue -->
<template>
    <div>
        <!-- _______________Notre fOOTER brut (attention par la suite pour les liens de son css ou de son script JS une fois importé et monté dans App.vue) 
        attention au doublon id ici j ai deplacer sur ligne 11 mais c etai sur ligne 14 en doublon avec id-nav-footer attention pour plus tard sur le css etc-->
            <footer class="container-fluid " >
        <div class="row" id="footer-connection">
            <!-- NAVBAR HEADER -->

            <nav class="navbar navbar-dark box-footer" id="id-nav-footer" >
                <div class=" container-fluid d-flex justify-content-around ">
                    <p class="text-nav-foot">CGV</p>
                    <P class="text-nav-foot">CGU</P>
                </div>
            </nav>
        </div>
    </footer>
        <!-- _________________________________ -->
    </div>
</template>
<!-- 888888888888888888 -->
<script>
    // bonne pratique : mettre l'exportation par defaut;
    export default {
        name: 'Footer',
    }
</script>
<!-- 888888888888888888888 -->
<style></style>
<!-- 88888888888888888888 -->