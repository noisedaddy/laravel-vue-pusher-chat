<template>
   <div class="chatlog">
       <chatmessage v-for="message in messages" v-bind:key="message"></chatmessage>
   </div>
</template>

<script>
    export default {
        props: ['messages']
    }
</script>
