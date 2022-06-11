<template>
  <label :for="id" class="energy-checkbox__label">
    <span class="energy-checkbox__label energy-checkbox__label_left"><slot name="label-before"></slot></span>
    <input
      :id="id"
      type="checkbox"
      class="energy-checkbox"
      @change="$emit('change', $event.target.checked)"
      :checked="isChecked"
    />
    <div class="energy-checkbox__body" />
  </label>

  <label :for="id" class="energy-checkbox__label energy-checkbox__label_right">
    <slot name="label-after"></slot>
  </label>
</template>

<script>
import { uuid } from 'vue-uuid';

export default {
  name: 'EnergyCheckbox',
  props: {
    isChecked: {
      type: Boolean,
      default: false,
    },
  },
  emits: ['change'],
  data: () => ({
    id: uuid.v1(),
  }),
};
</script>

<style lang="scss" scoped>
.energy-checkbox {
  display: none;

  &__label {
    cursor: pointer;

    &:empty {
      display: none;
    }
    &_right {
      padding-left: 5px;
    }
    &_left {
      padding-right: 5px;
    }
  }

  & + &__body {
    position: relative;
    width: 20px;
    height: 20px;
    border-radius: 5px;
    border: 1px solid black;
    overflow: hidden;

    &:after {
      content: '';
      position: absolute;
      left: -2px;
      top: -6px;
      width: 100%;
      height: 100%;
      border-left: 2px solid transparent;
      border-bottom: 2px solid transparent;
      transform: rotate(-45deg);
    }
  }

  &:checked + &__body {
    background-color: var(--bs-blue);
    &:after {
      border-left-color: white;
      border-bottom-color: white;
    }
  }
}
</style>
