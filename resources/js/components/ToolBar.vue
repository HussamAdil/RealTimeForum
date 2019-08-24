 
 <template>
  <v-toolbar>
      <v-toolbar-title>Title</v-toolbar-title>

      <v-spacer></v-spacer>

      <div>
        <div>
        <router-link  v-if="item.show" v-for="item in items" :key="item.title" :to="item.to"  > 
           <v-btn color="#eee" class="mr-2">  {{item.title}}  </v-btn> 
          </router-link>
        </div>

        

      </div>

      <template v-if="$vuetify.breakpoint.smAndUp">
        <v-btn icon>
          <v-icon>mdi-export-variant</v-icon>
        </v-btn>
        <v-btn icon>
          <v-icon>mdi-delete-circle</v-icon>
        </v-btn>
        <v-btn icon>
          <v-icon>mdi-plus-circle</v-icon>
        </v-btn>
      </template>
    </v-toolbar>
</template>

<script>
import bus from '../bus';
 export default {
  
    data()
    {
      return {
        items:[
          {title:"Login" , to:"/Login", show:true},

          {title:"Forum" , to:"/Forum", show:true},

          {title:"Ask" , to:"question/Ask", show:user.loggedIn()},

           {title:"Category" , to:"/CreateCategory", show:user.IsAdmin()},

         {title:"Logout" , to:"/Logout", show:user.loggedIn()},
        ]
      }
    },
    created()
    {
      bus.$on('logout' , () => 
      {
        user.logout()
      })
    } ,
     computed: {
    
    }
}
</script>

<style>

</style>
