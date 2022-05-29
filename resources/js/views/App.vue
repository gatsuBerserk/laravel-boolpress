<template>
  <div>
     <Posts />
  </div>
</template>

<script>
import Posts from "../components/Posts.vue"

export default {
    name:"App",
    data(){
      return{
        posts:[]
      }
    }, 
    components:{
      Posts,

    }
}
</script>

<style lang="scss" scoped>

</style>