//Components
import Home from "../Pages/Home.vue";
import About from "../Pages/About.vue";
import NotFound from "../Pages/NotFound.vue";

//routes
const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/about",
        name: "About",
        component: About,
    },
    {
        path: "/:catchAll(.*)",
        name: "pageNotFound",
        component: NotFound,
    },
];

export default routes;
