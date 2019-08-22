<template>
   <v-card
    max-width="500"
    class="mx-auto"
  >
    <v-toolbar
      color="indigo"
      dark
    >
          <v-toolbar-title>Category</v-toolbar-title>

    </v-toolbar>
       <v-list color="red" v-for="category in categies" :key="category.id">
             <v-list-item> {{category.name}} </v-list-item>
       
       </v-list>
   </v-card>
</template>

<script>
export default {
    data()
    {
        return {
            categies:null
        }
    },
created()
{
    axios.get('/api/category')
    .then(res => this.categies = res.data.data)
}
}
</script>

<style>

</style>