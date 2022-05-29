<template>
    <div class="container-fluid">
        <div class="row">
            <Post v-for="(post, index) in posts" :key="index"
             :post="post"/>
        </div>
    </div>
     
 
</template>

<script>
import Post from "./Post.vue" 
export default {
    name:"Posts", 
    components:{
        Post,
    },
    data(){
        return {
            posts:[],
        }
    },
    methods:{
        getPosts: function(){
            axios.get("http://127.0.0.1:8000/api/posts")
                .then((result) =>{
                    console.warn(result);
                    this.posts=result.data.result;
                    console.log(this.posts=result.data.result)
                })
                .catch((error)=>{
                    console.warn(error);
                })
        }
    },
    created:function(){
        this.getPosts();
    }
}
</script>

<style>

</style>