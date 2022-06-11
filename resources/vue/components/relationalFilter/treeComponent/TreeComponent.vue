<template>
  <ul>
    <li>
      <div class="d-flex align-items-center">
        <div data-toggle="tooltip" title="Раскрыть ветвь">
          <energy-icon
            @click="toggle"
            v-if="(isFolderGroup || isFolderObject || isFolderField) && !isOpen"
            width="25px"
            height="25px"
            icon="plusRow"
          />

          <energy-icon
            @click="toggle"
            v-if="(isFolderGroup || isFolderObject || isFolderField) && isOpen"
            width="25px"
            height="25px"
            icon="minusRow"
          />
        </div>
        <div :class="folderClass" class="group-box">
          <div class="d-flex align-items-center">
            <!-- TODO LOGIC -->
            <energy-select
              v-if="!item.parentName || someData == 0"
              :hints="parentLogic"
              class="ms-2 me-2"
              @change-value="changePrefix"
            ></energy-select>
            <template v-else>
              <energy-select
                v-if="item.isGroup || item.isObject"
                :hints="groupObjectLogic"
                @change-value="changePrefix"
                class="ms-2 me-2"
              ></energy-select>
              <template v-else>
                <energy-select :hints="fieldLogic" @change-value="changePrefix" class="ms-2 me-2"></energy-select>
                <energy-input class="me-2 static-input"></energy-input>
              </template>
            </template>
            {{ item.name }}
          </div>
          <div class="d-flex align-items-center justify-content-end">
            <!-- добавление нового объекта, добавление новой группы, удаление группы, доступны только у группы -->
            <template v-if="item.isGroup">
              <energy-button @click="makeObject(item)" class="not-full m-1">
                +Объект ({{ isFolderObject ?? '0' }})
              </energy-button>
              <energy-button @click="makeGroup(item)" class="not-full m-1">
                +Группа ({{ isFolderGroup ?? '0' }})
              </energy-button>
              <div data-toggle="tooltip" title="Удалить ветвь">
                <energy-icon
                  class="m-1"
                  @click="$emit('removeGroup', item)"
                  width="25px"
                  height="25px"
                  v-if="item.parentName && item.isGroup"
                  icon="x-mark"
                />
              </div>
            </template>
            <!-- Добавление поля и удаление объекта доступны только у объекта -->
            <template v-if="item.isObject">
              <energy-button class="not-full m-1" @click="addField(item)">
                +Поле ({{ isFolderField ?? '0' }})
              </energy-button>
              <div data-toggle="tooltip" title="Удалить ветвь">
                <energy-icon
                  class="m-1"
                  @click="$emit('removeObject', item)"
                  width="25px"
                  height="25px"
                  v-if="item.parentName && item.isObject"
                  icon="x-mark"
                />
              </div>
            </template>
            <!-- Удаление поля доступны только у поля -->
            <template v-if="item.isField">
              <div data-toggle="tooltip" title="Удалить ветвь">
                <energy-icon
                  class="m-1"
                  @click="$emit('removeField', item)"
                  width="25px"
                  height="25px"
                  v-if="item.parentName && item.isField"
                  icon="x-mark"
                />
              </div>
            </template>
            <!-- Кнопка для драгдроп взаимодействия -->
            <div class="d-flex align-items-center flex-column" v-if="item.parentName">
              <div v-if="upFlag" data-toggle="tooltip" title="Переместить ветвь вверх" @click="$emit('upBranch', item)">
                <energy-icon width="20px" height="20px" icon="upper-arrow" />
              </div>
              <div
                v-if="downFlag"
                data-toggle="tooltip"
                title="Переместить ветвь вниз"
                @click="$emit('downBranch', item)"
              >
                <energy-icon width="20px" height="20px" icon="down-arrow" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <!-- Вывод объектов -->
    <ul v-show="isOpen" v-if="isFolderObject">
      <tree-component
        @up-branch="upBranch"
        @down-branch="downBranch"
        v-for="(child, key) in item.tables"
        :key="key"
        :item="child"
        @remove-object="removeFromObject"
        @add-field="addField"
        :up-flag="getUpFlag(key)"
        :down-flag="getDownFlag(key, isFolderObject)"
        :some-data="key"
      ></tree-component>
    </ul>
    <!-- Вывод полей -->
    <ul v-show="isOpen" v-if="isFolderField">
      <tree-component
        @up-branch="upBranch"
        @down-branch="downBranch"
        v-for="(child, key) in item.columns"
        :key="key"
        :item="child"
        @remove-field="removeFromField"
        :up-flag="getUpFlag(key)"
        :down-flag="getDownFlag(key, isFolderField)"
        :some-data="key"
      ></tree-component>
    </ul>
    <!-- Вывод групп -->
    <ul v-show="isOpen" v-if="isFolderGroup">
      <tree-component
        @up-branch="upBranch"
        @down-branch="downBranch"
        @add-field="addField"
        @make-object="makeObject"
        v-for="(child, key) in item.groups"
        :key="key"
        :item="child"
        @remove-group="removeFromGroup"
        :up-flag="getUpFlag(key)"
        :down-flag="getDownFlag(key, isFolderGroup)"
        :some-data="key"
      ></tree-component>
    </ul>
  </ul>
</template>

<script>
import { EnergyIcon, EnergyButton, EnergySelect, EnergyInput } from '@/ui';

export default {
  name: 'TreeComponent',
  components: { EnergySelect, EnergyButton, EnergyIcon, EnergyInput },
  props: {
    item: {
      type: Object,
      required: false,
    },
    structureId: {
      type: String,
      required: false,
      default: null,
    },
    upFlag: {
      type: Boolean,
      required: false,
      default: true,
    },
    downFlag: {
      type: Boolean,
      required: false,
      default: true,
    },
    someData: {
      type: Number,
      required: false,
    },
  },
  data() {
    return {
      // флаг ветки (открыта / нет)
      isOpen: false,
      // поля таблицы
      header: null,
      parentLogic: [
        { caption: '', value: '' },
        { caption: 'НЕ', value: 'not' },
      ],
      groupObjectLogic: [
        { caption: 'И', value: 'and' },
        { caption: 'ИЛИ', value: 'or' },
      ],
      fieldLogic: [
        { caption: 'СОДЕРЖИТ', value: 'like' },
        { caption: 'БОЛЬШЕ', value: '>' },
        { caption: 'МЕНЬШЕ', value: '<' },
        { caption: 'РАВНО', value: '=' },
      ],
    };
  },
  methods: {
    changePrefix(prefix) {
      this.newPrefix(this.item, prefix);
    },
    newPrefix(item, prefix) {
      item.prefix = prefix;
    },
    getUpFlag(key) {
      if (key > 0) return true;
      else return false;
    },
    getDownFlag(key, length) {
      if (key < length - 1) return true;
      else return false;
    },
    // метод, открывающий / закрываюший ветку
    toggle() {
      this.isOpen = !this.isOpen;
    },
    upBranch(item) {
      if (item.isGroup) {
        this.up(this.item, item, 'groups');
      }
      if (item.isObject) {
        this.up(this.item, item, 'tables');
      }
      if (item.isField) {
        this.up(this.item, item, 'columns');
      }
    },
    downBranch(item) {
      if (item.isGroup) {
        this.down(this.item, item, 'groups');
      }
      if (item.isObject) {
        this.down(this.item, item, 'tables');
      }
      if (item.isField) {
        this.down(this.item, item, 'columns');
      }
    },
    up(tree, item, upKey) {
      for (let key in tree) {
        if (key == upKey) {
          for (let i in tree[key]) {
            if (tree[key][i].name == item.name) {
              if (i > 0) {
                let tmp = tree[key][i];
                tree[key][i] = tree[key][i - 1];
                tree[key][i - 1] = tmp;
                if (upKey === 'groups') {
                  tree[key] = this.renameNode(tree[key], tree.name);
                }
              }
            } else this.up(tree[key][i], item, upKey);
          }
        }
      }
    },
    down(tree, item, downKey) {
      for (let key in tree) {
        if (key == downKey) {
          for (let i in tree[key]) {
            if (tree[key][i].name == item.name) {
              if (i < tree[key].length - 1) {
                let tmp = tree[key][i];
                tree[key][i] = tree[key][(parseInt(i) + 1).toString()];
                tree[key][(parseInt(i) + 1).toString()] = tmp;
                if (downKey === 'groups') {
                  tree[key] = this.renameNode(tree[key], tree.name);
                }
                break;
              }
            } else this.down(tree[key][i], item, downKey);
          }
        }
      }
    },
    // РАБОТА С ГРУППОЙ (START)
    // добавление
    makeGroup(item) {
      this.isOpen = true;
      let childName = '';
      if (item.name.split(' ').length === 1) {
        if (this.isFolderGroup) childName = 'Группа ' + (this.isFolderGroup + 1).toString();
        else childName = 'Группа 1';
      } else {
        if (this.isFolderGroup) childName = item.name + '.' + (this.isFolderGroup + 1).toString();
        else childName = item.name + '.1';
      }
      if (this.isFolderGroup) {
        item.groups.push({
          name: childName,
          parentName: item.name,
          level: item.level + 1,
          isGroup: true,
          isObject: false,
          isField: false,
          groups: [],
          tables: [],
          prefix: 'and',
        });
      } else {
        item.groups = [
          {
            name: childName,
            parentName: item.name,
            level: item.level + 1,
            isGroup: true,
            isObject: false,
            isField: false,
            prefix: '',
            groups: [],
            tables: [],
          },
        ];
      }
    },
    // удаление
    removeFromGroup(group) {
      this.deleteNode(this.item, group, 'groups');
    },
    // РАБОТА С ГРУППОЙ (END)

    // РАБОТА С ОБЪЕКТОМ (START)
    // добавление
    makeObject(item) {
      this.isOpen = true;
      this.$emit('makeObject', item);
    },
    // удаление
    removeFromObject(object) {
      this.deleteNode(this.item, object, 'tables');
    },
    // РАБОТА С ОБЪЕКТОМ (END)

    // РАБОТА С ПОЛЕМ (START)
    // добавление
    addField(item) {
      this.isOpen = true;
      this.$emit('addField', item);
    },
    // удаление
    removeFromField(field) {
      this.deleteNode(this.item, field, 'columns');
    },
    // РАБОТА С ПОЛЕМ (END)

    // УДАЛЕНИЕ УЗЛА
    deleteNode(tree, removed, rmKey) {
      for (let key in tree) {
        if (key == rmKey) {
          for (let i in tree[key]) {
            if (tree[key][i].name == removed.name) {
              tree[key].splice(i, 1);
              if (rmKey === 'groups') {
                tree[key] = this.renameNode(tree[key], tree.name);
              }
            } else this.deleteNode(tree[key][i], removed, rmKey);
          }
        }
      }
    },

    // ПЕРЕИМЕНОВАНИЕ ГРУППЫ ПРИ УДАЛЕНИИ
    renameNode(tree, treeName) {
      for (let i = 0; i < tree.length; i++) {
        if (tree[i].parentName.split(' ').length === 1) {
          tree[i].name = 'Группа ' + (i + 1).toString();
        } else {
          tree[i].parentName = treeName;
          tree[i].name = tree[i].parentName + '.' + (i + 1).toString();
        }
        if (tree[i].groups && tree[i].groups.length) {
          tree[i].groups = this.renameNode(tree[i].groups, tree[i].name);
        }
      }
      return tree;
    },
  },
  computed: {
    // проверка на дочерние компоненты у группы
    isFolderGroup() {
      return this.item.groups && this.item.groups.length;
    },
    // проверка на дочерние компоненты у объекта
    isFolderObject() {
      return this.item.tables && this.item.tables.length;
    },
    isFolderField() {
      return this.item.columns && this.item.columns.length;
    },
    // css-класс для компонентов
    folderClass() {
      if ((this.item.groups && this.item.groups.length) || (this.item.tables && this.item.tables.length)) {
        return '';
      } else {
        return 'not-folder';
      }
    },
  },
};
</script>

<style scoped>
ul,
li {
  list-style-type: none;
  margin: 0;
}

.group-box {
  margin-left: 5px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.33rem 0.5rem;
  border-radius: 5px;
  border: 1px solid var(--bs-secondary);
  box-shadow: 0 0 5px var(--bs-gray-500);
  margin-bottom: 5px;
}

.not-folder {
  margin-left: 30px;
}
</style>
