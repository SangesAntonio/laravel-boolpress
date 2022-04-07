<template>
  <div>
    <h1>Contatti</h1>
    <p>Chiama al mio numero o mandami una email :D</p>

    <div class="form-group">
      <label for="exampleInputEmail1">Indirizzo Email</label>
      <input
        type="email"
        class="form-control"
        id="exampleInputEmail1"
        aria-describedby="emailHelp"
        placeholder="Enter email"
      />
      <small id="emailHelp" class="form-text text-muted"
        >Non condivideremo mai la tua email
      </small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Messaggio</label>
      <input
        type="password"
        class="form-control"
        id="exampleInputPassword1"
        placeholder="Password"
      />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</template>

<script>
export default {
  name: "Contact",
};
</script>

<style>
</style>