import { Api } from '@/api/Api';

class RelationFilterApi extends Api {
    static async getTables() {
        return this.get(`/api/relfilter/entities`);
    }

    static async buildReport(data) {
        return this.post(`/api/relfilter/build`, data);
    }

    static async save(data) {
        return this.post(`/api/relfilter/build`, data);
    }

    static async getRelationFilter(id, data) {
        return this.get(`/api/relfilter/${id}`, data);
    }

    static async getRelationFilters(data) {
        return this.get(`/api/relfilter`, data);
    }
}

export { RelationFilterApi };
