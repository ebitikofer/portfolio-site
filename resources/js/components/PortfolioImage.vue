<template>

    <div
        @mouseover.prevent="mouseOver"
        @mouseleave.prevent="mouseLeave">

        <a :href="link">
            <img class="thumbnail scaled-thumb" :src="src" :alt="title">
        </a>

        <br>

        <h4>
            {{ title }}
        </h4>

    </div>

</template>

<script>

    export default {
        name: "PortfolioImage",
        props: {
            link: String,
            src: String,
            title: String,
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
            // .add({
            //   targets,
            //   rotate: '1turn',
            //   translateY: 0,
            //   duration: 2000,
            //   delay: this.delay + 500
            // })
        },
        methods: {
            mouseOver: function(event) {
                this.$anime.remove(event.target);
                this.$anime.timeline().add({
                    targets: event.target,
                    translateY: -5,
                    duration: 2000,
                    easing: "easeOutElastic",
                    // borderColor: ['#ffffff', '#1468a0']
                });
            },
            mouseLeave: function(event) {
                this.$anime.remove(event.target);
                this.$anime.timeline().add({
                    targets: event.target,
                    translateY: 5,
                    duration: 2000,
                    easing: "easeOutElastic",
                    // borderColor: ['#1468a0', '#ffffff']
                });
            }
        }
    };
</script>

<style>
    h4 {
        color: #fff;
        font-family: "Nunito", sans-serif;
        /* font-weight: bold; */
    }

    .scaled-thumb {
        object-fit: cover;
        width: 20vw;
        height: 20vw;
        border-radius: 2px;
        border-color: #ffffff;
    }
</style>
