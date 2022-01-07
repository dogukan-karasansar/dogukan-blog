<template>
    <navbar />
    <div class="mt-3">
        <router-view />
    </div>
</template>
<script>
import Navbar from "./components/Navbar.vue";
export default {
    name: "App",
    components: {
        Navbar,
    },
};
</script>
