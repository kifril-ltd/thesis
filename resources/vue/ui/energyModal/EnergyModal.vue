<template>
  <div class="modal show fade" tabindex="-1" v-show="showModal" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <slot></slot>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'EnergyModal',
  data() {
    return {
      showModal: false,
    };
  },
  methods: {
    closeModal() {
      this.showModal = false;
    },
    apply() {
      this.closeModal();
    },
    openModal() {
      this.showModal = true;
    },
  },
};
</script>

<style scoped>
.modal {
  display: block;
}
</style>
