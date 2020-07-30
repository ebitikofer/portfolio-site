<template>
    <div class="link">
        <a
            :id="link.id"
            :href="link.url"
            :class="{ 'route-link': true, current: link.isCurrent }"
            @mouseover="mouseOver"
            @mouseleave="mouseLeave"
            >{{ link.id }}</a
        >
    </div>
</template>

<script>
export default {
    name: "NavigationLink",
    props: {
        link: Object,
        delay: Number
    },
    mounted() {
        const targets = this.$el
        this.$anime
            .timeline()
            .add({
                targets,
                translateY: [-25, 0],
                opacity: [0, 1],
                duration: 2000,
                delay: 100 * this.delay,
                easing: 'easeOutElastic'
            })
    },
    methods: {
        mouseOver: function(event) {
            if (!this.link.isCurrent) {
                this.animateLetter(event, 1.2, 800, 400);
            }
        },
        mouseLeave: function(event) {
            if (!this.link.isCurrent) {
                this.animateLetter(event, 1.0, 600, 300);
            }
        },
        animateLetter: function(event, scale, duration, elasticity) {
            this.$anime.remove(event.target);
            this.$anime.timeline().add({
                targets: event.target,
                translateY: [-25, 0],
                opacity: [0.1, 1],
                duration: 3000,
                delay: 100 * this.delay,
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
    color: #46b5ff;
    /* color: #1468a0; */
}

.current {
    color: #999 !important;
    cursor: default;
}
</style>
