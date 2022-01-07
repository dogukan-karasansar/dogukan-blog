import { createWebHistory, createRouter } from "vue-router";
//routes
import routes from "./routes";

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
