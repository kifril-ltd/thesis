<template>
  <div class="toast show mb-1" :class="`bg-${returnType}`" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <strong class="me-auto">{{ caption }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body"> {{ text }} </div>
  </div>
</template>

<script>
export default {
  name: 'EnergyNotification',
  props: {
    caption: {
      type: String,
      required: true,
    },
    text: {
      type: String,
      required: true,
    },
    type: {
      type: String,
      required: false,
    },
  },
  computed: {
    returnType() {
      if (this.type === '') return 'secondary';
      else return this.type;
    },
  },
};
</script>

<style scoped>
.toast {
  width: 600px;
  position: relative;
}
</style>
