<template>
    <div>
        <h3 class="text-center">Edit Note</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateNote">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="note.title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="note.description">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            note: {}
        }
    },
    created() {
        this.axios
            .get(`/api/notes/${this.$route.params.id}`)
            .then((response) => {
                this.note = response.data;
            });
    },
    methods: {
        updateNote() {
            this.axios
                .post(`/api/note/update/${this.$route.params.id}`, this.note)
                .then((response) => {
                    this.$router.push({name: 'allNotes'});
                });
        }
    }
}
</script>
