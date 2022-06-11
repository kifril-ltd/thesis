<template>
  <layout-wrapper>
    <layout-header />
    <nav-menu />
    <main-index />
  </layout-wrapper>
</template>

<script>
import LayoutHeader from './components/layout/layoutHeader/LayoutHeader.vue';
import NavMenu from './components/layout/navMenu/NavMenu.vue';
import MainIndex from './components/MainIndex.vue';
import LayoutWrapper from '@/components/layout/layoutWrapper/LayoutWrapper.vue';

export default {
  name: 'App',
  components: {
    MainIndex,
    LayoutHeader,
    NavMenu,
    LayoutWrapper,
  },
};
</script>

<style scoped></style>
