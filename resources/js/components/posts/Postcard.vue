<template>
  <li class="col-12 card">
    <div class="card text-center">
      <div class="card-header"></div>
      <div class="card-body">
        <h5 class="card-title">{{ post.title }}</h5>
        <p class="card-text">{{ post.content }}</p>
        <router-link
          :to="{ name: 'post-show', params: { id: post.id } }"
          class="btn btn-primary"
          v-if="!hidelink"
          >Vedi post</router-link
        >
      </div>
      <div class="card-footer text-muted">{{ updatedAt }}</div>
    </div>
  </li>
</template>
<script >
export default {
  name: "postcard",
  props: ["post", "hide-link"],
  computed: {
    updatedAt() {
      const postDate = new Date(this.post.updated_at);
      let day = postDate.getDate();
      let month = postDate.getMonth() + 1;
      const year = postDate.getFullYear();
      const hour = postDate.getHours();
      const minute = postDate.getMinutes();
      const seconds = postDate.getSeconds();

      if (day < 10) day = "0" + day;
      if (month < 10) month = "0" + month;

      return `${day}/${month}/${year}  ${hour}:${minute}:${seconds}`;
    },
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
</style>
