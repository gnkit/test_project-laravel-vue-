<template>
    <div>
        <router-link :to="{ name: 'notes.create' }" type="button" class="btn btn-success">+ Add New Note</router-link>

        <h3 class="text-center">All Notes</h3><br/>
        <table class="table table-striped table-hover table-sm table-responsive">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="note in notes" :key="note.id">
                <td>{{ note.id }}</td>
                <td>{{ note.title }}</td>
                <td>{{ note.description }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'notes.show', params: { id: note.id }}" class="btn btn-primary">Show
                        </router-link>
                        <router-link :to="{name: 'notes.edit', params: { id: note.id }}" class="btn btn-secondary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteNote(note.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            notes: []
        }
    },
    created() {
        this.axios
            .get('/api/notes')
            .then(response => {
                this.notes = response.data;
            });
    },
    methods: {
        deleteNote(id) {
            this.axios
                .delete('/api/notes/' + id)
                .then(response => {
                    let i = this.notes.map(item => item.id).indexOf(id);
                    this.notes.splice(i, 1)
                });
        }
    }
}
</script>
