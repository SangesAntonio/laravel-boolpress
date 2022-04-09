<template>
  <div class="alert alert-success" role="alert">
    {{ message }}
  </div>
</template>

<script>
export default {
  name: "Allert",
  props: ["message"],
};
</script>

<style>
</style>