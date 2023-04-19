import Home from '../components/Pages/Home.vue';
import NotesIndex from '../components/Notes/Index.vue';
import NotesCreate from '../components/Notes/Create.vue';
import NotesEdit from '../components/Notes/Edit.vue';
import NotesShow from '../components/Notes/Show.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'notes.index',
        path: '/notes',
        component: NotesIndex
    },
    {
        name: 'notes.create',
        path: '/notes/create',
        component: NotesCreate
    },
    {
        name: 'notes.edit',
        path: '/notes/edit/:id',
        component: NotesEdit
    },
    {
        name: 'notes.show',
        path: '/notes/show/:id',
        component: NotesShow
    },
];
