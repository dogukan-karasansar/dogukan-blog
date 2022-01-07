require("./bootstrap");

import { createApp } from "vue";

//App
import App from "./App.vue";

//Router
import router from "./Router";

createApp(App).use(router).mount("#app");
