import { inject, reactive } from 'vue';
import { UserApi } from '@/api/user/UserApi';

export const userSymbol = Symbol('user');
export const useStateUser = () => inject(userSymbol);
export const createStateUser = () => {
  const state = reactive({
    user: null,
  });
  const fetchUser = async () => {
    const { result } = await UserApi.getUser();
    if (result) state.user = result;
    return result;
  };

  const logoutUser = async () => {
    const { result } = await UserApi.logout();
    if (result) state.user = null;
    return result;
  };

  const loginUser = async data => {
    const { result } = await UserApi.login(data);
    if (result) state.user = result;
    return result;
  };

  return { fetchUser, state, logoutUser, loginUser };
};

export const stateUser = createStateUser();
