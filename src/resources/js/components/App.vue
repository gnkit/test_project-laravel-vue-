<template>
    <div class="container">
        <div class="text-center">
            <span class="text-secondary">Note Service</span>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav">
                    <router-link :to="{ name: 'home'}" class="nav-item nav-link">Home</router-link>
                    <router-link :to="{ name: 'notes.index'}" class="nav-item nav-link">All Notes</router-link>
                </div>
            </div>
        </nav>

        <br/>
        <router-view></router-view>
    </div>
</template>

<script>
export default {}
</script>
