<template>
  <div class="">
    <div class="">
      <Header />
    </div>
    <main class="container">
      <router-view></router-view>
    </main>
  </div>
</template>

<script>
import Header from "./Header.vue";
import Posts from "./posts/Posts.vue";
export default {
  name: "App",
  components: {
    Header,
    Posts,
  },
};
</script>
<style scoped>
h1 {
  color: gray;
}
</style>
