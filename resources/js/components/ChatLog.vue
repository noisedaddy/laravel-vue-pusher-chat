<template>
   <div class="chatlog">
       <chatmessage v-for="message in messages" :message="message"></chatmessage>
   </div>
</template>

<script>
    export default {
        props: ['messages']
    }
</script>
<style lang="css">
.chatlog .chatmessage:nth-child(even) {
    background-color: #ccc;
}
</style>
