//Pages
import Home from "../Pages/Home.vue";
import About from "../Pages/About.vue";
import NotFound from "../Pages/NotFound.vue";
import Posts from "../pages/Posts.vue";
import NFT from "../pages/NFT.vue";
import ErrorSolutions from "../pages/ErrorSolutions";

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
        path: "/posts",
        name: "Posts",
        component: Posts,
    },
    {
        path: "/NFT",
        name: "NFT",
        component: NFT,

    },
    {
        path: "/error-soluitons",
        name: "ErrorSolutions",
        component: ErrorSolutions,
    },
    {
        path: "/:catchAll(.*)",
        name: "pageNotFound",
        component: NotFound,
    },
];

export default routes;
