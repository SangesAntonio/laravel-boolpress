<template>
  <div class="container">
    <Loader v-if="isLoading && !post" />
    <Postcard :post="post" hidelink="true" />
    <Allert
      v-if="iserror && !isLoading"
      message="Si è verificato un errore"
      type="danger"
    />
  </div>
</template>

<script>
import Header from "../Header.vue";
import Loader from "../Loader.vue";
import Allert from "../Allert.vue";
import Postcard from "./Postcard.vue";
export default {
  name: "ShowPost",
  components: {
    Header,
    Loader,
    Postcard,
    Allert,
  },
  data() {
    return {
      isLoading: true,
      post: {},
      iserror: false,
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
          this.iserror = true;
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