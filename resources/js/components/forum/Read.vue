<template>
  <ShowQestion :data=question></ShowQestion>
</template>

<script>
import ShowQestion from './ShowQuestion'
export default {
    components:{ShowQestion},
    
    data()
    {
        return { question:{}}
    },
created()
{
    axios.get('/api/question/'+this.$route.params.slug)
    .then(res => this.question = res.data.data)
} 
}
</script>

<style>

</style>