<template>
  <div class="container mt-3 mb-3 d-flex">
    <div class="col-4">
      <div class="block">
        <h4>Выбор таблицы</h4>
        <energy-button class="mb-2" v-for="(child, key) in childrenMenu" :key="key" @click="onClickTable(child)">
          {{ child.caption }}
        </energy-button>
      </div>
    </div>
    <div class="col-4">
      <div class="block">
        <h4>Выбор атрибута</h4>
        <h5>Общие:</h5>
        <energy-button class="mb-2 btn-primary" v-for="(child, key) in columns" :key="key">
          {{ child.caption }}
        </energy-button>
        <h5>Пользовательские:</h5>
      </div>
    </div>
    <div class="col-4">
      <div class="block">
        <h4>Выбор атрибута</h4>
      </div>
    </div>
  </div>
</template>

<script>
import { userSymbol, menuSymbol } from '@/store';
import EnergyButton from '@/ui/energyButton/EnergyButton';
import { TableApi } from '@/api';

export default {
  name: 'AttributeManagement',
  inject: {
    userState: {
      from: userSymbol,
    },
    stateMenu: {
      from: menuSymbol,
    },
  },
  components: {
    EnergyButton,
  },
  data() {
    return {
      structureId: null,
      columns: null,
    };
  },
  watch: {
    // смотрим за новым объектом
    structureId: {
      immediate: true,
      async handler() {
        if (this.structureId) {
          await this.fetchTableData();
        }
      },
    },
  },
  computed: {
    user() {
      return this.userState.state.user;
    },
    menu() {
      return this.stateMenu.state.menu;
    },
    childrenMenu() {
      return this.stateMenu.allMenuElements;
    },
    userName() {
      return this.user?.first_name ?? 'Пользователь';
    },
  },
  methods: {
    onClickTable(table) {
      this.structureId = table.structure_id;
    },
    async fetchTableData() {
      const data = {
          page: 1,
          limit: 0,
          filter: {},
        },
        response = await TableApi.getTable(this.structureId, data);
      if (response?.result) {
        this.columns = response.result.header;
      }
    },
  },
};
</script>

<style scoped>
.block {
  background: white;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  padding: 10px 20px;
  height: 80vh;
  overflow-y: auto;
}
</style>
