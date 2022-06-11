<template>
  <div class="pagination-container">
    <energy-button class="me-2 mt-3 not-full" @click="changePage(page - 1)" :disabled="page === 1">
      Назад
    </energy-button>
    <energy-button
      class="me-2 mt-3 not-full"
      v-for="(item, index) in items"
      :key="`button_${index}`"
      @click="changePage(item)"
      :disabled="item === sprite || item === page"
      >{{ item }}</energy-button
    >
    <energy-button class="me-2 mt-3 not-full" @click="changePage(page + 1)" :disabled="page === totalPages"
      >Далее</energy-button
    >
  </div>
</template>

<script>
import { EnergyButton } from '@/ui';
export default {
  name: 'EnergyTablePagination',
  components: {
    EnergyButton,
  },
  emits: ['change-page'],
  props: {
    page: {
      type: Number,
      required: true,
    },
    totalCount: {
      type: Number,
      required: true,
    },
    limit: {
      type: Number,
      required: true,
    },
  },
  methods: {
    changePage(page) {
      this.$emit('change-page', page);
    },
  },
  computed: {
    totalPages() {
      return Math.ceil(this.totalCount / this.limit);
    },
    items() {
      let items = [];

      if (this.totalPages <= 6) {
        for (let i = 1; this.totalPages >= i; i++) {
          items.push(i);
        }
      } else if (this.page < 3) {
        items = [1, 2, 3, this.sprite, this.totalPages];
      } else if (this.page < this.totalPages - 2) {
        items = [
          this.page - 3 >= 2 ? this.sprite : false,
          this.page - 2,
          this.page - 1,
          this.page,
          this.page + 1,
          this.page + 2,
          this.page + 3 <= this.totalPages - 1 ? this.sprite : false,
          this.totalPages,
        ];
        if (this.page !== 3) items.unshift(1);
      } else {
        items = [1, this.sprite, this.totalPages - 2, this.totalPages - 1, this.totalPages];
      }

      return items.filter(item => !!item);
    },
    sprite() {
      return '...';
    },
  },
};
</script>

<style scoped>
.pagination-container {
  display: flex;
  justify-content: flex-end;
}
</style>
