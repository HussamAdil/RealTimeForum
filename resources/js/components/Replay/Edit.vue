<template>
      <form @submit.prevent="update()">
            <v-text-field
         v-model="replyContent"
         value="reply.reply"
         type="text"
          
 
    ></v-text-field>
        <v-btn type="submit" @click="update" color="green">
          <v-icon>done</v-icon>
      </v-btn>
       <v-btn type="submit" @click="cancel" >
          <v-icon>cancel</v-icon>
      </v-btn>
    </form>
</template>

<script>
import bus from '../../bus';
export default {
props:['reply'],
data(){
    return{
        replyContent:this.reply.relpy
    }
},
 methods:{
     cancel()
     {
         bus.$emit('cancelEditing')
     },
     update()
     {
         axios.patch(`/api/question/${this.reply.question_slug}/reply/${this.reply.id}`,{body:this.replyContent})
         .then(res => this.cancel())
     }
 }
}
</script>

<style>

</style>