<template>
    <div class="title m-b-md">
        <a
            :key="index"
            v-for="(letter, index) in text"
            :id="'l' + index"
            class="letter-bounce"
            @mouseover="mouseOver"
            @mouseleave="mouseLeave"
            >{{ letter }}</a
        >
    </div>

    <!-- <div class="title m-b-md-ind">

        <a id="l1">E</a><a id="l2">r</a><a id="l3">i</a><a id="l4">c</a>
        <a id="l6">B</a><a id="l7">i</a><a id="l8">t</a><a id="l9">i</a><a id="l10">k</a><a id="l11">o</a><a id="l12">f</a><a id="l13">e</a><a id="l14">r</a>

    </div> -->

</template>

<script>

    export default {
        name: "PageTitle",
        props: {
            title: String
        },
        data: () => {
            return {
                text: []
            };
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
                    delay: 100,
                    easing: 'easeOutElastic'
                })
            if (this.title) {
                let temp = this.title.charAt(0).toUpperCase() + this.title.slice(1);
                this.text = temp.split("");
            }
        },
        watch: {
            title: function() {
                let temp = this.title.charAt(0).toUpperCase() + this.title.slice(1);
                this.text = temp.split("");
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
                this.$anime
                .timeline()
                .add({
                    targets: event.target,
                    translateY: [-25, 0],
                    opacity: [0.1, 1],
                    duration: 10000,
                    delay: 0,
                    easing: 'easeOutElastic'
                });
            }
        }
    };
</script>

<style>
    @-webkit-keyframes bounce {
        0%,
        100% {
            -webkit-transform: translateY(0);
        }
        50% {
            -webkit-transform: translateY(-10px);
        }
    }
    @-moz-keyframes bounce {
        0%,
        100% {
            -moz-transform: translateY(0);
        }
        50% {
            -moz-transform: translateY(-10px);
        }
    }
    @-o-keyframes bounce {
        0%,
        100% {
            -o-transform: translateY(0);
        }
        50% {
            -o-transform: translateY(-10px);
        }
    }
    @keyframes bounce {
        0%,
        100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }
    * {
        color: #fff;
        text-decoration: none;
    }

    .title {
        font-size: 84px;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    #l1 {
        /* animation: 1s ease-out 10s 1 slideInFromTop; */
    }

    .letter-bounce {
        cursor: crosshair;
    }

    .letter-bounce:hover {
        /* animation: bounce 2.5s infinite;
        -webkit-animation: bounce 2.5s infinite;
        -moz-animation: bounce 2.5s infinite;
        -o-animation: bounce 2.5s infinite; */
        /* transform: translateY(-10%); */
        transform: rotateY(10deg);
        -webkit-transform: rotateY(10deg);
        -moz-transform: rotateY(10deg);
        -o-transform: rotateY(10deg); 
    }
</style>
