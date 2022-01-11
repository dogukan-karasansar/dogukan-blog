<template>
    <Navbar />
    <div class="border" style="margin: 75px;">
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
