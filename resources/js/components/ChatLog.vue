<template>
   <div class="chatlog">
       <chatmessage v-for="message in messages" :key="message"></chatmessage>
   </div>
</template>

<script>
    export default {
        props: ['messages']
    }
</script>
