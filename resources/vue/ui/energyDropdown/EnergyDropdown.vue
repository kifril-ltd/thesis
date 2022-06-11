<template>
  <div class="dropdown" :class="dropDirection">
    <button
      type="button"
      class="btn text-start dropdown-toggle btn-hoverable"
      data-bs-auto-close="outside"
      data-bs-toggle="dropdown"
    >
      {{ titleOfDropdown }}
    </button>
    <ul class="dropdown-menu">
      <slot> </slot>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'EnergyDropdown',
  props: {
    titleOfDropdown: {
      type: String,
      required: false,
    },
    dropDirection: {
      type: String,
      required: false,
    },
  },
};
</script>

<style scoped>
.btn {
  width: 100%;
  color: #000000;
  background-color: #ffffff;
  box-shadow: 0 0 10px lightgrey;
  font-weight: bold;
}

.btn:focus {
  width: 100%;
  color: #0c63e4;
  background-color: #e7f1ff;
}

.dropdown-menu.show {
  display: block;
  padding: 1rem;
  max-height: 500px;
  overflow-y: scroll;
}

ul li a {
  font-weight: bold;
}

.dropdown-toggle::before {
  z-index: -1;
}
</style>
