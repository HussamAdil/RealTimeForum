<template>
<v-container>
  <form @submit.prevent="login">
    <v-text-field
      v-model="form.email"
      type="email"
      placeholder="email"
      required
       
    ></v-text-field>
    <v-text-field
      v-model="form.password"
      type="password"
      placeholder="password"
      required
       
    ></v-text-field>
    
    

    <v-btn color="green" class="mr-4" type="submit">submit</v-btn>
    <router-link to="/Signup">Signup</router-link>
   </form>
</v-container>

</template>

<script>
export default {
    data()
    {
        return {
            form :{
                email:null,
                password :null
            }
        }
    },
    created()
    {
      if(user.loggedIn())
      {
        this.$router.push({name:'Forum'})
      }
    },
    methods:
    {
        login()
        {
           user.login(this.form)
         }
    }
}
</script>

<style>

</style>