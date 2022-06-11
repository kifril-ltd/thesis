<template>
  <a :href="href">
    <slot> </slot>
  </a>
</template>

<script>
export default {
  name: 'EnergyLink',
  props: {
    href: {
      type: String,
      required: true,
    },
  },
};
</script>

<style scoped>
a {
  color: #000000;
  padding: 0.8rem;
  text-decoration: none;
  border-radius: 5px;
  box-shadow: 0 0 10px lightgrey;
  margin-bottom: 1rem;
}

a:hover {
  text-decoration: underline;
  color: #0c63e4;
  background-color: #e7f1ff;
}
</style>
