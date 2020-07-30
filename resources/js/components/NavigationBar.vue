<template>
    <div class="links">
        <div
            class="link-wrapper"
            :key="index"
            v-for="(link, index) in links">
            <navigation-link :link="link" :delay="index"></navigation-link>
            <!-- <a id="home" href="/">Home</a>
            <a id="blog" href="blog">Blog</a>
            <a id="portfolio" href="portfolio">Portfolio</a>
            <a id="github" href="https://github.com/ebitikofer">GitHub</a>
            <a id="art" href="art">Art</a>
            <a id="about" href="about">About</a> -->
        </div>
    </div>
</template>

<script>
import NavigationLink from './NavigationLink.vue'

export default {
    name: "NavigationBar",
    components: {
        NavigationLink
    },
    props: {
        current: String,
        links: Array
    },
    mounted() {
        this.selectCurrent();
    },
    watch: {
        current: function() {
            this.selectCurrent();
        },
        links: function() {
            this.selectCurrent();
        }
    },
    methods: {
        selectCurrent: function() {
            if(this.links) {
                this.links.forEach(link => {
                    console.log(this.current === link.id);
                    link.isCurrent = false;
                    if (this.current === link.id) {
                        link.isCurrent = true;
                    }
                });
            }
        }
    }
};
</script>

<style>
.link-wrapper {
    display: inline-block;
}
</style>
