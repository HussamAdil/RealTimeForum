<template>
<v-container >
  <form @submit.prevent="submit">
    <v-text-field
      v-model="form.name"
      type="category"
      placeholder="category"
      required
       
    ></v-text-field>
    <v-btn type="submit" color="pink" v-if="editSlug">Update</v-btn>
      <v-btn color="green" v-else class="mr-4" type="submit">Create</v-btn>

  </form>
  <v-toolbar  dark class="mt-2 ">
      
      <v-toolbar-title>Category</v-toolbar-title>

  </v-toolbar>
 
 
   <v-list subheader>
        <v-list-item
        v-for="(category , index) in categies" :key="category.id">
               <v-list-item-content>
          <v-list-item-title >{{ category.name}}</v-list-item-title>
        </v-list-item-content>
        <v-list-item-icon>
         <v-btn class="mr-1" @click="edit(index)">
                    edit
         </v-btn>
          <v-btn color="red" @click="destroy(category.slug,index) ">
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
            name:null,
            editingSlug:null
        },
        categies:{},
        editSlug:null
    }
},
methods:
{
    submit(){     
            this.editSlug ? this.update() : this.create()
             },
    
    create(){
            axios.post('api/category' , this.form)
            .then(res =>  {
            this.categies.unshift(res.data)
             
                this.form.name = null
                
            })
        },
        update()
        {
             axios.patch(`api/category/${this.editSlug}`, this.form)
             .then(res =>  {
            this.categies.unshift(res.data)
                this.form.name = null
                this.editSlug = null
                })
        },
    destroy(slug,index){
        axios.delete(`/api/category/${slug}`)
        .then(res => this.categies.splice(index,1))
    },
    edit(index)
    {
        this.form.name =  this.categies[index].name

        this.editSlug = this.categies[index].slug 

        this.categies.splice(index,1)

    }
},
created()
{
    if(!user.IsAdmin())
    {
        this.$router.push('/forum');
    }
    axios.get('/api/category')
    .then(res => this.categies = res.data.data)
}
}
</script>

<style>

</style>
