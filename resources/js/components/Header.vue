<template>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <router-link class="navbar-brand" :to="{ name:'home' }">Boolpress</router-link>
                <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <router-link class="nav-link" :to="{ name:'posts' }">Posts</router-link>
                    </li>
                    <li class="nav-item">
                    <router-link class="nav-link" :to="{ name:'contacts' }">Contatti</router-link>
                    </li>
                    <li class="nav-item">
                    <router-link class="nav-link" :to="{ name:'about' }">About</router-link>
                    </li>
                </ul>
                <a class="btn btn-success" href="/admin">Login</a>
                </div>
            </div>
    </nav>
</header>
</template>

<script>
export default {
    name:"Header",

}
</script>

<style>

</style>