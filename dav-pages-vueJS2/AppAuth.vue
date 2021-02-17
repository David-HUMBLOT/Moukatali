

<!--  APP VUE AUTHENTIFICATION JS2 before using laravel with composer and mysql bdd moukatali en local -->


<!-- 88888888888888888 -->
<!-- englode l intégralité de la vue -->
<template>
  <div>
    <navbar></navbar>
    <auth></auth>
    <footer></footer>
  </div>
</template>
<!-- 888888888888888888 -->
<script>
// on importe la navbar, le formulaire auth et le footer composé
import Navbar from "../componants/Navbar.vue";
import Auth_Form from "../components/Auth_Form.vue";
import Footer from "../componants/Footer.vue";
export default {
  name: "Navbar",
  name: "Auth_Form",
  name: "Footer",
  componants: {
    navbar: Navbar,
    auth: Auth_Form,
    footer:Footer,
  },
};
</script>
<!-- 888888888888888888888 -->
<style></style>
<!-- 88888888888888888888 -->