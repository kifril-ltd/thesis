<template>
  <div class="input-group">
    <energy-input
      class="energy-input-text"
      :value="value"
      :placeholder="placeholder"
      :type="params.type"
      @change="params.change"
    />
    <button @click="params.change" class="btn-close bg-transparent align-self-center"></button>
  </div>
</template>

<script>
import { EnergyInput } from '@/ui';

export default {
  name: 'EnergyTableInput',
  components: {
    EnergyInput,
  },
  props: {
    params: {
      type: Object,
      required: true,
    },
    value: {
      type: String,
      required: false,
      default: null,
    },
    placeholder: {
      type: String,
      required: false,
      default: null,
    },
  },
};
</script>

<style scoped>
.btn-close {
  z-index: 5;
  position: absolute;
  right: 3px;
}
</style>
