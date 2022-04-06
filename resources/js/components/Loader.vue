<template>
  <div class="loader">
    <div class="spinner-border text-light" role="status">
      <span class="visually-hidden"></span>
    </div>
  </div>
</template>
<script>
export default {
  name: "Loader",
};
</script>
<style scoped lang='scss'>
.loader {
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}
</style>
