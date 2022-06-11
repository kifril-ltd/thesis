<template>
  <energy-modal ref="modal">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">Котельная</h5>
      <button type="button" class="btn-close" @click="closeModal" aria-label="Close"></button>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab">
          Информация
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#file" type="button" role="tab"> Файлы </button>
      </li>
    </ul>
    <!-- Information -->
    <div v-if="!isLoading && data" class="tab-content">
      <div class="tab-pane fade show active" id="home" role="tabpanel">
        <form>
          <div v-for="(headerElement, index) in headerFromTable" :key="`header_el_${index}`" class="mt-3 mb-3">
            <div class="card__form" v-if="!headerElement.is_pk">
              <label class="form-label"> {{ headerElement.caption }}</label>
              <energy-select v-model="data[headerElement.title]" style="width: 50%" v-if="toggleValuesArray[index]" />
              <energy-input
                :value="data[headerElement.title]"
                @input="data[headerElement.title] = $event.target.value"
                style="width: 50%"
                v-else
              />
              <energy-toggle
                v-if="toggleValuesArray.includes(headerElement.title)"
                @change="changeToggleValue(!toggleValuesArray[index], index)"
                :isChecked="toggleValuesArray[index] "
              />
            </div>
          </div>
        </form>
      </div>
      <!-- Files -->
      <div class="tab-pane fade" id="file" role="tabpanel">
        <div class="d-flex align-items-center mt-2">
          <EnergyButton class="not-full ms-3 btn btn-primary me-3">Добавить</EnergyButton>
          <EnergyButton class="not-full btn btn-danger">Удалить</EnergyButton>
        </div>
        <EnergyTable
          :canSelect="true"
          :header="headerForFiles"
          :body="bodyForFile"
          :tableSettings="tableSettings"
          :tableFilter="tableFilter"
          @change-column-width="changeColumnWidth"
          class="mt-2 mx-2"
        />
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" @click="closeModal" class="btn btn-danger closebtn">Закрыть</button>
      <button type="button" @click="applyHandler" class="btn btn-primary">Печать</button>
      <button type="button" @click="applyHandler" class="btn btn-success savebtn">Сохранить изменения</button>
    </div>
  </energy-modal>
</template>

<script>
import {
  EnergyInput,
  EnergyModal,
  EnergySelect,
  EnergyToggle,
  EnergyTable,
  EnergyButton,
  EnergyTableInput,
} from '@/ui';
import { TableApi } from '@/api';
import { defineComponent, markRaw } from 'vue';
import { listSymbol } from '@/store';

export default {
  name: 'ObjectCard',
  components: {
    EnergyModal,
    EnergyTable,
    EnergyButton,
    EnergyInput,
    EnergySelect,
    EnergyToggle,
  },
  props: {
    objectFromBody: {
      type: Object,
      required: false,
      default: () => ({}),
    },
    headerFromTable: {
      type: Array,
      required: false,
      default: () => [],
    },
    tableId: {
      type: String,
      required: true,
    },
    pk: {
      type: String,
      required: true,
    },
  },
  data() {
    return {
      toggleValuesArray: [],
      componentsWithToggle: [],
      data: null,
      isLoading: false,
      tableSettings: [],
      tableFilter: null,
    };
  },
  watch: {
    headerFromTable: {
      deep: true,
      handler(newHeader) {
        this.isLoading = true;
        this.toggleValuesArray = newHeader.map(() => false);
        this.componentsWithToggle.filter(x => x.data_type == 'array').map(x => x.title);
        this.$nextTick(() => {
          this.isLoading = false;
        });
      },
    },
    objectFromBody: {
      deep: true,
      immediate: true,
      handler() {
        this.isLoading = true;
        this.data = this.objectFromBody
          ? { ...this.getNormalizedDataFromTable(this.headerFromTable) }
          : this.initData();
        this.$nextTick(() => {
          this.isLoading = false;
        });
      },
    },
  },
  computed: {
    applyHandler() {
      return this.objectFromBody ? this.updateExistingObjectToDB : this.addNewObjectToDB;
    },
    headerTitles() {
      return this.headerFromTable.map(head => head.title);
    },
    headerForFiles() {
      return [
        {
          caption: 'Имя файла',
          title: 'filename',
        },
        {
          caption: 'Дата загрузки',
          title: 'date_upload',
        },
        {
          caption: 'Имя пользователя',
          title: 'user_name',
        },
      ];
    },
    bodyForFile() {
      return [
        {
          filename: 'Файл1',
          date_upload: '12.04.2022',
          user_name: 'Админ',
        },
        {
          filename: 'Файл2',
          date_upload: '11.04.2022',
          user_name: 'Админ',
        },
        {
          filename: 'Файл3',
          date_upload: '10.04.2022',
          user_name: 'Админ',
        },
      ];
    },
    titleColumnsForFiles() {
      return this.headerForFiles?.map(head => head.title) ?? [];
    },
  },
  created() {
    this.tableSettings = this.initialTableSettings();
    this.tableFilter = this.initTableFilter();
  },
  inject: {
    stateList: {
      from: listSymbol,
    },
  },
  methods: {
    async addNewObjectToDB() {
      const data = this.formingData(),
        response = await TableApi.createRow(this.tableId, data);
      if (response?.result) this.$emit('update');
      this.closeModal();
    },
    async updateExistingObjectToDB() {
      const rowId = this.data[this.pk],
        data = this.formingData(),
        response = await TableApi.changeRow(this.tableId, rowId, data);
      if (response?.result) this.$emit('update');
      this.closeModal();
    },
    getNormalizedDataFromTable(headerFromTable) {
      const result = {};
      if (headerFromTable) {
        headerFromTable.forEach(key => {
          if (key.data_type === 'list') {
            let status = this.stateList.getListItem(key.structure_list_id, this.objectFromBody[key.title]);
            result[key.title] = status.title;
          } else if (key.data_type === 'user') {
            let user = this.stateList.state.users.find(x => x.user_id === this.objectFromBody[key.title]);
            result[key.title] = user.first_name + ' ' + user.middle_name + ' ' + user.last_name;
          } else {
            result[key.title] = this.objectFromBody[key.title];
          }
        });
      }
      return result;
    },
    initData() {
      const newData = {};
      this.headerTitles.forEach(key => {
        newData[key] = '';
      });
      return newData;
    },
    initialTableSettings() {
      return this.headerForFiles.map(head => ({
        show: !head.is_pk,
        caption: head.caption,
        width: 300,
      }));
    },
    initTableFilter() {
      const tableFilter = {};
      this.titleColumnsForFiles.forEach(key => {
        tableFilter[key] = {
          value: '',
          component: defineComponent(markRaw(EnergyTableInput)),
          params: {
            type: 'text',
            change: this.changeTableFilter.bind(this, key),
          },
        };
      });
      return tableFilter;
    },
    changeToggleValue(changedValueForToggle, index) {
      this.toggleValuesArray[index] = changedValueForToggle;
    },
    formingData() {
      const formData = {};
      this.headerTitles.forEach(key => {
        if (this.data[key]) formData[key] = this.data[key];
      });

      return formData;
    },
    closeModal() {
      this.$refs.modal.closeModal();
    },
    openModal() {
      this.$refs.modal.openModal();
    },
    changeTableFilter(title, value) {
      this.tableFilter[title].value = value.target.value;
      //Запрос к апи
      //this.loadTable();
    },
    changeColumnWidth(index, newWidth) {
      const setting = this.tableSettings[index];

      if (newWidth < 600 && newWidth > 100) {
        setting.width = newWidth;
      } else if (newWidth > 600 && setting.width !== 600) setting.width = 600;
      else if (newWidth < 100 && setting.width !== 100) setting.width = 100;
    },
  },
};
</script>

<style scoped>
.card__form {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.card__form label {
  width: 50%;
  margin: 0;
}

.card__form input {
  width: 50%;
}

table {
  width: 100%;
  margin: 0.5rem 1px 1px;
}

table thead tr th,
table tbody tr td {
  white-space: nowrap;
}
.tab-content {
  max-height: 800px;
  overflow-y: auto;
  margin: 1rem;
}

a {
  font-weight: bold;
  color: #000000;
  padding: 0.8rem;
  text-decoration: none;
  border-radius: 5px;
  width: auto;
}

.checkbox-header {
  width: 40px;
}
</style>
