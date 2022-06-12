import { Api } from '@/api/Api';

class RelationFilterApi extends Api {
    static async getTables() {
        return this.get(`/api/relfilter/entities`);
    }

    static async buildReport(data) {
        return this.post(`/api/relfilter/build`, data);
    }
}

export { RelationFilterApi };
