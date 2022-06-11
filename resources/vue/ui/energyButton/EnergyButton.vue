<template>
  <button type="button" class="btn text-start">
    <slot></slot>
  </button>
</template>

<script>
export default {
  name: 'EnergyButton',
};
</script>

<style scoped>
.btn {
  width: auto;
  color: #000000;
  background-color: #ffffff;
  box-shadow: 0 0 10px lightgrey;
  font-weight: bold;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.btn:focus {
  color: #0c63e4;
  background-color: #e7f1ff;
}

.not-full,
.not-full:focus {
  width: auto !important;
}
</style>
