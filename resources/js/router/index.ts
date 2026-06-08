import { createRouter, createWebHistory } from 'vue-router';
// @ts-ignore
import { bookRoutes } from '../domains/books/routes';

export const router = createRouter({
    history: createWebHistory(),
    routes: [...bookRoutes],
});
