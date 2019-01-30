<template>
  <div class="chatcomposer">
    <input type="text" placeholder="start typeing your message" v-model="messageText" @keyup.>
    <button class="btn btn-primary" @click="sendMessage">Send</button>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("chat composer.");
  },
  data() {
    return {
      messageText: ""
    };
  },
  methods: {
    sendMessage() {
      this.$emit("sent message", {
        message: this.messageText,
        author: "John DOe"
      });
      console.log(this.messageText);
      this.messageText = "";
    }
  }
};
</script>
<style>
.chat-composer {
  display: flex;
}
.chat-composer input {
  flex: 1 auto;
}
.chat-composer button {
  border-radius: 0;
}
</style>
