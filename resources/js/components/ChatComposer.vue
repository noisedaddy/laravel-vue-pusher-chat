<template>
   <div class="chat-composer">
       <input type="text" placeholder="start typeing your message">
       <button class="btn btn-primary">Send</button>
   </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
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
