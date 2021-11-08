<template>
  <div>
    <form @submit.prevent="contactform">
      Name: <input type="text" v-model="form.name"> <br/>
      Email: <input type="text" v-model="email"> <br/>
      Contact: <input type="text" v-model="form.contact"> <br/>
      DOB: <input type="text" v-model="form.dob"> <br/>
      Profile: <input type="text" v-model="form.profile"> <br/>
      Status: <input type="text" v-model="form.status"> <br/>
      <button type="submit">Save</button>

    </form>

  </div>
</template>

<script>
import axios from "axios";

export default {
  name: 'InsertForm',
  
  data(){
    return{
      error:[],
      form:{
        name: "",
        email: "",
        contact: "",
        dob: "",
        profile: "",
        status: ""
      },
    };
  },
  methods:{
    contactform: function(e){
      axios.post("https://localhost/wasim/vuejs/cli/testproject/api/public/api/newuser", this.form).then(
          function(response){
            console.log(response);
          })
          .catch(function(error){            
            console.log(error);
          });
          e.target.reset();
    },
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
