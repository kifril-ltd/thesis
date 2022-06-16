<template>
  <energy-modal ref="modal">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">Открытие отчета</h5>
      <button type="button" class="btn-close" @click="closeModal" aria-label="Close"></button>
    </div>
    <div v-if="result" class="modal-body d-flex flex-column p-3">
      <energy-button
        class="w-50 mt-2"
        v-for="(item, key) in result.result"
        :key="key"
        @click="getRelFilter(item.rel_filter_id)"
      >
        {{ item.title }}
      </energy-button>
    </div>
    <div class="modal-footer">
      <button type="button" @click="closeModal" class="btn btn-danger closebtn">Закрыть</button>
    </div>
  </energy-modal>
</template>

<script>
import { EnergyModal, EnergyButton } from '@/ui';
import { RelationFilterApi } from '@/api';

export default {
  name: 'OpenModal',
  components: {
    EnergyModal,
    EnergyButton,
  },
  props: {
    result: {
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
    async getRelFilter(id) {
      let result = await RelationFilterApi.getRelationFilter(id);
      this.$emit('openRelation', result);
      this.$refs.modal.closeModal();
    },
  },
};
</script>

<style scoped></style>
