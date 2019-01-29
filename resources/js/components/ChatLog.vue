<template>
   <div class="chat-log">
       <chatmessage v-for="message in messages" v-bind:key="message"></chatmessage>
   </div>
</template>

<script>
    export default {
        data() {
            return {
                        messages: [
                            {
                                message : "Hi There!",
                                user: "John Doe"
                            },
                            {
                                message : "Hello",
                                user: "John Smith"
                            }
                        ]
                    }
        }
    }
</script>
