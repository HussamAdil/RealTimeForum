<template>
  <div class="">
      <v-card>
          <v-card-title class="mt-1">
              <div class="headline"> {{data.user}}  </div>
              <div class="ml-2">{{data.create_at}} </div>
              
          </v-card-title>
          <v-divider></v-divider>
          <v-card-text v-html="data.relpy"> </v-card-text>
          <v-card-actions v-if="own">
              <v-btn>
                  <v-icon small >edit</v-icon>
                   
              </v-btn>
              <v-btn @click="destroy">
                   <v-icon small >delete</v-icon>
              </v-btn>
          </v-card-actions>
      </v-card>
  </div>
</template>

<script>
 import user from '../../helpers/user'
  import bus from '../../bus';
export default {
    
    props:['data' ,'index']
,
methods:{
    destroy()
    {
        bus.$emit('deleteReply',this.index)
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