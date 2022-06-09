<template>
    <div>
    <div v-if="submitted">
        <p class="alert alert-success text-center"> Thank you for adding your post </p>
    </div>
        <form @submit.prevent="Add">
        <label> Book Title </label>
        <input type="text" placeholder="Book Title" v-model.lazy="book.title" required /> <br>
         <label> Book Author </label>
        <input type="text" placeholder="Book Author"  v-model.lazy="book.author" /> <br>
        <label> Content </label>
        <textarea type="text" placeholder="Book content"  v-model.lazy="book.content"> </textarea> <br>
       
       <button type="submit" class="btn btn-danger"> Add Post</button>
       </form>
       
    </div>
    
</template>

<script>
    export default {
        data() {
            return {
               book:{
               title:"",
                author:"",
                content:"", 
               
               },
                submitted:false,                
            }
        },
        methods: {
            
            Add:function() {
            this.axios
                .post('http://localhost:8000/api/add',{
                    author:this.book.author,
                    title:this.book.title,
                    content:this.book.content,

                }).then(response => {
                    this.submitted=true;

                });
            }
        }
    }
    
</script>
<style>
input[type="text"],textarea{
    display:block;
    width:100%;
    padding:8px;
}
button[type='submit']{
    padding:8px;
}

</style>
