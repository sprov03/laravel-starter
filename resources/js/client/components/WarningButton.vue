<template>
    <app-button variant="warning" v-bind="$attrs"><slot></slot></app-button>
</template>

<script>
  import AppButton from "./AppButton";
  export default {
    name: "WarningButton",
    components: {AppButton}
  }
</script>

<style scoped>

</style>
