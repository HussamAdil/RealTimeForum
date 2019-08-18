<template>
<v-container>
  <form @submit.prevent="create">
    <v-text-field
      v-model="form.title"
      type="title"
      placeholder="title"
      required
       ></v-text-field>
      
  <div>
    <v-autocomplete
      label="category"
     
      :items="categoies"
       v-model="form.category_id"
       item-text="name"
       item-value="id"
    ></v-autocomplete>
    
     
       <vue-simplemde   v-model="form.body" />


  </div>
 
    <v-btn color="green" class="mr-4" type="submit">ask</v-btn>

          </form>
          
</v-container>
  
</template>

<script>
   import VueSimplemde from 'vue-simplemde'

export default {
  components: {
      VueSimplemde
    },
data(){
    return {

        form:{
            title:null,
            category_id :null,
            body:null,
        },
        categoies :{},
        errors:{} ,
    }
},
methods:{
create()
{
  axios.post('/api/question' , this.form)
  .then(res => console.log(res.data))
  .catch(error => this.errors =  error.response.data)
}
},
created()
{
  axios.get('/api/category')
  .then(res => this.categoies = res.data.data)
}
}
</script>

<style>

</style>