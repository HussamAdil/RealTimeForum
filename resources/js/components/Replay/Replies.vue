<template>
<v-container>
  <div  >
    <Reply  v-for="reply in content" :key="reply.id"   :data="reply" ></Reply>
  </div>
</v-container>
</template>

<script>
 import bus from '../../bus';
import Reply from './Reply'
export default {
  props:['replies'],
  data(){
    return {
      content:this.replies
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
       } 
     }

}
</script>

<style>

</style>