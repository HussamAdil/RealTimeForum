<template>
<div>
    
    <form @submit.prevent="submit()">
        <textarea name="body" v-model="body"></textarea>
       <v-btn type="submit" >
          <v-icon>done</v-icon>
      </v-btn>
    </form>

</div>
</template>

<script>
 import bus from '../../bus';

export default {
 
    props:['qustionslug'],
    data(){
        return {
            body:null
        }
    },
    methods:{
        submit()
        {
            axios.post(`/api/question/${this.qustionslug}/reply`,{body:this.body})
            .then(res => {
                this.body = ''
                bus.$emit('newReply', res.data.reply)
                window.scrollTo(0,0)
            })
        }
    }
}
</script>

<style>

</style>