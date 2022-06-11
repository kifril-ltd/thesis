<template>
  <energy-spinner v-if="isLoading" />
  <div v-else data-role="splitter" class="h-100" :data-split-sizes="dataSplitSize" id="tableSplitter">
    <section class="w-100" @wheel="onScroll" id="splitTable">
      <filter-card :header-from-table="header" ref="filterCard" />
      <object-card
        :headerFromTable="header"
        :objectFromBody="currentRowItem"
        :pk="primaryKey"
        :table-id="tableId"
        @update="loadTable"
        ref="objectCard"
      />
      <div class="mt-2 ms-3 ps-5 pt-5 pb-5 tablePanel">
        <div @click="scrollToTop" class="back-to-top" data-toggle="tooltip" title="Наверх">
          <energy-icon width="35px" height="35px" icon="angle-up" />
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex">
            <energy-dropdown class="mb-3 me-3" titleOfDropdown="Показать столбцы">
              <div class="d-flex justify-content-between mb-2">
                <energy-button class="me-2 text-center show-columns-button">Сохранить</energy-button>
                <energy-button @click="checkAllFlagsForShow" class="ms-2 text-center show-columns-button"
                  >Выделить всё</energy-button
                >
              </div>
              <draggable
                tag="transition-group"
                @start="drag = true"
                @end="drag = false"
                :list="tableSettings"
                class="list-group"
                handle=".handle"
                item-key="caption"
                :component-data="{
                  tag: 'div',
                  type: 'transition-group',
                  name: !drag ? 'flip-list' : null,
                }"
                v-bind="dragOptions"
              >
                <template #item="{ element, index }">
                  <energy-dropdown-element>
                    <i
                      :class="element.fixed ? 'fa fa-anchor' : 'glyphicon glyphicon-pushpin'"
                      @click="element.fixed = !element.fixed"
                      aria-hidden="true"
                    ></i>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex justify-content-start">
                        <energy-checkbox :isChecked="element.show" @change="changeTableSettings(index, $event)">
                          <template v-slot:label-after>
                            {{ element.caption }}
                          </template>
                        </energy-checkbox>
                      </div>
                      <energy-icon
                        class="drag-icon m-0 align-self-center handle"
                        width="14px"
                        height="14px"
                        icon="drag_drop"
                      />
                    </div>
                  </energy-dropdown-element>
                </template>
              </draggable>
            </energy-dropdown>
            <energy-dropdown :titleOfDropdown="limitSetting.caption" dropDirection="dropend" class="mb-3">
              <energy-dropdown-element
                v-for="(limitItem, index) in limitList"
                :key="`limit_${index}`"
                @click="changeLimit(index)"
              >
                {{ limitItem.caption }}
              </energy-dropdown-element>
            </energy-dropdown>
          </div>
          <div class="d-flex">
            <template v-if="!isOpening">
              <div data-toggle="tooltip" title="Добавить новую запись" @click="changeCurrentRowItem">
                <energy-icon class="me-3" width="35px" height="35px" icon="add" />
              </div>
              <div data-toggle="tooltip" title="Сохранить выбранные записи">
                <energy-icon class="me-3" width="35px" height="35px" icon="save" />
              </div>
              <div data-toggle="tooltip" title="Удалить выбранные записи" @click="deleteRows">
                <energy-icon class="me-3" width="35px" height="35px" icon="trash-can" />
              </div>
            </template>
            <div data-toggle="tooltip" title="Доп. настройки" @click="openSettings">
              <energy-icon class="me-3" width="35px" height="35px" icon="settings" />
            </div>
          </div>
        </div>
        <div v-if="tableSettings.length" class="table-wrapper">
          <energy-table
            :can-select="true"
            :header="header"
            :body="normalizedBodyData"
            key-col="title"
            :index="primaryKey"
            :table-filter="tableFilter"
            :table-settings="tableSettings"
            @dbl-click-row="changeCurrentRowItem"
            @change-column-width="changeColumnWidth"
            @select-rows="selectRowsHandler"
          />
        </div>
        <div class="d-flex justify-content-center">
          <EnergyTablePagination :limit="limit" :page="page" :total-count="totalCount" @change-page="changePage" />
        </div>
      </div>
    </section>
    <div class="d-flex flex-column mt-2 ms-3 pt-5 pb-5 ps-2">
      <div class="d-flex flex-column">
        <div class="icon-panel" v-if="isOpening">
          <div class="icon-container" data-toggle="tooltip" title="Добавить новую запись" @click="changeCurrentRowItem">
            <energy-icon width="35px" height="35px" icon="add" />
          </div>
          <div class="icon-container" data-toggle="tooltip" title="Сохранить выбранные записи">
            <energy-icon width="35px" height="35px" icon="save" />
          </div>
          <div class="icon-container" data-toggle="tooltip" title="Фильтрация" @click="openFilterModal">
            <energy-icon width="35px" height="35px" icon="filter" />
          </div>
          <div class="icon-container" data-toggle="tooltip" title="Импортировать из Excel">
            <energy-icon width="35px" height="35px" icon="import" />
          </div>
          <div class="icon-container" data-toggle="tooltip" title="Удалить выбранные записи" @click="deleteRows">
            <energy-icon width="35px" height="35px" icon="trash-can" />
          </div>
        </div>
        <date-picker
          class="dp__theme_light icon-container"
          v-model="date"
          locale="ru-RU"
          :enableTimePicker="false"
          autoApply
          placeholder="Выбор даты"
          :maxDate="new Date()"
        />
        <h3 class="mt-1">Связанные объекты:</h3>
      </div>
    </div>
  </div>
</template>

<script>
import DatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';
import $ from 'jquery';
import { TableApi } from '@/api';
import {
  EnergyTable,
  EnergySpinner,
  EnergyIcon,
  EnergyDropdown,
  EnergyButton,
  EnergyDropdownElement,
  EnergyCheckbox,
  EnergyTablePagination,
  EnergyTableInput,
} from '@/ui';
import { listSymbol } from '@/store';
import FilterCard from '@/components/mainTable/filterCard/FilterCard';
import ObjectCard from '@/components/mainTable/objectCard2/ObjectCard';
import { defineComponent, markRaw } from 'vue';
import draggable from 'vuedraggable';

export default {
  name: 'MainTable',
  components: {
    EnergySpinner,
    EnergyTable,
    EnergyIcon,
    EnergyDropdown,
    EnergyButton,
    EnergyDropdownElement,
    EnergyCheckbox,
    FilterCard,
    ObjectCard,
    EnergyTablePagination,
    DatePicker,
    draggable,
  },
  data: () => ({
    page: 1,
    totalCount: 0,
    limitSetting: null,
    primaryKey: null,
    body: null,
    header: null,
    isLoading: true,
    tableSettings: [],
    tableFilter: null,
    selectedRows: [],
    currentRowItem: null,
    date: null,
    isScrolling: false,
    isOpening: true,
    dataSplitSize: '75, 25',
    drag: false,
  }),
  props: {
    tableId: {
      type: String,
      required: true,
    },
  },
  inject: {
    stateList: {
      from: listSymbol,
    },
  },
  watch: {
    tableId: {
      immediate: true,
      async handler() {
        this.getWidth();
        if (this.tableId) {
          this.isLoading = true;
          this.limitSetting = this.limitList[0];
          await this.fetchTableData().finally(() => {
            this.tableFilter = this.initTableFilter();
            this.tableSettings = this.initialTableSettings();
            this.isLoading = false;
          });
          console.log(123, this.stateList.state, this.stateList.getList('ac0715eb-d97d-47d2-9b09-1db076066683'));
        } else await this.$router.push({ name: 'home' });
      },
    },
    '$route.path'() {
      this.saveWidth();
    },
  },
  mounted() {
    // здесь устанавливаем из какого либо хранилища
    this.getWidth();
  },
  beforeUnmount() {
    this.saveWidth();
  },
  async created() {
    await this.stateList.fetchUsers();
  },
  computed: {
    dragOptions() {
      return {
        animation: 200,
        group: 'description',
        disabled: false,
        ghostClass: 'ghost',
      };
    },
    titleColumns() {
      return this.header?.map(head => head.title) ?? [];
    },
    requiredLists() {
      return this.header ? this.header.filter(item => item.data_type === 'list') : [];
    },
    limitList() {
      return [
        { limit: 5, caption: `Показать 5 записей` },
        { limit: 10, caption: `Показать 10 записей` },
        { limit: 15, caption: `Показать 15 записей` },
        { limit: 2000, caption: `Показать все записи` },
      ];
    },
    limit() {
      return this.limitSetting?.limit ?? 0;
    },
    normalizedBodyData() {
      let data = [];
      if (this.header && this.body) {
        this.body.forEach(body_elem => {
          const newBodyElem = {};
          this.header.forEach(header_elem => {
            if (header_elem.data_type === 'list') {
              let status = this.stateList.getListItem(header_elem.structure_list_id, body_elem[header_elem.title]);
              newBodyElem[header_elem.title] = status.title;
            } else if (header_elem.data_type === 'user') {
              let user = this.stateList.state.users.find(x => x.user_id === body_elem[header_elem.title]);
              newBodyElem[header_elem.title] = user.first_name + ' ' + user.middle_name + ' ' + user.last_name;
            } else {
              newBodyElem[header_elem.title] = body_elem[header_elem.title];
            }
          });
          data.push(newBodyElem);
        });
      }
      return data;
    },
  },
  methods: {
    checkAllFlagsForShow() {
      this.tableSettings.forEach(x => (x.show = true));
    },
    getWidth() {
      if (localStorage.splitSize) {
        this.dataSplitSize = localStorage.splitSize;
      }
    },
    saveWidth() {
      let width1 = parseInt($('#splitTable').css('flex-basis').replace('calc(', '').split('%')[0]),
        width2 = 100 - width1;
      localStorage.splitSize = width1.toString() + ',' + width2.toString();
    },
    async fetchTableData() {
      const data = {
          page: this.page,
          limit: this.limit,
          filter: this.formingFilter(),
        },
        response = await TableApi.getTable(this.tableId, data);
      if (response?.result) {
        this.body = response.result.body;
        this.header = response.result.header;
        this.selectedRows = [];

        const listIds = this.requiredLists.map(item => item.structure_list_id);
        await this.stateList.fetchList(listIds);

        if (this.primaryKey !== response.result.pk) this.primaryKey = response.result.pk;
        if (this.totalCount !== response.totalCount) this.totalCount = response.totalCount;
      }
    },
    changePage(newPage) {
      this.page = newPage;
      this.loadTable();
    },
    openFilterModal() {
      this.$refs.filterCard.openModal();
    },
    openObjectModal() {
      this.$refs.objectCard.openModal();
    },
    initTableFilter() {
      const tableFilter = {};
      this.titleColumns.forEach(key => {
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
    initialTableSettings() {
      return this.header.map(head => ({
        show: !head.is_pk,
        caption: head.caption,
        width: 300,
      }));
    },
    //Получаю объект по индексу, попытка сделать драг-н-дроп
    getColumnSettingsByIndex(index) {
      return this.tableSettings.find(x => x.index == index);
    },
    changeColumnWidth(index, newWidth) {
      const setting = this.tableSettings[index];

      if (newWidth < 600 && newWidth > 100) {
        setting.width = newWidth;
      } else if (newWidth > 600 && setting.width !== 600) setting.width = 600;
      else if (newWidth < 100 && setting.width !== 100) setting.width = 100;
    },
    changeTableFilter(title, value) {
      this.tableFilter[title].value = value.target.value;
      this.loadTable();
    },
    changeTableSettings(index, value) {
      this.tableSettings[index].show = value;
    },
    formingFilter() {
      const filter = {};
      this.titleColumns.forEach(key => {
        if (this.tableFilter[key].value) {
          filter[key] = {
            value: this.tableFilter[key].value,
            isPart: true,
          };
        }
      });
      return filter;
    },
    loadTable() {
      this.isLoading = true;
      this.fetchTableData().finally(() => {
        this.isLoading = false;
      });
    },
    changeLimit(index) {
      this.limitSetting = this.limitList[index];
      this.changePage(1);
    },
    changeCurrentRowItem(index) {
      this.currentRowItem = typeof index === 'number' ? this.body[index] : null;
      this.openObjectModal();
    },
    scrollToTop() {
      $('html, body').animate(
        {
          scrollTop: 0,
        },
        100,
      );
    },
    onScroll() {
      console.log($(window).scrollTop());
      if ($(window).scrollTop() > 100) {
        // то сделать кнопку scrollup видимой
        $('.back-to-top').fadeIn();
      }
      // иначе скрыть кнопку scrollup
      else {
        $('.back-to-top').fadeOut();
      }
    },
    selectRowsHandler(rows) {
      this.selectedRows = rows;
    },
    selectedRowIds() {
      return this.selectedRows.map(row => row[this.primaryKey]);
    },
    async deleteRows() {
      const selectedRowIds = this.selectedRowIds(),
        { result } = await TableApi.deleteRows(this.tableId, selectedRowIds);
      if (result > 0) this.loadTable();
    },
    openSettings() {
      let splitTable = $('#splitTable');
      if (parseInt(splitTable.css('flex-basis').replace('calc(', '').split('%')[0]) < 95) {
        this.dataSplitSize = '100, 0';
        this.isOpening = false;
      } else {
        this.dataSplitSize = '75, 25';
        this.isOpening = true;
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.table-wrapper {
  max-height: 900px;
  overflow-x: auto;
}

.dp__theme_light {
  width: 160px;
  --dp-background-color: #ffffff;
  --dp-text-color: #111111;
  --dp-hover-icon-color: #111111;
  --dp-border-color: #111111;
}

.back-to-top {
  position: fixed; /* фиксированная позиция */
  left: 20px; /* расстояние от правого края */
  bottom: 0px; /* расстояние от нижнего края */
  padding: 4px 10px; /* отступы до содержимого блока */
  cursor: pointer; /* форма курсора */
  text-align: center; /*выравнивание содержимого элемента по центру */
  display: none;
}

.icon-panel {
  display: flex;
  flex-wrap: wrap;
}

.icon-container {
  margin: 0.3rem;
}

.tablePanel {
  min-height: 948px;
}

.drag-icon {
  cursor: grab;
}

.flip-list-move {
  transition: transform 0.1s;
}
.no-move {
  transition: transform 0s;
}
.ghost {
  opacity: 0.5;
  background: #c8ebfb;
}

.show-columns-button {
  width: 200px;
}

.show-columns-button:focus {
  width: 200px;
}
</style>
