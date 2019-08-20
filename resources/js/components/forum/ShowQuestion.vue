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
            <v-btn colo="green"> 5 replies</v-btn>
        </v-card-title>
        <v-card-text v-html="body"></v-card-text>
           <v-card-actions v-if="own">
 <v-btn icon small>
                  <v-icon color="blue">edit</v-icon>
               </v-btn>
              <v-btn icon small>
                  <v-icon color="red" @click="destroy">delete</v-icon>
               </v-btn>
           </v-card-actions>
             
       
    </v-container>
      </v-card>
    
 
</template>

<script>
import md from 'marked'
export default {
    data(){
        return {
            own:user.own(this.data.user_id)
        }
    },
props:['data'],
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
    }
}

}
</script>

<style>

</style>