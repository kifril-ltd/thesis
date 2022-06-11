<template>
  <li>
    <slot></slot>
  </li>
</template>

<script>
export default {
  name: 'EnergyDropdownElement',
}
</script>

<style scoped>
li {
    white-space: nowrap;
    cursor: pointer;
}
</style>
