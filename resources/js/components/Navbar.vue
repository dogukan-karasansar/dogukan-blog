<template>
    <div class="container-fluid align-items-start shadow-sm navbar-fluid">
        <div class="row p-2">
            <div class="col-md-3 d-flex align-items-start flex-column">
                <div class="mt-0">
                    <a href="/">
                        <img
                            style="margin-left: 100px"
                            :src="'/images/logo.png'"
                            width="40"
                            height="40"
                        />
                    </a>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center flex-column">
                <div class="mt-2">
                    <!--   ABOUT   -->
                    <router-link
                        class="router-link-active"
                        v-if="$route.name === 'About'"
                        to="/about"
                        >Hakkımda
                    </router-link>
                    <router-link class="router-link" v-else to="/about"
                        >Hakkımda</router-link
                    >

                    <!--    POSTS   -->
                    <router-link
                        class="router-link-active"
                        v-if="$route.name === 'Posts'"
                        to="/posts"
                        >Yazılarım
                    </router-link>
                    <router-link class="router-link" v-else to="/posts"
                        >Yazılarım</router-link
                    >

                    <!--          HOME          -->
                    <router-link
                        class="router-link-active"
                        v-if="$route.name === 'Home'"
                        to="/"
                        >Blog</router-link
                    >
                    <router-link class="router-link" to="/" v-else
                        >Blog</router-link
                    >

                    <!--  ERROR SOLUTİONS -->
                    <router-link
                        class="router-link-active"
                        v-if="$route.name === 'ErrorSolutions'"
                        to="/error-soluitons"
                        >Hata Çözümleri
                    </router-link>
                    <router-link
                        class="router-link"
                        v-else
                        to="/error-soluitons"
                        >Hata Çözümleri</router-link
                    >

                    <!-- YETENEK AĞACI -->
                    <a
                        class="router-link"
                        href="https://karasansar-cv-tree.vercel.app/"
                        >Yetenek Ağacı</a
                    >

                    <!--  NFT -->
                    <!--<router-link
                        class="router-link-active"
                        v-if="$route.name === 'NFT'"
                        to="/NFT"
                        >NFT</router-link
                    >
                    <router-link class="router-link" v-else to="/NFT"
                        >NFT</router-link
                    >-->
                </div>
            </div>
            <div class="col-md-3 d-flex align-items-end flex-column">
                <div class="mt-2">
                    <a
                        href="https://www.linkedin.com/in/do%C4%9Fukan-karasansar-627770194/"
                        target="_blank"
                    >
                        <img
                            src="https://media-exp1.licdn.com/dms/image/C4E03AQFL53I4RJrkKg/profile-displayphoto-shrink_400_400/0/1640802307804?e=1647475200&v=beta&t=sMlJfQAkTwj33d_sxsyZbBlzNbMyrPfVQtkfbrrfI4k"
                            alt="linkedin"
                            class="rounded-circle navbar-image"
                    /></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style>
@import "../styles/components/navbar.css";
router-link:hover {
    color: black;
}
</style>
