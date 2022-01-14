<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <horizontal-card-vue />
            </div>
             <div class="col-md-6 mt-5">
                <vertical-card-vue />
            </div>
        </div>
        <upper />
    </div>
</template>

<script>
import HorizontalCardVue from "../components/HorizontalCard.vue";
import Upper from "../components/Upper.vue";
import VerticalCardVue from "../components/VerticalCard.vue";
export default {
    components: {
        HorizontalCardVue,
        VerticalCardVue,
        Upper,
    },
};
</script>

<style scoped></style>
