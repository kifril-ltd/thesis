<template>
  <energy-modal ref="modal">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">Выбор отчета</h5>
      <button type="button" class="btn-close" @click="closeModal" aria-label="Close"></button>
    </div>
    <div class="modal-body p-3">
      <div class="d-flex">
        <energy-select @change-value="changeType" class="me-3" :hints="reportTypes"></energy-select>

        <energy-select @change-value="changeBoiler" :hints="tmpBoiler"></energy-select>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" @click="closeModal" class="btn btn-danger closebtn">Закрыть</button>
      <energy-button @click="makeReport" class="btn-success">Сформировать отчет</energy-button>
    </div>
  </energy-modal>
</template>

<script>
import { EnergyModal, EnergyButton, EnergySelect } from '@/ui';

export default {
  name: 'ReportModal',
  components: {
    EnergyModal,
    EnergyButton,
    EnergySelect,
  },
  data() {
    return {
      reportTypes: ['', 'Паспорт котельной'],
      tmpBoiler: ['', 'Котельная 1', 'Котельная 2'],
      boiler: null,
      type: null,
    };
  },
  methods: {
    closeModal() {
      this.$refs.modal.closeModal();
    },
    openModal() {
      this.$refs.modal.openModal();
    },
    makeReport() {
      console.log(this.type);
      console.log(this.boiler);
    },
    changeType(type) {
      this.type = type;
    },
    changeBoiler(boiler) {
      this.boiler = boiler;
    },
  },
};
</script>

<style scoped>
.modal-body {
  overflow-y: auto;
}
</style>
