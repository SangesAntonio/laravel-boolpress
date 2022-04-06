<template>
  <li class="col-12 card">
    <h1>{{ post.title }}</h1>
    <div class="card-body">
      <p>{{ post.content }}</p>
    </div>
  </li>
</template>
<script >
export default {
  name: "postcard",
  props: ["post"],
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
