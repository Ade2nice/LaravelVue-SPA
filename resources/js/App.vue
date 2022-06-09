<template>
    <div class="container">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            
            <span class="text-secondary">My First Laravel SPA</span>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link :to="{name:'home'}" class="nav-item nav-link">Home</router-link>
                    <router-link :to="{ name:'add'}" class="nav-item nav-link">Add Book</router-link>
                </div>
            </div>
        </nav>
        <br/>
        <router-view/>
    </div>
</template>

<script>
    export default {}
</script>
<style >
nav a.router-link-exact-active{
    background:red;
    color:white;
    border-radius:5px;
}
</style>