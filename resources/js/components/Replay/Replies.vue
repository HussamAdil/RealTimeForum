<template>
<v-container>
  <div  >
    <Reply  v-for="(reply,index) in content" :key="reply.id" :index=index  :data="reply" ></Reply>
  </div>
</v-container>
</template>

<script>
 import bus from '../../bus';
import Reply from './Reply'
export default {
  props:['question'],
  data(){
    return {
      content:this.question.replies
    }
  },
components:{Reply},
created(){
  this.listent()
},
     methods:
     {
       listent()
       {
         bus.$on('newReply' , (reply) => {
           this.content.unshift(reply)
         })
         bus.$on('deleteReply',(index)=>{
            axios.delete(`/api/question/${this.question.slug}/reply/${this.content[index].id}`)
           .then(res => {
                this.content.splice(index,1)
           })
           
         })
       } 
     }

}
</script>

<style>

</style>