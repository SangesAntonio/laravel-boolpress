<template>
  <div class="container">
    <div class="row justify-content-between">
      <Header />
    </div>
    <div class="section-cards row"></div>
  </div>
</template>

<script>
import Header from "./Header.vue";
export default {
  name: "App",
  components: {
    Header,
  },
};
</script>
<style scoped>
h1 {
  color: gray;
}
</style>
