<template>
  <div class="">
      <v-card>
          <v-card-title class="mt-1">
              <div class="headline"> {{data.user}}  </div>
              <div class="ml-2">{{data.create_at}} </div>
              
          </v-card-title>
          <v-divider></v-divider>
          <Edit :reply="data" v-if="editing"></Edit>
           
          <v-card-text v-else v-html="data.relpy"> </v-card-text>
          <div v-if="!editing">
          <v-card-actions v-if="own">
              <v-btn @click="edit">
                  <v-icon small >edit</v-icon>
                   
              </v-btn>
              <v-btn @click="destroy">
                   <v-icon small >delete</v-icon>
              </v-btn>
          </v-card-actions>
          </div>

      </v-card>
  </div>
</template>

<script>
 import user from '../../helpers/user'
  import bus from '../../bus';
  import Edit from './Edit' ;

export default {
    
    props:['data' ,'index'],
    components:{Edit}
,
data(){
    return{
        editing:false
    }
},
created(){
    this.lisent()
}
,
methods:{
    destroy()
    {
        bus.$emit('deleteReply',this.index)
    },
    edit()
    {
        this.editing = true
    },
    lisent()
    {
        bus.$on('cancelEditing',() => {
            this.editing = false
        })
    }
}
    ,
        computed:
        {
            own:function()
            {
              return user.own(this.data.user_id)
            }
        }

}
</script>

<style>

</style>