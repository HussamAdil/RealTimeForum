<template>
<v-container>
  <form>
    <v-text-field
      v-model="form.email"
      type="email"
      required
       
    ></v-text-field>
    <v-text-field
      v-model="form.password"
      type="password"
      required
       
    ></v-text-field>
    
    

    <v-btn color="green" class="mr-4" type="submit">submit</v-btn>
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
}
}
</script>

<style>

</style>