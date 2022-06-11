import { inject, reactive } from 'vue';
import { HomeApi } from '@/api';

export const menuSymbol = Symbol('menu');
export const useStateMenu = () => inject(menuSymbol);
export const createStateMenu = () => {
  const state = reactive({
    menu: [],
  });

  function* generatorChildrens(menuElements) {
    for (const menu of menuElements) {
      yield menu;
      if (menu.children_structures) yield* generatorChildrens(menu.children_structures);
    }
  }

  const fetchMenu = async () => {
    const { result } = await HomeApi.getMenu();
    if (result) state.menu = result;
  };
  return {
    fetchMenu,
    state,
    get allMenuElements() {
      return [...generatorChildrens(state.menu)];
    },
  };
};

export const stateMenu = createStateMenu();
