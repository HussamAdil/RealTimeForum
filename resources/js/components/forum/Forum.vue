<template>
     
        <v-container fluid grid-list-md>
            <v-layout row wrap>
                <v-flex xs8>
                    <question 
                        v-for="question in questions"
                        :key="question.id"
                        :data = question
                    ></question>
                </v-flex>
                <v-flex xs4>
                <AppSiderBar></AppSiderBar>

                </v-flex>
            </v-layout>
        </v-container>
    
</template>

<script>
import question from './question'
import AppSiderBar from './AppSiderBar'
    export default {
         data:function()
         {
             return {  questions:{} }
         }
         

         ,
         components:{question ,AppSiderBar}
         ,
        
         created(){
             axios.get('/api/question')
             .then( res => this.questions = res.data.data)
             .catch(error => console.log('error to get questions data'))
         }
    }
</script>
