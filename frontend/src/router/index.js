import { createRouter, createWebHistory } from "vue-router";

const routes = [
  {
    path: '/',
    name: 'home',
    meta: {
      title: "Home",
    },
    component: () => import('../views/HomePage.vue')
  },
];

export const router = createRouter({
  history: createWebHistory(),
  base: ["staging", "production"].includes(process.env.NODE_ENV)
    ? "/"
    : process.env.BASE_URL,
  linkActiveClass: "active",
  routes: routes,
});

