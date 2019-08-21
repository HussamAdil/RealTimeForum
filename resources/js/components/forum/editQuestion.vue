<template>
<v-container>
  <form @submit.prevent="update">
    <v-text-field
      v-model="form.title"
      type="title"
      placeholder="title"
      required
       ></v-text-field>
              <vue-simplemde   v-model="form.body" />
               <v-card-actions  >
      <v-btn icon small type="submit">
                  <v-icon color="blue" >save</v-icon>
               </v-btn>
              <v-btn icon small>
                  <v-icon color="red" @click="cancel" >cancel</v-icon>
               </v-btn>
           </v-card-actions>
 </form>
</v-container>

</template>
<script>
 
   import VueSimplemde from 'vue-simplemde'
import bus from '../../bus';

export default {
    props:['data'],
  components: {
      VueSimplemde
    },
    data(){
        return {
             form:{
                 title:null ,
                  body:null,
             }
             
        }
    },
    methods:{
        cancel()
        {
            bus.$emit('cancelEditing')
        },
        update()
        {
          axios.patch(`/api/question/${this.data.slug}` , this.form)
            .then(res => this.cancel())
            .catch(error => console.log(response.data.error))
        }
    },
    mounted(){
        this.form = this.data;
    }
}
</script>

<style>

</style>