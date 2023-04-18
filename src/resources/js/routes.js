import AllNotes from './components/Note/AllNotes.vue';
import AddNote from './components/Note/AddNote.vue';
import EditNote from './components/Note/EditNote.vue';

export const routes = [
    {
        name: 'allNotes',
        path: '/notes',
        component: AllNotes
    },
    {
        name: 'add',
        path: '/add',
        component: AddNote
    },
    {
        name: 'edit',
        path: '/edit',
        component: EditNote
    },
];
