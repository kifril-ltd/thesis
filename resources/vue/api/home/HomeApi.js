import { Api } from '@/api/Api';

class HomeApi extends Api {
  static async getMenu() {
    return this.get('/api/menu');
  }
}

export { HomeApi };
