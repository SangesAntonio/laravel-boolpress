<template>
  <div :class="`alert alert-${type}`" role="alert">
    {{ message }}
  </div>
</template>

<script>
export default {
  name: "Allert",
  props: ["message", "type"],
};
</script>

<style>
</style>