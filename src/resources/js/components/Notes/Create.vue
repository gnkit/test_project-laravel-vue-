<template>
    <div>
        <h3 class="text-center">Create Note</h3>
        <div class="row">
            <div class="col">
                <form @submit.prevent="createNote">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="note.title">
                    </div>
                    <div class="alert alert-danger alert-dismissible" v-if="errors && errors.title"
                         role="alert">
                        <strong>{{ errors.title[0] }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" class="form-control" v-model="note.description"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary mt-3" :value="creatingNote ? 'Saving...' : 'Save'"
                           :disabled="creatingNote">
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            note: {},
            errors: {},
            creatingNote: false
        }
    },
    methods: {
        createNote() {
            this.creatingNote = true;
            this.axios
                .post('/api/notes', this.note)
                .then(response => {
                    this.$router.push({name: 'notes.index'});
                    this.creatingNote = false;
                })
                .catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors;
                    } else {
                        console.log(error);
                    }
                    this.creatingNote = false;
                })
                .finally(() => this.loading = false)
        }
    }
}
</script>
