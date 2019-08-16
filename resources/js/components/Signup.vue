<template>
<v-container>
  <form @submit.prevent="signup">
    <v-text-field
      v-model="form.name"
       placeholder="name"
      type="text"
      required
       
    ></v-text-field>

    <v-text-field
      v-model="form.email"
      type="email"
       placeholder="email"
      required
       
    >
    </v-text-field>
    <v-text-field
      v-model="form.password"
      type="password"
       placeholder="password"
      required >
    </v-text-field>
        <v-text-field
      v-model="form.password_confirmation"
      type="password"
       placeholder="password confirmation"
      required >
    </v-text-field>
    
    

    <v-btn color="green" class="mr-4" type="submit">Sign up</v-btn>
    <router-link to="/login">Login</router-link>
   </form>
</v-container>

</template>

<script>
export default {
    data()
    {
        return {
            form :{
                name:null,
                 email:null,
                password :null,
                password_confirmation :null
            }
        }
    },
    methods:
    {
        signup()
        {
          axios.post('api/auth/sigup').then((res) => user.responseAfterLogin())
        }
    }
}
</script>

<style>

</style>