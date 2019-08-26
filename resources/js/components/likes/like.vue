<template>
  <div>
      <v-btn icon :color="color" @click="likeIt">
          <v-icon>favorite</v-icon> {{count}}
      </v-btn>
  </div>
</template>

<script>
export default {
    props:['content'],
        data()
    {
        return {
            liked:this.content.liked,
            count:this.content.like_count
        }
    }, 
methods:{

    likeIt()
    {
        if(user.loggedIn())
        {
            this.liked ? this.decr() : this.incr()
            this.liked = !this.liked
        }
    },
    incr(){
        axios.post(`/api/like/${this.content.id}`)
        .then(res => this.count++ )
        
    },   
    decr(){
        axios.delete(`/api/like/${this.content.id}`)
        this.count--
    }

},
computed:{
    color()
    {
        return this.liked ? 'red' : 'red lighten-4';
    }
}
}
</script>

<style>

</style>