<template>
  <energy-modal ref="modal">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">Выбор объекта</h5>
      <button type="button" class="btn-close" @click="closeModal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <modal-item-component
        @choose="chooseTable"
        v-for="(item, key) in objects"
        :key="key"
        :item="item"
      ></modal-item-component>
    </div>
    <div class="modal-footer">
      <button type="button" @click="closeModal" class="btn btn-danger closebtn">Закрыть</button>
    </div>
  </energy-modal>
</template>

<script>
import ModalItemComponent from '@/components/relationalFilter/objectModal/ModalItemComponent';
import { menuSymbol, userSymbol } from '@/store';
import { EnergyModal } from '@/ui';

export default {
  name: 'ObjectModal',
  components: {
    EnergyModal,
    ModalItemComponent,
  },
  inject: {
    stateMenu: {
      from: menuSymbol,
    },
    userState: {
      from: userSymbol,
    },
  },
  async created() {
    if (this.user) {
      await this.stateMenu.fetchMenu();
    }
  },
  methods: {
    chooseTable(item) {
      this.$emit('choose', item);
      this.closeModal();
    },
    closeModal() {
      this.$refs.modal.closeModal();
    },
    openModal() {
      this.$refs.modal.openModal();
    },
  },
  computed: {
    objects() {
      return this.stateMenu.state.menu;
    },
    user() {
      return this.userState.state.user;
    },
  },
};
</script>

<style scoped>
.modal-body {
  overflow-y: auto;
}
</style>
