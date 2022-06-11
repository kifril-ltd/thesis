import { Api } from '@/api/Api';

/**
 * @typedef User
 * @type {object}
 * @property {string} user_id
 * @property {string} first_name
 * @property {string} last_name
 * @property {string} middle_name
 * @property {string} login
 * @property {string} email
 * @property {number} phone
 * @property {string|null} created_at
 * @property {string|null} updated_at
 * @property {string|null} deleted_at
 * @property {string|null} activated_at
 */

class UserApi extends Api {
  /**
   * Залогиниться
   * @param { login: string, password: string } data
   * @returns {Promise<{ result: User }>}
   */
  static async login(data) {
    return this.post(`/api/user/login`, data);
  }

  /**
   * Получить пользователя
   * @returns { Promise<{ result: User }> }
   */
  static async getUser() {
    return this.get('/api/user');
  }

  static async getUsers() {
    return this.get('/api/user/list');
  }

  /**
   * Выход
   * @returns { Promise<{ result: boolean }> }
   */
  static async logout() {
    return this.get('/api/user/logout');
  }
}

export { UserApi };
