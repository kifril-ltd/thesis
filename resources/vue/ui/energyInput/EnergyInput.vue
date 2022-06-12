<template>
  <input
    class="form-control"
    :value="value"
    @change.prevent="$emit('changeText', $event.target.value)"
    :placeholder="placeholder"
  />
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
  emits: ['change'],
};
</script>

<style scoped>
.static-input {
  width: 180px;
}
</style>
