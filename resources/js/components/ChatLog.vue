<template>
   <div class="chatlog">
       <chatmessage v-for="message in messages" :message="message"></chatmessage>
       <div class="empty" v-show="messages.length == 0">Nothing here yet</div>
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
.empty {
    text-align: center;
    padding: 1em;
}
</style>
