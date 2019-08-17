<template>
<v-container>
  <form @submit.prevent="signup">
    <v-text-field
      v-model="form.name"
       placeholder="name"
      type="text"
       
       
    ></v-text-field>
    <span v-if="errors.name"> {{errors.name[0] }} </span>

    <v-text-field
      v-model="form.email"
      type="email"
       placeholder="email"
       
       
    >
    </v-text-field>
        <span v-if="errors.email"> {{errors.email[0] }} </span>
    <v-text-field
      v-model="form.password"
      type="password"
       placeholder="password"
        >
    </v-text-field>
        <span v-if="errors.password"> {{errors.password[0] }} </span>
        <v-text-field
      v-model="form.password_confirmation"
      type="password"
       placeholder="password confirmation"
        >
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
                password_confirmation :null,
               
            },
             errors:{}
        }
    },
     created()
    {
       
    },
    methods:
    {
         
        signup()
        {
          axios.post('api/auth/signup' , this.form)
          .then((res) => { user.responseAfterLogin(res)
             
              })
              .catch(
              error => this.errors = error.response.data.errors
          )
        }
    }
}
</script>

<style>

</style>