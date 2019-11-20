<template>
    <t-button v-bind="$attrs" @click="process" :disabled="disabled"><slot></slot></t-button>
</template>

<script>
  export default {
    name: "AppButton",
    props: {
      promise: {
        type: Function,
        default: null
      }
    },
    data() {
      return {
        disabled: false,
      }
    },
    methods: {
      process() {
        this.disabled = true;
        return this.promise().then(response => {
          this.disabled = false;
          return response;
        }, error => {
          this.disabled = false;
        })
      }
    }
  }
</script>

<style scoped>

</style>
