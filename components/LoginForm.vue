<template>
  <div class="container">
    <h1>Welcome</h1>
    <h4>Sign in your account</h4>
    <form class="form" @submit.prevent="getData">
      <input v-model="userInfo.username" type="text" placeholder="Username">
      <input v-model="userInfo.password" type="password" placeholder="Password">
      <label>
        <input type="checkbox">Remember me
      </label>
      <span>Forgot password?</span>
      <input type="submit" value="LOGIN">
      <div class="center">
        <span>Don't have an account? Sign up</span>
      </div>
    </form>
    <div class="community-name center">
      <h4>DEVPH.IO | POS SYSTEM</h4>
    </div>
  </div>
</template>

<script>
export default {
  name: 'LoginForm',
  data () {
    return {
      userInfo: {
        username: '',
        password: ''
      }
    }
  },
  methods: {
    getData () {
      this.$emit('submitForm', this.userInfo)
    }
  }
}
</script>

<style scoped>
.form > input[type=text],.form > input[type=password],.form > input[type=submit] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.container > h1, .container > h4 {
  margin: 0;
  padding: 0;
}
input[type=submit] {
  background-color: #3889BE;
  border: none;
  color: white;
}
.form > span {
  float: right;
}
.form > span,.form > label,.form > div {
  color: #3889BE;
}
.center {
  text-align: center;
}
.community-name {
  margin-top: 40%;
  text-shadow: 2px 2px 3px #000000;
}
</style>
