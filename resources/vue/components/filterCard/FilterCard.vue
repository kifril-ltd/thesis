<template>
  <div class="plus-container mb-1" data-toggle="tooltip" title="Добавить новое условие">
    <energy-icon @click="addNewFilterRow" fill="var(--bs-success)" width="30px" height="30px" icon="plus" />
  </div>

  <div class="overflow-scroll w-100 d-flex align-items-center justify-content-start">
    <div class="d-flex justify-content-start align-items-center pt-2" v-for="(group, key) in groups" :key="key">
      <div class="text-nowrap me-1 fw-bold">
        {{ group }}
      </div>
      <template v-if="key !== groups.length - 1">
        <select class="form-select me-1" @change="group_options[key] = $event.target.value">
          <option
            v-for="(value, op_key) in options"
            :key="op_key"
            :value="op_key"
            :selected="op_key === group_options[key]"
          >
            {{ value }}
          </option>
        </select>
      </template>
    </div>
  </div>
  <div v-for="(item, index) in filter_rows" :key="item" class="mb-3">
    <div class="filter-container">
      <div class="icon-container" data-toggle="tooltip" title="Удалить данное условие">
        <energy-icon
          class="x-mark-container me-3"
          fill="var(--bs-danger)"
          @click="deleteFilterRow(index)"
          width="30px"
          height="30px"
          icon="x-mark"
        />
      </div>
      <select class="form-select form-control me-3" @change="item.column = $event.target.value">
        <option v-for="(column, key) in headerFromTable" :key="key" :value="key" :selected="key === item.column">
          {{ column.caption }}
        </option>
      </select>
      <select class="form-select form-control me-3" @change="item.filter = $event.target.value">
        <option v-for="(value, key) in filters" :key="key" :value="key" :selected="key === item.filter">
          {{ value }}
        </option>
      </select>
      <input
        v-model="item.filter_val"
        type="text"
        class="form-control me-3"
        placeholder="Введите значение"
        aria-label="Введите значение"
      />
      <select class="form-select form-control me-3" @change="item.option = $event.target.value">
        <option v-for="(value, key) in options" :key="key" :value="key" :selected="key === item.option">
          {{ value }}
        </option>
      </select>
      <select class="form-select form-control me-3" @change="item.group = $event.target.value">
        <option v-for="(value, key) in groups" :key="key" :value="key" :selected="key === item.group">
          {{ value }}
        </option>
      </select>
    </div>
  </div>
  <div class="summary-container">
    <h5 class="fw-bold"> Итого: </h5>
    <!-- проверка, что массив строк не пуст -->
    <template v-if="filter_rows.length !== 0">
      <!--  прогонка по отфильтрованным группам и их данным -->
      <p class="ms-1" v-for="(filter_row, filter_row_key) in filter_by_group" :key="filter_row_key">
        (
        <!-- прогонка по всем объектам данной группы -->
        <template v-for="(object, key) in filter_row" :key="key">
          {{
            '«' +
            headerFromTable[object.column].caption +
            '» ' +
            filters[object.filter] +
            ' «' +
            object.filter_val +
            '» '
          }}
          <!-- для последнего элемента опция не нужно -->
          <template v-if="key !== filter_row.length - 1">
            {{ options[object.option] + ' ' }}
          </template>
        </template>
        )
        <!-- вывод опций между группами с учетом, что у последней не нужна -->
        <template v-if="filter_row_key !== filter_by_group.length - 1">
          {{ ' ' + options[group_options[filter_row_key]] }}
        </template>
      </p>
    </template>
  </div>
  <div class="button-container">
    <energy-button @click="addNewGroup" class="btn btn-primary me-3 not-full">Добавить группу</energy-button>
    <energy-button @click="deleteGroup" class="btn btn-danger not-full">Удалить группу</energy-button>
  </div>
</template>

<script>
import EnergyIcon from '@/ui/energyIcon/EnergyIcon';
import EnergyButton from '@/ui/energyButton/EnergyButton';

export default {
  name: 'FilterCard',
  components: {
    EnergyButton,
    EnergyIcon,
  },
  props: {
    headerFromTable: {
      type: Array,
      required: true,
    },
  },
  data() {
    return {
      filter_rows: [],
      options: ['И', 'ИЛИ', 'НЕ И', 'НЕ ИЛИ'],
      filters: ['Содержит', 'Не содержит', 'Начинается с', 'Заканчивается на', 'Равно', 'Не равно'],
      groups: ['Группа 1'],
      group_options: [],
      last_index: null,
    };
  },
  methods: {
    // добавление строки фильтрации
    addNewFilterRow() {
      this.filter_rows.push({
        // выбранная группа
        group: '0',
        // выбранная опция (и, или, не и, не или)
        option: '0',
        // выбранный столбец таблицы
        column: '0',
        // выбранный фильтр
        filter: '0',
        // выбранное значение фильтра
        filter_val: '0',
      });
    },
    // удаление строки фильтрации
    deleteFilterRow(index) {
      this.filter_rows.splice(index, 1);
    },
    // добавление новой группы
    addNewGroup() {
      this.groups.push('Группа ' + (this.groups.length + 1));
      this.group_options.push('0');
    },
    // удаление последней группы
    deleteGroup() {
      // проверка, что мы не выбирали эту группу для какой-либо из строк фильтрации
      let last_index = this.groups.length - 1,
        flag = true;
      this.last_index = last_index;
      for (let i = 0; i < this.filter_rows.length; i++) {
        if (this.filter_rows[i].group === String(last_index)) {
          flag = false;
          break;
        }
      }
      if (this.groups.length !== 1 && flag === true) {
        this.groups.splice(last_index, 1);
      } else if (this.groups.length === 1) {
        alert('Вы пытаетесь удалить единственную группу. Ничего не выйдет!');
      } else {
        alert('Вы пытаетесь удалить используемую группу. Ничего не выйдет!');
      }
    },
  },
  computed: {
    // фильтрация массива по группам
    filter_by_group() {
      const array = [];
      for (let i = 0; i < this.groups.length; i++) {
        array.push([]);
      }
      for (let i = 0; i < this.filter_rows.length; i++) {
        array[this.filter_rows[i].group].push({
          option: this.filter_rows[i].option,
          column: this.filter_rows[i].column,
          filter: this.filter_rows[i].filter,
          filter_val: this.filter_rows[i].filter_val,
        });
      }
      return array;
    },
  },
};
</script>

<style scoped>
.filter-container {
  display: flex;
  justify-content: flex-start;
  align-content: flex-start;
  align-items: center;
  width: 100%;
}

.button-container {
  display: flex;
  width: auto;
  justify-content: flex-start;
}

.summary-container {
  display: flex;
  width: 100%;
  overflow-x: auto;
  white-space: nowrap;
}

.form-select {
  width: 100px;
}

.form-control {
  width: 25%;
}
</style>
