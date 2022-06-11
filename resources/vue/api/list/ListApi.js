import { Api } from '@/api/Api';

class ListApi extends Api {
  static async getLists(data) {
    return this.get(`/api/list`, data);
  }

  static async createList(data) {
    return this.post('/api/list', data);
  }

  static async changeList(listId, data) {
    return this.put(`/api/list/${listId}`, data);
  }

  static async deleteList(listId) {
    return this.delete(`/api/list/${listId}`);
  }

  static async createItem(listId, data) {
    return this.post(`/api/list/${listId}`, data);
  }

  static async changeItem(listId, itemId, data) {
    return this.put(`/api/list/${listId}/item/${itemId}`, data);
  }

  static async deleteItem(listId, itemId) {
    return this.delete(`/api/list/${listId}/item/${itemId}`);
  }
}

export { ListApi };
