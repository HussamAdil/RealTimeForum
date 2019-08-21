<template>
<div>
<EditiQuestion v-if="editing" :data=question></EditiQuestion>
<div v-else>
      <ShowQestion :data=question v-if="question"></ShowQestion>
</div>
</div>

</template>

<script>
import ShowQestion from './ShowQuestion';
import EditiQuestion from './editQuestion';
import bus from '../../bus';
export default {
    components:{ShowQestion,EditiQuestion},
    
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