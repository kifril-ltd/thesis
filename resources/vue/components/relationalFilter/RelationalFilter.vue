<template>
  <div class="container mt-3 mb-3">
    <object-card ref="objectModal" @choose="chooseTable" />
    <column-modal ref="columnModal" :object="currObject" @choose="chooseAttribute" />
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab">
          Условия
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#file" type="button" role="tab"> Колонки </button>
      </li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade show active" id="home" role="tabpanel">
        <ul class="mt-3">
          <tree-component
            @make-object="makeObject"
            @add-field="addEmitField"
            :structure-id="structureId"
            :item="treeData"
          ></tree-component>
        </ul>
      </div>
      <div class="tab-pane fade" id="file" role="tabpanel">
        <column-component :tables="objects"></column-component>
      </div>
    </div>

    <div class="d-flex align-items-center justify-content-center">
      <energy-button class="not-full btn-primary ms-1 me-1"> Открыть</energy-button>
      <energy-button class="not-full btn-success ms-1 me-1" @click="printData"> Сохранить</energy-button>
    </div>
  </div>
</template>

<script>
import TreeComponent from '@/components/relationalFilter/treeComponent/TreeComponent';
import ObjectCard from '@/components/relationalFilter/objectModal/ObjectModal';
import ColumnModal from '@/components/relationalFilter/columnModal/ColumnModal';
import { EnergyButton } from '@/ui';

import { tableSymbol, userSymbol } from '@/store';
import ColumnComponent from '@/components/relationalFilter/ColumnComponent/ColumnComponent';
// import {RelationFilterApi} from "@/api";
import axios from 'axios';

export default {
  name: 'RelationalFilter',
  components: { ColumnComponent, TreeComponent, ObjectCard, ColumnModal, EnergyButton },
  inject: {
    stateTable: {
      from: tableSymbol,
    },
    userState: {
      from: userSymbol,
    },
  },
  async created() {
    if (this.user) {
      await this.stateTable.fetchTables();
    }
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
      //  tables: [...]} массив объектов,
      treeData: {
        name: 'Группа',
        level: 0,
        prefix: '',
        isGroup: true,
        isObject: false,
        isField: false,
        groups: [],
        tables: [],
      },
      currTable: null,
      currGroup: null,
      currObject: null,
      header: null,
    };
  },
  watch: {
    // смотрим за новым объектом
    currTable: {
      immediate: true,
      handler() {
        if (this.currTable) {
          this.header = this.currTable.columns;
          this.newObject(this.currGroup);
        }
      },
    },
  },
  methods: {
       printData() {
          let data = {
              "where": [this.treeData],
              "select": this.objects
          }
           axios.post('/api/relfilter/build',
               {data,
                   responseType: 'blob'})
               .then(response => {
                   console.log(response);
                   var blob = new Blob([response.data], { type: 'text/csv' });
                   console.log(blob);
                   var fileURL = window.URL.createObjectURL(blob);
                   var fileLink = document.createElement('a');
                   fileLink.href = fileURL;
                   fileLink.setAttribute('download', 'report.csv');
                   document.body.appendChild(fileLink);
                   fileLink.click();
               }).catch(error => {
               console.log(error)
           })
      },
    chooseTable(table) {
      this.currTable = table;
      this.addObject(this.treeData, this.currGroup);
      console.log(table);
    },
    makeObject(item) {
      this.$refs.objectModal.openModal();
      this.currGroup = item;
    },
    // создание нового объекта
    newObject(item) {
      let prefix = '';
      if (item.tables && item.tables.length) {
        prefix = 'and';
      }
      item.tables.push({
        name: this.currTable.caption,
        parentName: item.name,
        level: item.level + 1,
        isGroup: false,
        isObject: true,
        isField: false,
        tableColumns: this.header,
        prefix: prefix,
        tableName: this.currTable.object,
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
              for (let j in tree[key][i].tables) {
                if (tree[key][i].tables[j].name == obj.name) {
                  tree[key][i].tables[j] = obj;
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
      if (this.currObject.columns && this.currObject.columns.length) {
        this.currObject.columns.push({
          name: attribute.caption,
          parentName: this.currObject.name,
          level: this.currObject.level + 1,
          isGroup: false,
          isObject: false,
          isField: true,
          condition: 'like',
          prefix: 'and',
          columnName: attribute.object,
        });
      } else {
        this.currObject.columns = [
          {
            name: attribute.caption,
            parentName: this.currObject.name,
            level: this.currObject.level + 1,
            isGroup: false,
            isObject: false,
            isField: true,
            prefix: '',
            condition: 'like',
            columnName: attribute.object,
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
    objects() {
      return this.stateTable.state.tables;
    },
    user() {
      return this.userState.state.user;
    },
  },
};
</script>

<style scoped></style>
