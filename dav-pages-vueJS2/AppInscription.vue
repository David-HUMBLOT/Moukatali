

<!--  APP VUE INSCRIPTION-->


<!-- 88888888888888888 -->
<!-- englode l intégralité de la vue -->
<template>
  <div>
    <navbar></navbar>
    <inscript></inscript>
    <footer></footer>
  </div>
</template>
<!-- 888888888888888888 -->
<script>
// on importe la navbar, le formulaire auth et le footer composé
import Navbar from "../componants/Navbar.vue";
import Inscript_Form from"../componants/Inscript_Form.vue";
import Footer from "../componants/Footer.vue";
export default {
  name: "Navbar",
  name: "Inscript_Form",
  name: "Footer",
  componants: {
    navbar: Navbar,
   inscript: Inscript_Form,
    footer:Footer,
  },
};
</script>
<!-- 888888888888888888888 -->
<style></style>
<!-- 88888888888888888888 -->