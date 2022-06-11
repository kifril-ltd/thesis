<template>
  <div class="energy-table" :style="tableStyles">
    <template v-if="canSelect">
      <div class="energy-table__header d-flex flex-column justify-content-center align-items-center">
        <energy-checkbox :isChecked="allChecked" @change="toggleAllItems"> </energy-checkbox>
      </div>

      <div v-if="tableFilter" class="energy-table__body"></div>

      <div
        :class="
          'energy-table__body d-flex justify-content-center align-items-center' + (indexRow % 2 == 0 ? ' colored' : '')
        "
        v-for="(item, indexRow) in selectItems"
        :key="`row_${indexRow}`"
        :ref="
          el => {
            rowsDivs[indexRow].push(el);
          }
        "
        @mouseenter="hoverOnRow(indexRow)"
        @mouseleave="unhoverOnRow(indexRow)"
        @focus="focusOnRow(indexRow)"
        @blur="lostFocusOnRow(indexRow)"
        tabindex="0"
      >
        <energy-checkbox :isChecked="item" @change="toggleItem(indexRow)" />
      </div>
      <div class="energy-table__resizer" :style="resizeStyles"></div>
    </template>
    <template v-for="(head, index) in header" :key="`col_${index}`">
      <div class="energy-table__header" v-show="tableSettings[index].show">
        <span class="energy-table__text">{{ head[keyCaption] }}</span>
      </div>

      <div v-if="tableFilter" class="energy-table__body" v-show="tableSettings[index].show">
        <component
          :is="tableFilter[head[keyCol]].component"
          :params="tableFilter[head[keyCol]].params"
          :value="tableFilter[head[keyCol]].value"
          :placeholder="head[keyCaption]"
        />
      </div>

      <div
        :class="'energy-table__body' + (indexRow % 2 == 0 ? ' colored' : '')"
        v-for="(item, indexRow) in body"
        :ref="
          el => {
            rowsDivs[indexRow].push(el);
          }
        "
        :key="`row_${indexRow}`"
        v-show="tableSettings[index].show"
        @dblclick="$emit('dbl-click-row', indexRow)"
        @mouseenter="hoverOnRow(indexRow)"
        @mouseleave="unhoverOnRow(indexRow)"
        @focus="focusOnRow(indexRow)"
        @blur="lostFocusOnRow(indexRow)"
        tabindex="0"
      >
        {{ item[head[keyCol]] }}
      </div>
      <div
        class="energy-table__resizer"
        :style="resizeStyles"
        v-show="tableSettings[index].show"
        @mousedown.stop.prevent="changeColumnWidth(index, $event)"
      ></div>
    </template>
  </div>
</template>

<script>
import { EnergyCheckbox, EnergyInput } from '@/ui';
import { throttle } from 'lodash';

export default {
  name: 'EnergyTable',
  components: {
    EnergyCheckbox,
    EnergyInput,
  },
  emits: ['select-rows', 'dbl-click-row', 'change-column-width'],
  props: {
    header: {
      type: Array,
      required: true,
    },
    body: {
      type: Array,
      required: true,
    },
    canSelect: {
      type: Boolean,
      required: false,
      default: false,
    },
    keyCol: {
      type: String,
      required: false,
      default: 'title',
    },
    keyCaption: {
      type: String,
      required: false,
      default: 'caption',
    },
    index: {
      type: String,
      required: false,
      default: 'id',
    },
    tableFilter: {
      type: Object,
      required: false,
      default: null,
    },
    tableSettings: {
      type: Array,
      required: true,
    },
  },
  data: () => ({
    selectItems: [],
    dropTarget: null,
  }),
  created() {
    if (this.canSelect) {
      this.selectItems = this.body.map(() => false);
    }
  },
  computed: {
    countRows() {
      return this.body.length + 1 + +!!this.tableFilter;
    },
    rowsDivs() {
      let result = {};
      this.body.forEach((x, index) => (result[index] = []));
      return result;
    },
    countColumns() {
      return this.tableSettings.reduce((total, setting) => total + setting.show, 0) + +this.canSelect;
    },
    columnWidths() {
      return this.tableSettings.map(setting => (setting.show ? `${setting.width}px 3px` : '')).join(' ');
    },
    tableStyles() {
      return {
        'grid-template-columns': `${this.canSelect ? '100px 3px ' : ''}${this.columnWidths}`,
        'grid-template-rows': `repeat(${this.countRows}, auto)`,
      };
    },
    resizeStyles() {
      return { 'grid-row': `span ${this.countRows}` };
    },
    allChecked() {
      return this.selectItems.every(item => item);
    },
    throttleDragColumn() {
      return throttle(this.dragColumn, 33);
    },
  },
  methods: {
    focusOnRow(targetIndex) {
      this.rowsDivs[targetIndex].forEach(x => {
        x.style.backgroundColor = '#efefef';
        x.focused = true;
      });
    },
    lostFocusOnRow(targetIndex) {
      this.rowsDivs[targetIndex].forEach(x => {
        x.classList.contains('colored') ? (x.style.backgroundColor = '#f7f7f7') : (x.style.backgroundColor = '#ffffff');
        x.focused = false;
      });
    },
    hoverOnRow(targetIndex) {
      this.rowsDivs[targetIndex].forEach(x => {
        if (x.focused !== true) x.style.backgroundColor = '#efefef';
      });
    },
    unhoverOnRow(targetIndex) {
      this.rowsDivs[targetIndex].forEach(x => {
        if (x.focused !== true)
          x.classList.contains('colored')
            ? (x.style.backgroundColor = '#f7f7f7')
            : (x.style.backgroundColor = '#ffffff');
      });
    },
    toggleAllItems() {
      const hasNotAllChecked = !this.allChecked;
      this.selectItems.forEach((item, index) => {
        this.selectItems[index] = hasNotAllChecked;
      });
      this.$emit('select-rows', this.body);
    },
    toggleItem(index) {
      this.selectItems[index] = !this.selectItems[index];
      const selectedRows = this.body.filter((row, indexRow) => this.selectItems[indexRow]);
      this.$emit('select-rows', selectedRows);
    },
    changeColumnWidth(index, event) {
      this.dropTarget = {
        x: this.tableSettings[index].width - event.clientX,
        index,
      };
      window.addEventListener('mousemove', this.throttleDragColumn);
      window.addEventListener('mouseup', this.unmountDragColumn);
      window.addEventListener('mouseleave', this.unmountDragColumn);
    },
    dragColumn(event) {
      this.$emit('change-column-width', this.dropTarget.index, this.dropTarget.x + event.clientX);
    },
    unmountDragColumn() {
      window.removeEventListener('mousemove', this.throttleDragColumn);
      window.removeEventListener('mouseup', this.unmountDragColumn);
      window.removeEventListener('mouseleave', this.unmountDragColumn);
      this.dropTarget = null;
    },
  },
  unmounted() {
    this.unmountDragColumn();
  },
};
</script>

<style lang="scss" scoped>
.energy-table {
  --border-color: rgb(222, 226, 230);
  --border-params: 1px solid var(--border-color);
  border-left: var(--border-params);
  display: grid;
  grid-auto-flow: column;
  column-gap: 0;

  &__header,
  &__body {
    text-align: center;
    padding: 0.5em;
    border-bottom: var(--border-params);
    word-break: break-all;
  }

  &__body {
    cursor: default;
  }

  &__header {
    border-top: var(--border-params);
    border-bottom-width: 3px;
    font-weight: 900;
    word-break: break-all;
    color: var(--bs-blue);
    cursor: default;
  }

  &__text {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 100%;
  }

  &__resizer {
    --border-resizer-color: #fff;
    --border-resizer: 1px solid var(--border-resizer-color);
    background-color: var(--border-color);
    border-left: var(--border-resizer);
    border-right: var(--border-resizer);

    &:hover {
      --border-resizer-color: var(--border-color);
      cursor: col-resize;
    }
  }
  .colored {
    background-color: #f7f7f7;
  }

  .energy-table__header {
    background-color: #efefef;
  }

  .energy-table__body {
    background-color: #ffffff;
  }
}
</style>
