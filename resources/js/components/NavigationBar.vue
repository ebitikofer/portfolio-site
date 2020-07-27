<template>
    <div class="links">
        <div
            class="link-wrapper"
            :key="index"
            v-for="(llink, index) in llinks">
            <navigation-link :link="llink" :delay="index"></navigation-link>
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
        current: String
        // links: Array
    },
    data: () => {
        return {
            llinks: [
                {
                    id: "home",
                    url: "/",
                    isCurrent: false
                },
                // {
                //     id: 'blog',
                //     url: 'blog',
                //     isCurrent: false
                // },
                {
                    id: "portfolio",
                    url: "portfolio",
                    isCurrent: false
                },
                {
                    id: "github",
                    url: "https://github.com/ebitikofer",
                    isCurrent: false
                },
                // {
                //     id: 'art',
                //     url: 'art',
                //     isCurrent: false
                // },
                {
                    id: "about",
                    url: "about",
                    isCurrent: false
                }
            ]
        };
    },
    mounted() {
        this.llinks.forEach(link => {
            link.isCurrent = false;
            if (this.current === link.id) {
                link.isCurrent = true;
            }
        });
        this.dayExpr = this.links;
    },
    watch: {
        current: function() {
            this.llinks.forEach(link => {
                link.isCurrent = false;
                if (this.current === link.id) {
                    link.isCurrent = true;
                }
            });
            this.dayExpr = this.links;
        }
    }
};
</script>

<style>
.link-wrapper {
    display: inline-block;
}

.route-link {
    color: #fff;
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.1rem;
    text-decoration: none;
    text-transform: uppercase;
}

.route-link:hover {
    color: #1468a0;
}

.current {
    color: #999 !important;
    cursor: default;
}
</style>
