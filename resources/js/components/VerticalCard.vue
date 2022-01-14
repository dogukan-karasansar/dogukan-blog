<template>
    <div style="border-radius: 10px;" class="card border-0 shadow">
        <img
            style="border-radius: 10px;"
            src="https://images.pexels.com/photos/9829615/pexels-photo-9829615.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
            class="card-img vertical-card-img"
            alt="image">
        <div class="card-img-overlay">
            <span class="card-title">KATEGORİ</span>
            <h5 class="card-text mt-1">Kısa Açıklama dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.</h5>

            <div class="read-container">
                <router-link class="router-link" to="#"><div class="read-more shadow-lg"><span class="read-more-text">DEVAM</span></div></router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "VertivalCard"
}
</script>

<style scoped>
@import "../styles/components/vertiacl-card.css";
</style>
