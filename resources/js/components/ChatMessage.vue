<template>
    <div class="chatmessage">
      <div class="card-body">
        <p>{{ message.message }}</p>
        <small>{{ message.user }}</small>
      </div>
    </div>
</template>

<script>
export default {
  props: ["message"]
};
</script>
