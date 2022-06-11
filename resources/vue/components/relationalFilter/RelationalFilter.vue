<template>
  <div class="container mt-3 mb-3">
    <object-card ref="objectModal" @choose="chooseTable" />
    <column-modal ref="columnModal" :object="currObject" @choose="chooseAttribute" />

    <ul>
      <tree-component
        @make-object="makeObject"
        @add-field="addEmitField"
        :structure-id="structureId"
        :item="treeData"
      ></tree-component>
    </ul>

    <div class="d-flex align-items-center justify-content-center">
      <energy-button class="not-full btn-primary ms-1 me-1"> Открыть </energy-button>
      <energy-button class="not-full btn-success ms-1 me-1"> Сохранить </energy-button>
    </div>
  </div>
</template>

<script>
import TreeComponent from '@/components/relationalFilter/treeComponent/TreeComponent';
import ObjectCard from '@/components/relationalFilter/objectModal/ObjectModal';
import ColumnModal from '@/components/relationalFilter/columnModal/ColumnModal';
import { EnergyButton } from '@/ui';

import { TableApi } from '@/api';
import { userSymbol, menuSymbol } from '@/store';

export default {
  name: 'RelationalFilter',
  components: { TreeComponent, ObjectCard, ColumnModal, EnergyButton },
  inject: {
    userState: {
      from: userSymbol,
    },
    stateMenu: {
      from: menuSymbol,
    },
  },
  data() {
    return {
      // структура
      // Группа {
      //  name: * имя,
      //  level: * уровень вложенности,
      //  isGroup: * флаг, является ли группой,
      //  isObject: * флаг, является ли объектом,
      //  groups: [...] массив групп,
      //  objects: [...]} массив объектов,
      treeData: {
        name: 'Группа',
        level: 0,
        isGroup: true,
        isObject: false,
        isField: false,
        groups: [],
        objects: [],
      },
      structureId: null,
      currGroup: null,
      currObject: null,
      header: null,
    };
  },
  watch: {
    // смотрим за новым объектом
    structureId: {
      immediate: true,
      async handler() {
        if (this.structureId) {
          await this.fetchTableData();
          this.newObject(this.currGroup);
        }
      },
    },
  },
  methods: {
    chooseTable(structureId) {
      this.structureId = structureId;

      this.addObject(this.treeData, this.currGroup);
    },

    // получение данных об объекте
    async fetchTableData() {
      const data = {
          page: 1,
          limit: 0,
          filter: {},
        },
        response = await TableApi.getTable(this.structureId, data);
      if (response?.result) {
        this.header = response.result.header;
      }
    },
    makeObject(item) {
      this.$refs.objectModal.openModal();
      this.currGroup = item;
    },
    // создание нового объекта
    newObject(item) {
      item.objects.push({
        name: this.getLabel,
        parentName: item.name,
        level: item.level + 1,
        isGroup: false,
        isObject: true,
        isField: false,
        structId: this.structureId,
        columns: this.header,
      });
    },

    addEmitField(item) {
      this.currObject = item;
      this.$refs.columnModal.openModal();
    },
    addField(tree, obj) {
      for (let key in tree) {
        if (key == 'groups') {
          for (let i in tree[key]) {
            if (tree[key][i].name == obj.parentName) {
              for (let j in tree[key][i].objects) {
                if (tree[key][i].objects[j].name == obj.name) {
                  tree[key][i].objects[j] = obj;
                  continue;
                }
              }
            } else this.addField(tree[key][i], obj);
          }
        }
      }
      this.treeData = tree;
    },
    chooseAttribute(attribute) {
      if (this.currObject.fields && this.currObject.fields.length) {
        this.currObject.fields.push({
          name: attribute.caption,
          parentName: this.currObject.name,
          level: this.currObject.level + 1,
          isGroup: false,
          isObject: false,
          isField: true,
        });
      } else {
        this.currObject.fields = [
          {
            name: attribute.caption,
            parentName: this.currObject.name,
            level: this.currObject.level + 1,
            isGroup: false,
            isObject: false,
            isField: true,
          },
        ];
      }
      this.addField(this.treeData, this.currObject);
    },
    // добавление объекта
    addObject(tree, group) {
      for (let key in tree) {
        if (key == 'groups') {
          for (let i in tree[key]) {
            if (tree[key][i].name == group.name) {
              tree[key][i] = group;
            } else this.addObject(tree[key][i], group);
          }
        }
      }
      this.treeData = tree;
    },
  },
  computed: {
    // текущий юзер
    user() {
      return this.userState.state.user;
    },
    // список всего меню
    childrenMenu() {
      return this.stateMenu.allMenuElements;
    },
    // меню в структурированном варианте
    menu() {
      return this.stateMenu.state.menu;
    },
    // получение лейбла таблицы
    getLabel() {
      if (this.structureId && this.menu)
        return this.childrenMenu.find(item => item.structure_id === this.structureId)?.caption ?? '';
      else return '';
    },
  },
};
</script>

<style scoped></style>
