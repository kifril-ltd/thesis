<template>
  <div class="form-check form-switch d-flex align-items-center" data-bs-toggle="tooltip" title="Ввести вручную">
    <input
      class="form-check-input ms-3 mt-0"
      @change="$emit('change')"
      type="checkbox"
      id="flexSwitchCheckChecked"
      :checked="isChecked"
    />
  </div>
</template>

<script>
export default {
  name: 'EnergyToggle',
  props: {
    isChecked: {
      type: Boolean,
      required: false,
      default: false,
    },
  },
  emits: ['change'],
};
</script>

<style scoped>
.form-check-label {
  white-space: nowrap;
}

.form-switch {
  padding-left: 0;
}
</style>
