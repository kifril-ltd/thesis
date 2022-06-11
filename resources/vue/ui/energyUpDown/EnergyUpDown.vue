<template>
  <div class="upDownContainer">
    <slot></slot>
    {{ index }}
  </div>
</template>

<script>
export default {
  name: 'EnergyUpDown',
  props: {
    index: {
      type: Number,
      required: true,
    },
  },
};
</script>

<style scoped>
.upDownContainer {
    display: flex;
}
</style>
