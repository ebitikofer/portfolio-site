<template>

    <div class="header-title-wrapper">

        <div class="content">

            <page-title :title="currentPage"></page-title>

            <p :v-if="description">{{ description }}</p>

            <navigation-bar :current="currentPage" :links="links"></navigation-bar>

        </div>

    </div>

</template>

<script>
import NavigationBar from './NavigationBar.vue'
import PageTitle from './PageTitle.vue'

export default {
    components: {
        PageTitle,
        NavigationBar
    },
    props: {
        currentPage: String,
        description: String,
        links: Array
    },
    mounted() {
        // console.log('header', this.links);
    }
};
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
