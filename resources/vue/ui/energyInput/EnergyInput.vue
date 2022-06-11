<template>
  <input class="form-control" :value="value" :placeholder="placeholder" />
</template>

<script>
export default {
  name: 'EnergyInput',
  props: {
    value: {
      required: false,
    },
    placeholder: {
      type: String,
      required: false,
    },
  },
};
</script>

<style scoped>
.static-input {
  width: 180px;
}
</style>
