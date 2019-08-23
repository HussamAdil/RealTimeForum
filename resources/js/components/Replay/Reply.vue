<template>
  <div class="">
      <v-card>
          <v-card-title class="mt-1">
              <div class="headline"> {{data.user}}  </div>
              <div class="ml-2">{{data.create_at}} </div>
              
          </v-card-title>
          <v-divider></v-divider>
          <v-card-text v-html="data.relpy"> </v-card-text>
      </v-card>
  </div>
</template>

<script>
 
export default {
    props:['data']
    ,
    data(){
        return {
            own:user.own(this.data.user_id)
            }

        }
}
</script>

<style>

</style>