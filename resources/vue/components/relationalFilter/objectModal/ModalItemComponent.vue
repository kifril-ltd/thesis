<template>
  <ul>
    <li>
      <energy-button @click="$emit('choose', item)" class="mb-2 not-full">{{ item.caption }}</energy-button>
    </li>
    <ul v-if="isFolder">
      <modal-item-component
        v-for="(child, key) in item.children_structures"
        :key="key"
        :item="child"
        @choose="chooseTable"
      ></modal-item-component>
    </ul>
  </ul>
</template>

<script>
import EnergyButton from '@/ui/energyButton/EnergyButton.vue';

export default {
  name: 'ModalItemComponent',
  props: {
    item: {
      type: Object,
      required: false,
    },
  },
  components: {
    EnergyButton,
  },
  computed: {
    isFolder() {
      return this.item.children_structures && this.item.children_structures.length;
    },
  },
  methods: {
    chooseTable(item) {
      this.$emit('choose', item);
    },
  },
};
</script>

<style scoped>
ul,
li {
  list-style-type: none;
  margin: 0;
}
</style>
