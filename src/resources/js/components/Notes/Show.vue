<template>
    <div>
        <h3 class="text-center">Note</h3>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Title</label>
                    <p type="text" class="form-control">{{ note.title }}</p>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <p type="text" class="form-control" v-html="note.description"></p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            note: {},
        }
    },
    mounted() {
        this.axios
            .get('/api/notes/' + this.$route.params.id)
            .then((response) => {
                this.note = response.data;
            });
    },
}
</script>
