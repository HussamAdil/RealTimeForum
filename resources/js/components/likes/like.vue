<template>
  <div>
      <v-btn icon color="red" @click="likeIt">
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
        this.count++
    },   
    decr(){
        this.count--
    }

}
}
</script>

<style>

</style>