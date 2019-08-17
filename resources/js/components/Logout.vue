<template>
  
</template>

<script>
 import bus from '../bus';
export default {
created()
{
   bus.$emit('logout');
}
}
</script>

<style>

</style>