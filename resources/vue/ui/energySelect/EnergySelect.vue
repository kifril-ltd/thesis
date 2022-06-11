<template>
  <select class="form-select" @change="$emit('changeValue', $event.target.value)">
    <option v-for="hint in hints" :key="hint" :value="hint">{{ hint }}</option>
  </select>
</template>

<script>
export default {
  name: 'EnergySelect',
  props: {
    hints: {
      type: Array,
      required: false,
      default: () => [],
    },
  },
};
</script>

<style scoped>
.form-select {
  width: auto;
}
</style>
