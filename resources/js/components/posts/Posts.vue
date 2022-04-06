<template>
  <section id="section-posts " class="relative-cs">
    <div class="">
      <h1 class="text-center">Tutti i Post</h1>
    </div>
    <Loader v-if="isLoading" class="loader" />

    <div v-else>
      <ul v-if="posts.length" class="row">
        <Postcard :post="post" v-for="post in posts" :key="post.id" />
      </ul>
      <h2 v-else>Non ci sono post</h2>
    </div>
  </section>
</template>
<script>
import Loader from "../Loader.vue";
import Postcard from "../posts/Postcard.vue";

export default {
  name: "Posts",
  components: {
    Loader,
    Postcard,
  },
  data() {
    return {
      posts: [],
      isLoading: true,
    };
  },
  methods: {
    getPosts() {
      axios
        .get("http://localhost:8000/api/posts")
        .then((res) => {
          this.posts = res.data;
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
<style scoped lang='scss'>
ul {
  li {
    list-style: none;
    h1 {
      color: gray;
    }
  }
}

.cs-relative {
  position: relative;
}
</style>
