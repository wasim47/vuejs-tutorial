<template>
  <div id="app">
    <InsertForm/>
  </div>
</template>

<script>
import InsertForm from './components/InsertForm.vue'

export default {
  name: 'App',
  components: {
    InsertForm
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
