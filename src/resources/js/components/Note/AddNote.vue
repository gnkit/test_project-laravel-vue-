<template>
    <div>
        <h3 class="text-center">Add Note</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addNote">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="note.title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="note.description">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save</button>
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
    methods: {
        addNote() {
            this.axios
                .post('/api/notes', this.note)
                .then(response => (
                    this.$router.push({name: 'allNotes'})
                ))
                .catch(error => console.log(error))
                .finally(() => this.loading = false)
        }
    }
}
</script>
