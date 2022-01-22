<template>
    <div
        style="
            position: absolute;
            top: 50%;
            left: 50%;
            width: calc(100% - 20%);
            height: 80vh;
            margin: -300px 0 0 -40%;
            background-image: url('https://images.pexels.com/photos/1597623/pexels-photo-1597623.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
            background-repeat: no-repeat;
            background-size: 100% 100%
            background-position: center
        "
        class="border-0 d-flex align-items-center justify-content-center rounded shadow-lg"
    >
        <div align="center" class="" :key="abouts.id">
            <h1 class="header">{{ abouts.title }}</h1>
            <img
                class="profile"
                src="https://media-exp1.licdn.com/dms/image/C4E03AQFL53I4RJrkKg/profile-displayphoto-shrink_400_400/0/1640802307804?e=1648080000&v=beta&t=-nF7O39a56VlA_UFr9ah2iXUOmMcWU905KIJcRaejgY"
                :alt="abouts.tag"
            />
            <p class="description">{{ abouts.description }}</p>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            name: "Doğukan Karasansar",
            abouts: {},
            url: process.env.MIX_APP_URL_PUBLIC,
        };
    },
    methods: {
        about() {
            axios
                .get(process.env.MIX_APP_URL_PUBLIC + "about")
                .then((response) => {
                    this.abouts = response.data.data;
                    console.log(response.data.data);
                })
                .catch((e) => console.log(e.message));
        },
    },
    mounted: function () {
        this.about();
    },
};
</script>

<style>
@import url("../styles/pages/about.css");
</style>
