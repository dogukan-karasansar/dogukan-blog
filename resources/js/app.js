require("./bootstrap");

import { createApp } from "vue";

import Home from "./components/Home.vue";

const app = createApp({

})


app.component('home', Home);

app.mount('#app');

