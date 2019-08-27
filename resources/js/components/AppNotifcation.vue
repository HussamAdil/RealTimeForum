<template v-slot:activator="{ on }">

  <div class="text-center">
    <v-menu offset-y>
             <template v-slot:activator="{ on }">
        <v-btn
         
           
          v-on="on"
        >
            <v-icon>add_alert</v-icon> 5
        </v-btn>
      </template>
     
     
      <v-list>
        <v-list-item
           
        >
          <v-list-item-title>item</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
  </div>
  

</template>

<script>
export default {
    data()
    {
        return {
            read:{},
            unread:{},
            unreadCount:0
        }
    },
created()
{
    if(user.loggedIn())
    {
    this.getNotication()
    }
   

},
methods:{
    getNotication(){
        axios.post('/api/notification')
        .then(res => {
            this.read = res.data.read
            this.unread = res.data.unread
            this.unreadCount = res.data.unread.length
        })
    }
}
}
</script>

<style>

</style>