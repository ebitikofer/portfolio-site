<template>
    <div class="links">
        <a
            :key="index"
            v-for="(llink, index) in llinks"
            :id="llink.id"
            :href="llink.url"
            :class="{ 'route-link': true, current: llink.isCurrent }"
            @mouseover="mouseOver"
            @mouseleave="mouseLeave"
            >{{ llink.id }}</a
        >
        <!-- <a id="home" href="/">Home</a>
        <a id="blog" href="blog">Blog</a>
        <a id="portfolio" href="portfolio">Portfolio</a>
        <a id="github" href="https://github.com/ebitikofer">GitHub</a>
        <a id="art" href="art">Art</a>
        <a id="about" href="about">About</a> -->
    </div>
</template>

<script>
export default {
    name: "NavigationLinks",
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
    },
    methods: {
        mouseOver: function(event) {
            this.animateLetter(event, 1.2, 800, 400);
        },
        mouseLeave: function(event) {
            this.animateLetter(event, 1.0, 600, 300);
        },
        animateLetter: function(event, scale, duration, elasticity) {
            this.$anime.remove(event.target);
            this.$anime.timeline().add({
                targets: event.target,
                translateY: [-25, 0],
                opacity: [0.1, 1],
                duration: 5000,
                delay: 0,
                easing: "easeOutElastic"
            });
        }
    }
};
</script>

<style>
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
