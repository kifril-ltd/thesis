<template>
  <select
    :value="isSelect"
    class="form-select"
    @change="$emit('changeValue', $event.target[$event.target.selectedIndex].value)"
  >
    <option v-for="(hint, key) in hints" :key="key" :value="hint.value">{{ hint.caption }}</option>
  </select>
</template>

<script>
export default {
  name: 'EnergySelect',
  props: {
    hints: {
      type: Array,
      required: false,
    },
    isSelect: {
      required: false,
      type: String,
    },
  },
};
</script>

<style scoped>
.form-select {
  width: auto;
}
</style>
