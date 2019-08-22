<template>
<v-container >
  <form @submit.prevent="create">
    <v-text-field
      v-model="form.name"
      type="category"
      placeholder="category"
      required
       
    ></v-text-field>
      <v-btn color="green" class="mr-4" type="submit">Create</v-btn>

  </form>
  <v-toolbar  dark class="mt-2 ">
      
      <v-toolbar-title>Category</v-toolbar-title>

  </v-toolbar>
 
 
   <v-list subheader>
        <v-list-item
        v-for="category in categies" :key="category.id">
               <v-list-item-content>
          <v-list-item-title v-text="category.name"></v-list-item-title>
        </v-list-item-content>
        <v-list-item-icon>
         <v-btn class="mr-1">
                    edit
         </v-btn>
          <v-btn color="red">
                    delete
         </v-btn>

        </v-list-item-icon>
        </v-list-item>
           <v-divider></v-divider>
   </v-list>
         
  
       
  </v-container>
</template>

<script>
export default {
data(){
    return{
        form:{
            name:null
        },
        categies:null
    }
},
methods:
{
    create(){
        axios.post('api/category' , this.form)
        .then(res => console.log(res.data.date))
    }
},
created()
{
    axios.get('/api/category')
    .then(res => this.categies = res.data.data)
}
}
</script>

<style>

</style>
