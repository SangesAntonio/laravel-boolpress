<template>
  <section id="section-posts">
    <h1>Tutti i Post</h1>
    <ul v-if="posts.length" class="row">
      <li v-for="post in posts" :key="post.id" class="col">
        {{ post.title }}
      </li>
    </ul>
    <h2 v-else>Non ci sono post</h2>
  </section>
</template>
<script>
export default {
  name: "Posts",
  data() {
    return {
      posts: [],
    };
  },
  methods: {
    getPosts() {
      axios.get("http://localhost:8000/api/posts").then((res) => {
        this.posts = res.data;
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
    color: white;
  }
}
</style>
