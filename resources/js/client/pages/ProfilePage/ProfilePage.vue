<template>
    <div>
        <h1>Profile Page</h1>
        <p>{{ message }}</p>
<!--        <t-button @click="humm()" :promise="testing.bind(this)">Working button</t-button>-->
        <success-button :promise="testing">Success Button</success-button>
        <warning-button :promise="testing">warning button</warning-button>
    </div>
</template>

<script>
  import AppButton from "../../components/AppButton";
  import SuccessButton from "../../components/SuccessButton";
  import WarningButton from "../../components/WarningButton";
  export default {
    name: "ProfilePage",
    components: {WarningButton, SuccessButton, AppButton},
    data() {
      return {
        disabled: false,
        message: 'working',
      }
    },
    methods: {
      testing() {
        return axios.get('/dummy-data').then(response => {
          console.log('Response 1: ', response.data);
          this.message = 'Rawere';
          return response;
        }, error => {
          this.message = 'Rawere';
          console.log('Error: ', error.response.data);
        })
      }
    }
  }
</script>

<style scoped>

</style>
