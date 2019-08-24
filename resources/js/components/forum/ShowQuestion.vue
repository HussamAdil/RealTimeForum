<template>

      <v-card>
    <v-container fluid>
        <v-card-title>
            <div>
            <div class="headline">
                {{ data.title }}
            </div>
            <span class="gery--text"> {{ data.user}} said {{data.created_at}}

            </span>
            </div>
            <v-spacer></v-spacer>
            <v-btn colo="green"> {{ data.count}} replies</v-btn>
        </v-card-title>
        <v-card-text v-html="body"></v-card-text>
           <v-card-actions v-if="own">
 <v-btn icon small>
                  <v-icon color="blue" @click="edit">edit</v-icon>
               </v-btn>
              <v-btn icon small>
                  <v-icon color="red" @click="destroy">delete</v-icon>
               </v-btn>
           </v-card-actions>
             
       
    </v-container>
      </v-card>
    
 
</template>

<script>
 import bus from '../../bus';
import md from 'marked'
 
export default {
    props:['data'],
    
    data(){
        return {
            own : user.own(this.data.user_id)
        }
    },

computed:{
    body()
    {   
    return md.parse(this.data.body)
    }
},
 
methods:{
    destroy()
    {
        axios.delete(`/api/question/${this.data.slug}`)
        .then(res => this.$router.push('/forum'))
        .catch(error => console.log(error))
    },
    edit()
    {
        bus.$emit('startedting')
    }
}

}
</script>

<style>

</style>