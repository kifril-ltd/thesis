<template>
  <div class="mt-3 d-flex flex-column">
    <div class="table-header" v-for="(object, key) in tables" :key="key">
      <p>{{ object.caption + ':' }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ColumnComponent',
  props: {
    tables: {
      type: Array,
      required: false,
    },
  },
};
</script>

<style scoped></style>
