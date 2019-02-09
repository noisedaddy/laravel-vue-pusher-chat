<template>
  <div class="chatcomposer">
    <input type="text" placeholder="start typeing your message" v-model="messageText" @keyup.enter="sendMessage">
    <button class="btn btn-primary" @click="sendMessage">Send</button>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("chat composer.");
  },
  props: ['user'],
  data() {
    return {
      messageText: ''
    };
  },
  methods: {
    sendMessage() {
      this.$emit("messagesent", {
        message: this.messageText,
        user: {
          name: this.user.name
        }
      });
      console.log(this.messageText);
      this.messageText = '';
    }
  }
};
</script>
<style>
.chatcomposer {
  display: flex;
}
.chatcomposer input {
  flex: 1 auto;
}
.chatcomposer button {
  border-radius: 0;
}
</style>
