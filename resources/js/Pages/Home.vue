<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <BannerText/>
            </div>


            <div class="col-md-12 d-flex mt-3">
                <div class="container">
                    <div class="row">

                        <!-- Burada uzun kartlar 5 kısa kartlar 3 -->

                        <div class="col-md-5 m-3">
                            <HorizontalCard/>
                        </div>
                        <div class="col-md-3 m-3">
                            <VerticalCard/>
                        </div>
                        <div class="col-md-3 m-3">
                            <VerticalCard/>
                        </div>
                        <div class="col-md-3 m-3">
                            <VerticalCard/>
                        </div>
                        <div class="col-md-3 m-3">
                            <VerticalCard/>
                        </div>
                        <div class="col-md-5 m-3">
                            <HorizontalCard/>
                        </div>




                    </div>
                </div>
            </div>
        </div>
        <Upper/>
    </div>
</template>

<script>

import BannerText from "../components/BannerText";
import HorizontalCard from "../components/HorizontalCard";
import VerticalCard from "../components/VerticalCard";
import Upper from "../components/Upper";

export default {
    components: {
        Upper,
        BannerText,
        HorizontalCard,
        VerticalCard
    }
};
</script>

<style></style>
