<template>
  <div class="container">
    <Header />
    <Loader />
  </div>
</template>

<script>
import Header from "../Header.vue";
import Loader from "../Loader.vue";
export default {
  name: "ShowPost",
  components: {
    Header,
    Loader,
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
        .get("http://localhost:8000/api/posts")
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