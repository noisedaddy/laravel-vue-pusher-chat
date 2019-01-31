<template>
    <div class="col-md-8">
        <div class="chatmessage">
            <div class="card-header">Chat</div>
            <div class="card-body">
                {{ message.message }}
            </div>
            <small>{{ message.user }}</small>
        </div>
    </div>
</template>

<script>
    export default {
       props: ['message']

    }
</script>
