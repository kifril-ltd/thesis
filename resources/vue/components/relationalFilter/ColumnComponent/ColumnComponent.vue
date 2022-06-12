<template>
  <div class="mt-3 d-flex flex-column">
    <div class="table-header" v-for="(object, key) in tableMap" :key="key">
      <template v-if="object.columns && object.columns.length">
        <div class="d-flex align-items-center">
          <p class="mb-0 me-2">{{ object.caption + ':' }}</p>
          <a href="" class="me-1">Выбрать все поля</a>
          <p class="mb-0 me-1">/</p>
          <a href="" class="me-1">Снять выделение</a>
        </div>

        <div class="d-flex flex-column ms-2">
          <div
            class="field-header d-flex justify-content-between mt-2"
            v-for="(column, indexRow) in object.columns"
            :key="indexRow"
          >
            <div class="d-flex align-items-center">
              <energy-checkbox :is-checked="column.isChecked" @change="toggleItem(key, indexRow)"></energy-checkbox>
              <label class="ms-1">{{ object.caption + '/' + column.caption }}</label>
            </div>
            <div class="d-flex align-items-center">
              <energy-button @click="column.isGroupBy = !column.isGroupBy"
                >Группировать по столбцу ({{ column.isGroupBy ? 'Да' : 'Нет' }})</energy-button
              >
            </div>
            <div class="d-flex align-items-center" v-if="column.isChecked">
              <label class="me-1">fn:</label>
              <energy-select
                :isSelect="column.aggregation"
                @change-value="changeFunction(key, indexRow, $event)"
                :hints="functions"
              ></energy-select>
            </div>
          </div>
        </div>
      </template>
    </div>
  </div>
</template>

<script>
import EnergyCheckbox from '@/ui/energyCheckbox/EnergyCheckbox';
import EnergyButton from '@/ui/energyButton/EnergyButton';
import EnergySelect from '@/ui/energySelect/EnergySelect';
export default {
  name: 'ColumnComponent',
  components: { EnergySelect, EnergyCheckbox, EnergyButton },
  props: {
    tables: {
      type: Array,
      required: false,
    },
  },
  data() {
    return {
      select: {},
      currentColumn: null,
      functions: [
        {
          caption: '',
          value: '',
        },

        {
          caption: 'Среднее',
          value: 'avg',
        },

        {
          caption: 'Количество',
          value: 'count',
        },

        {
          caption: 'Мин',
          value: 'min',
        },

        {
          caption: 'Макс',
          value: 'max',
        },

        {
          caption: 'Сумма',
          value: 'sum',
        },
      ],
    };
  },
  methods: {
    toggleItem(key, indexRow) {
      this.tableMap[key].columns[indexRow].isChecked = !this.tableMap[key].columns[indexRow].isChecked;
    },
    changeFunction(key, indexRow, selected) {
      this.tableMap[key].columns[indexRow].aggregation = selected;
    },
  },
  computed: {
    tableMap() {
      let result = this.tables;
      for (let i = 0; i < result.length; i++) {
        result[i].columns = result[i].columns.map(({ caption, meta_object_id, object }) => {
          return {
            caption: caption,
            meta_object_id: meta_object_id,
            object: object,
            isChecked: false,
            aggregation: '',
            isGroupBy: false,
          };
        });
      }
      return result;
    },
  },
};
</script>

<style scoped></style>
