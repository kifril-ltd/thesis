<template>
  <energy-modal ref="modal">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">Сохранение отчета</h5>
      <button type="button" class="btn-close" @click="closeModal" aria-label="Close"></button>
    </div>
    <div class="modal-body d-flex flex-column p-3">
      <div>Название</div>
      <energy-input @change-text="changeName"></energy-input>
    </div>
    <div class="modal-footer">
      <button type="button" @click="closeModal" class="btn btn-danger closebtn">Закрыть</button>
      <button type="button" @click="saveInput" class="btn btn-success">Сохранить</button>
    </div>
  </energy-modal>
</template>

<script>
import { EnergyModal, EnergyButton } from '@/ui';
import EnergyInput from '@/ui/energyInput/EnergyInput';

export default {
  name: 'SaveModal',
  components: {
    EnergyInput,
    EnergyModal,
    EnergyButton,
  },
  data() {
    return {
      name: 'Undefined',
    };
  },
  methods: {
    closeModal() {
      this.$refs.modal.closeModal();
    },
    openModal() {
      this.$refs.modal.openModal();
    },
    changeName(name) {
      this.name = name;
    },
    saveInput() {
      this.$emit('choose', this.name);
      this.closeModal();
    },
  },
};
</script>

<style scoped></style>
