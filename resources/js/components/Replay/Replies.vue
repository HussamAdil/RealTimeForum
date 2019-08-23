<template>
<v-container>
  <div v-if="replies">
    <Reply  v-for="reply in replies" :key="reply.id"  :data="reply" ></Reply>
  </div>
</v-container>
</template>

<script>
import Reply from './Reply'
export default {
  props:['replies'],
components:{Reply}

}
</script>

<style>

</style>