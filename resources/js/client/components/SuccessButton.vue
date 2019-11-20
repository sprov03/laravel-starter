<template>
    <app-button variant="danger" v-bind="$attrs"><slot></slot></app-button>
</template>

<script>
  import AppButton from "./AppButton";
  export default {
    name: "SuccessButton",
    components: {AppButton},
  }
</script>

<style scoped>

</style>
