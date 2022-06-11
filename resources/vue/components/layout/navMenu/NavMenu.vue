<template>
  <div
    class="offcanvas offcanvas-start"
    data-bs-scroll="true"
    data-bs-backdrop="false"
    tabindex="-1"
    id="nav"
    aria-labelledby="nav"
  >
    <div class="offcanvas-header">
      <!-- TODO title -->
      <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Структура ИС ТЭК</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" v-if="navElements.length">
      <div id="collapseDVR3">
        <div class="tree">
          <ul>
            <li>
              <div class="energy-span">
                <span>
                  <i class="fa fa-folder-open"></i>
                </span>
                Теплоэнергетика
              </div>
              <ul>
                <li v-for="(elm1, key1) in navElements" :key="key1">
                  <div class="energy-span">
                    <span>
                      <i v-if="elm1.children_structures.length" class="fa-solid fa-circle-minus"></i>
                    </span>
                    <router-link :to="{ name: 'table', params: { tableId: elm1.structure_id } }">
                      {{ elm1.caption }}
                    </router-link>
                  </div>
                  <ul>
                    <li v-for="(elm2, key2) in elm1.children_structures" :key="key2">
                      <div class="energy-span">
                        <span> <i v-if="elm2.children_structures.length" class="fa-solid fa-circle-minus"></i> </span
                        ><router-link :to="{ name: 'table', params: { tableId: elm2.structure_id } }">
                          {{ elm2.caption }}
                        </router-link>
                      </div>
                      <ul>
                        <li v-for="(elm3, key3) in elm2.children_structures" :key="key3">
                          <div class="energy-span">
                            <span>
                              <i v-if="elm3.children_structures.length" class="fa-solid fa-circle-minus"></i>
                            </span>
                            <router-link :to="{ name: 'table', params: { tableId: elm3.structure_id } }">
                              {{ elm3.caption }}
                            </router-link>
                          </div>
                          <ul>
                            <li v-for="(elm4, key4) in elm3.children_structures" :key="key4">
                              <div class="energy-span">
                                <span>
                                  <router-link :to="{ name: 'table', params: { tableId: elm4.structure_id } }">
                                    {{ elm4.caption }}
                                  </router-link>
                                </span>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <div class="energy-span">
                <span>
                  <i class="fa fa-folder-open"></i>
                </span>
                Электроэнергетика
              </div>
            </li>
            <li>
              <div class="energy-span">
                <span>
                  <i class="fa fa-folder-open"></i>
                </span>
                Газоснабжение
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import $ from 'jquery';
import { menuSymbol, userSymbol } from '@/store';

export default {
  name: 'NavMenu',
  inject: {
    stateMenu: {
      from: menuSymbol,
    },
    userState: {
      from: userSymbol,
    },
  },
  async created() {
    if (this.user) await this.stateMenu.fetchMenu();

    $(function () {
      $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Скрыть ветку');
      $('.tree li.parent_li > .energy-span span').on('click', function (e) {
        var children = $(this).parent('.energy-span').parent('li.parent_li').find(' > ul > li');
        if (children.is(':visible')) {
          children.hide('fast');
          $(this)
            .attr('title', 'Раскрыть ветвь')
            .find(' > i')
            .addClass('fa-circle-plus')
            .removeClass('fa-circle-minus');
        } else {
          children.show('fast');
          $(this).attr('title', 'Скрыть ветку').find(' > i').addClass('fa-circle-minus').removeClass('fa-circle-plus');
        }
        e.stopPropagation();
      });
    });
  },
  computed: {
    navElements() {
      return this.stateMenu.state.menu;
    },
    user() {
      return this.userState.state.user;
    },
  },
};
</script>

<style scoped>
.offcanvas {
  width: 490px;
}

.tree {
  min-height: 20px;
  margin-bottom: 20px;
  background-color: #fbfbfb;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}

.tree li {
  list-style-type: none;
  margin: 0;
  padding: 10px 5px 0 5px;
  position: relative;
}

.tree li::before,
.tree li::after {
  content: '';
  left: -20px;
  position: absolute;
  right: auto;
}

.tree li::before {
  border-left: 1px solid #999;
  bottom: 50px;
  height: 100%;
  top: 0;
  width: 1px;
}

.tree li::after {
  border-top: 1px solid #999;
  height: 20px;
  top: 30px;
  width: 25px;
}

.tree li .energy-span {
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border: 1px solid #999;
  border-radius: 5px;
  display: inline-block;
  padding: 3px 8px;
  text-decoration: none;
}

.tree li.parent_li > span {
  cursor: pointer;
}

.tree > ul > li::before,
.tree > ul > li::after {
  border: 0;
}

.tree li:last-child::before {
  height: 30px;
}

.tree li.parent_li > span:hover,
.tree li.parent_li > span:hover + ul li span {
  background: #eee;
  border: 1px solid #94a0b4;
  color: #000;
}

a {
  text-decoration: none;
  color: black;
}

a:hover,
a:focus {
  text-decoration: none;
}

span {
  margin-right: 0.33rem;
}

span i {
  cursor: pointer;
}

.energy-span {
  cursor: pointer;
}
</style>
