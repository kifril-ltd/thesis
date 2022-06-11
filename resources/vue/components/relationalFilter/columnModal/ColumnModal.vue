<template>
  <energy-modal ref="modal">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">Выбор атрибута</h5>
      <button type="button" class="btn-close" @click="closeModal" aria-label="Close"></button>
    </div>
    <div class="modal-body d-flex flex-column p-3">
      <template v-if="object">
        <energy-button v-for="(column, key) in object.tableColumns" class="mb-2" :key="key" @click="choose(column)">
          {{ column.caption }}
        </energy-button>
      </template>
    </div>
    <div class="modal-footer">
      <button type="button" @click="closeModal" class="btn btn-danger closebtn">Закрыть</button>
    </div>
  </energy-modal>
</template>

<script>
import { EnergyModal, EnergyButton } from '@/ui';

export default {
  name: 'ColumnModal',
  components: {
    EnergyModal,
    EnergyButton,
  },
  props: {
    object: {
      type: Object,
      required: false,
    },
  },
  methods: {
    closeModal() {
      this.$refs.modal.closeModal();
    },
    openModal() {
      this.$refs.modal.openModal();
    },
    choose(item) {
      this.$emit('choose', item);
      this.closeModal();
    },
  },
};
</script>

<style scoped>
.modal-body {
  overflow-y: auto;
}
</style>
