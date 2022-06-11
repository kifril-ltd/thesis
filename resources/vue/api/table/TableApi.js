import { Api } from '@/api/Api';

class TableApi extends Api {
  static async getTable(tableId, data) {
    return this.get(`/api/table/${tableId}`, data);
  }

  static async createRow(tableId, data) {
    return this.post(`/api/table/${tableId}`, data);
  }

  static async changeRow(tableId, rowId, data) {
    return this.put(`/api/table/${tableId}/row/${rowId}`, data);
  }

  static async deleteRow(tableId, rowId) {
    return this.delete(`/api/table/${tableId}/row/${rowId}`);
  }

  static async deleteRows(tableId, rowIds) {
    return this.patch(`/api/table/${tableId}/row`, { rows: rowIds });
  }
}

export { TableApi };
