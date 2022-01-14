<template>
    <a @click="scrollToTop()">
        <div
            class="upper d-flex justify-content-center align-items-center"
        >
            <img class="mb-1" :src="'/images/upload.png'" width="25" height="25"/>
        </div>
    </a>
</template>

<script>

export default {
    name: "Upper",
    methods: {
        scrollToTop() {
            window.scrollTo(0, 0);
        },
    }
}
</script>

<style scoped>
@import "../styles/components/upper.css";
</style>
