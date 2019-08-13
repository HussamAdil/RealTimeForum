 <template>
  <v-toolbar>
      <v-toolbar-title>Title</v-toolbar-title>

      <v-spacer></v-spacer>

      <div>
        <v-btn text></v-btn>
        <router-link to="/login">Login</router-link>
        <v-btn text>New Question</v-btn>
        <v-btn text>Home</v-btn>
         <v-btn text>Category</v-btn>

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
export default {

}
</script>

<style>

</style>
