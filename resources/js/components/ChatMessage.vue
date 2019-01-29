<template>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Chat</div>
            <div class="card-body">
                {{ message }}
            </div>
            <small>{{ user }}</small>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message : "This is some chat message",
                user: "John Doe"
            }
        }
    }
</script>
