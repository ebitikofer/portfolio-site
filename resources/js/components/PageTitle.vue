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
        props: {
            title: String
        },
        data: () => {
            return {
                text: []
            }
        },
        mounted() {
            let temp = this.title.charAt(0).toUpperCase() + this.title.slice(1)
            this.text = temp.split('');
        },
        watch: {
            title: function () {
            let temp = this.title.charAt(0).toUpperCase() + this.title.slice(1)
            this.text = temp.split('');
            }
        },
    }

</script>

<style>

    @keyframes blinkTextCursor{
        from { border-color: rgba(255, 255, 255, .75); }
        to { border-color: transparent; }
    }

    html, body {
        background-color: #344046;
        color: #fff;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
        /* background-color:#ce3635; */
        text-align: center;
        color:#fff;
        /* padding-top:10em; */
    }

    * {
        color:#fff; text-decoration: none;
    }

    .words {
        color: #fff;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        /* margin: 0px 5px; */
    }

    .wrap {
        height: 60px;
        margin: 0px 5px
    }

    .spacer {
        height: 60px;
        margin: 0px 5px
    }

    .typewrite > .wrap {

        animation: blinkTextCursor 1000ms steps(2) infinite normal;
    }

    .m-b-md-ind {
        margin-bottom: 100px;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .scaled-thumb {
        object-fit: scale-down;
        width: 25vw;
        /* height: 20vw; */
    }

    #l1 {
        animation: 1s ease-out 10s 1 slideInFromTop;
    }

</style>
