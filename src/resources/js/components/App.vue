<template>
    <div class="container">
        <div class="text-center">
            <span class="text-secondary">Note Service</span>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/" class="nav-item nav-link">Home</router-link>
                    <router-link to="/notes" class="nav-item nav-link">All Notes</router-link>
                </div>
            </div>
        </nav>

        <hr>
        <router-link to="/add" type="button" class="btn btn-success">+ New Note</router-link>

        <br/>
        <router-view></router-view>
    </div>
</template>

<script>
export default {}
</script>
