<template>

    <div class="title m-b-md">

        <a :key="index" v-for="(letter, index) in text" :id="'l' + index">{{ letter }}</a>

    </div>

    <!-- <div class="title m-b-md-ind">

        <a id="l1">E</a><a id="l2">r</a><a id="l3">i</a><a id="l4">c</a>
        <a id="l6">B</a><a id="l7">i</a><a id="l8">t</a><a id="l9">i</a><a id="l10">k</a><a id="l11">o</a><a id="l12">f</a><a id="l13">e</a><a id="l14">r</a>

    </div> -->

</template>

<script>

    export default {
        name: 'PageTitle',
        props: {
            title: String
        },
        data: () => {
            return {
                text: []
            }
        },
        mounted() {
            if (this.title) {
                let temp = this.title.charAt(0).toUpperCase() + this.title.slice(1);
                this.text = temp.split('');
            }
        },
        watch: {
            title: function () {
                let temp = this.title.charAt(0).toUpperCase() + this.title.slice(1);
                this.text = temp.split('');
            }
        },
    }

</script>

<style>

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
        animation: 1s ease-out 10s 1 slideInFromTop;
    }

</style>
