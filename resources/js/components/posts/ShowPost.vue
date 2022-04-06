<template>
  <div class="container">
    <Loader v-if="isLoading" />
    <Postcard v-else :post="post" hide-link="true" />
  </div>
</template>

<script>
import Header from "../Header.vue";
import Loader from "../Loader.vue";
import Postcard from "./Postcard.vue";
export default {
  name: "ShowPost",
  components: {
    Header,
    Loader,
    Postcard,
  },
  data() {
    return {
      isLoading: true,
      post: {},
    };
  },
  methods: {
    getPosts() {
      axios
        .get("http://localhost:8000/api/posts/" + this.$route.params.id)
        .then((res) => {
          this.post = res.data;
        })
        .catch((err) => {
          console.error(err);
        })
        .then(() => {
          this.isLoading = false;
        });
    },
  },
  mounted() {
    this.getPosts();
  },
};
</script>

<style>
</style>