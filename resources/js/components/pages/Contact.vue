<template>
  <div>
    <h1>Contatti</h1>

    <Loader v-if="isLoading" class="loader" />
    <div v-else>
      <Allert :message="allertmessage" type="success" />
      <div class="form-group">
        <label for="exampleInputEmail1">Indirizzo Email</label>
        <input
          type="email"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          placeholder="Inserisci email"
          v-model="form.mail"
        />
        <small id="emailHelp" class="form-text text-muted"
          >Non condivideremo mai la tua email
        </small>
      </div>
      <div class="form-group">
        <label for="exampleInput">Messaggio</label>
        <input
          type="text"
          class="form-control"
          id="exampleInput"
          placeholder="Lascia un messaggio"
          v-model="form.message"
        />
      </div>
    </div>

    <button type="button" @click="sendForm" class="btn btn-primary">
      Submit
    </button>
  </div>
</template>

<script>
import Loader from "../Loader.vue";
import Allert from "../Allert.vue";

export default {
  name: "Contact",
  components: {
    Loader,
    Allert,
  },
  data() {
    return {
      form: {
        mail: "",
        message: "",
      },
      allertmessage: "",
      isLoading: true,
    };
  },
  methods: {
    sendForm() {
      axios
        .post("http://localhost:8000/api/message", this.form)
        .then((res) => {
          this.form.mail = "";
          this.form.message = "";
          this.allertmessage = "Messaggio inviato con successo";
        })
        .catch((error) => {
          console.error(error);
        })
        .then(() => {
          this.isLoading = false;
        });
    },
  },
  mounted() {
    this.sendForm();
  },
};
</script>

<style>
</style>                              


