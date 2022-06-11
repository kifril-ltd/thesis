<template>
  <!-- Tab List -->
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
  <div class="tab-content">
    <div class="tab-pane fade show active" id="home" role="tabpanel">
      <form>
        <div v-for="(headerElement, index) in headerFromTable" :key="headerElement" class="mt-3 mb-3">
          <div class="card__form" v-if="!headerElement.is_pk">
            <label class="form-label"> {{ headerElement.caption }}</label>
            <energy-select
              v-model="dataForUpdate[headerElement.title]"
              style="width: 50%"
              v-if="toggleValuesArray[index]"
            />
            <energy-input
              v-model="dataForUpdate[headerElement.title]"
              style="width: 50%"
              @onChange="changeInputValue(headerElement.title, $event)"
              :value="dataForUpdate[headerElement.title]"
              v-else
            />
            <energy-toggle
              v-if="toggleValuesArray.includes(headerElement.title)"
              @change="changeToggleValue(!toggleValuesArray[index], index)"
              :isChecked="toggleValuesArray[index]"
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
      <EnergyTable :header="headerForFiles" :body="bodyForFile" class="mt-2" />
    </div>
  </div>
</template>

<script>
import { EnergySelect, EnergyInput, EnergyToggle } from '@/ui';
import EnergyButton from '@/ui/energyButton/EnergyButton';
import EnergyTable from '@/ui/energyTable/EnergyTable';

export default {
  name: 'ObjectCard',
  components: {
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
      default: () => {},
    },
    headerFromTable: {
      type: Array,
      required: false,
      default: () => [],
    },
  },
  data() {
    return {
      toggleValuesArray: [],
      componentsWithToggle: [],
    };
  },
  watch: {
    headerFromTable: {
      deep: true,
      handler(newHeader) {
        this.toggleValuesArray = newHeader.map(() => false);
        this.componentsWithToggle.filter(x => x.data_type == 'array').map(x => x.title);
      },
    },
  },
  methods: {
    changeToggleValue(changedValueForToggle, index) {
      this.toggleValuesArray[index] = changedValueForToggle;
    },
    changeInputValue(key, inputValue) {
      this.dataForUpdate[key] = inputValue;
      this.$emit('onUpdateData', this.dataForUpdate);
    },
  },
  computed: {
    dataForUpdate() {
      if (Object.keys(this.objectFromBody).length === 0) {
        let tmp_arr = {};
        this.headerFromTable.forEach(x => (tmp_arr[x.title] = ''));
        return tmp_arr;
      } else {
        return this.objectFromBody;
      }
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
