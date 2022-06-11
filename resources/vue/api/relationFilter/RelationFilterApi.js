import { Api } from '@/api/Api';

class RelationFilterApi extends Api {
    static async getTables() {
        return this.get(`/api/relfilter/entities`);
    }
}

export { RelationFilterApi };
