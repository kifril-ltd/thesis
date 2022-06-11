<template>
  <svg class="icon">
    <use :xlink:href="'#' + icon"></use>
  </svg>
</template>

<script>
export default {
  name: 'EnergyIcon',
  props: {
    icon: {
      type: String,
      required: true,
    },
  },
};
</script>

<style scoped>
svg {
  cursor: pointer;
}
</style>
