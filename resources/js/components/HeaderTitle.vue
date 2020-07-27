<template>

    <div class="header-title-wrapper">

        <div class="content">

            <page-title :title="currentPage"></page-title>

            <navigation-bar :current="currentPage"></navigation-bar>

        </div>

    </div>

</template>

<script>
    import NavigationBar from './NavigationBar.vue'
    import PageTitle from './PageTitle.vue'

    export default {
        props: {
            currentPage: String
        },
        mounted() {
            console.log(this.currentPage);
        },
        components: {
            PageTitle,
            NavigationBar
        }
    }

</script>

<style>

    .header-title-wrapper {
        align-items: center;
        display: flex;
        justify-content: center;
        position: relative;
        height: 30vh;
    }

    .content {
        text-align: center;
    }

</style>
