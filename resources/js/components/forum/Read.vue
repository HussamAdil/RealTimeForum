<template>
<div>
<EditiQuestion v-if="editing" :data=question></EditiQuestion>
<div v-else>
      <ShowQestion :data=question v-if="question"></ShowQestion>
      <v-container>

      <Replies :replies="question.replies"></Replies>
      <CreateReply :qustionslug="question.slug"></CreateReply>
      
      </v-container>
</div>
</div>

</template>

<script>
import ShowQestion from './ShowQuestion';
import EditiQuestion from './editQuestion';
import Replies from '../Replay/Replies'
import CreateReply from '../Replay/Create'
import bus from '../../bus';
export default {
    components:{ShowQestion,EditiQuestion,Replies,CreateReply},
    
    data()
    {
        return { question:null,
                 editing:false}
    },
created()
{
    this.listen()
    
    this.getQuestion()
    
},
methods:{
    listen()
    {
        bus.$on('startedting' , ()=> {
              this.editing = true
        });
        bus.$on('cancelEditing' , ()=>{
            this.editing = false
        })
    },
    getQuestion()
    {
        axios.get('/api/question/'+this.$route.params.slug)
    .then(res => this.question = res.data.data)
    }
} 
}
</script>

<style>

</style>