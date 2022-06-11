import { inject, reactive } from 'vue';
import { ListApi, UserApi } from '@/api';

export const listSymbol = Symbol('list');
export const useStateList = () => inject(listSymbol);
export const createStateList = () => {
  const state = reactive({
    list: new Map(),
    users: null,
  });

  const fetchForceList = async listIds => {
    if (!listIds.length) return [];

    const { result } = await ListApi.getLists({ listIds });
    if (result) {
      result.forEach(listItem => {
        state.list.set(listItem.structure_list_id, listItem);
      });
    }

    return result;
  };

  const fetchList = async listIds => {
    const filteredId = listIds.filter(id => !state.list.has(id));
    return await fetchForceList(filteredId);
  };

  const fetchForceUsers = async () => {
    const { result } = await UserApi.getUsers();
    if (result) state.users = result;
    return result;
  };

  const fetchUsers = async () => {
    if (state.users) return state.users;
    else return await fetchForceUsers();
  };

  const getList = listId => {
    if (state.list.has(listId)) {
      return state.list.get(listId);
    } else return null;
  };

  const getListItem = (listId, itemId) => {
    if (state.list.has(listId)) {
      const list = state.list.get(listId);
      return list.items.find(item => item.id === itemId);
    } else return null;
  };

  return { fetchForceList, fetchList, fetchForceUsers, fetchUsers, getList, getListItem, state };
};

export const stateList = createStateList();
