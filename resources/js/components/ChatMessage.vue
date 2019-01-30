<template>
    <div class="col-md-8">
        <div class="chatmessage">
            <div class="card-header">Chat</div>
            <div class="card-body">
                {{ message }}
            </div>
            <small>{{ message }}</small>
        </div>
    </div>
</template>

<script>
    export default {
       props: ['message']

    }
</script>
