import { Api } from '@/api/Api';

class ReportApi extends Api {
    static async getMunicipalities() {
        return this.get(`/api/report/municipality`);
    }

    static async getBoilerRooms(data) {
        return this.get(`/api/report/boilerrooms/`, data);
    }

    static async buildReport(data) {
        return this.post(`/api/report/build`, data);
    }
}

export { ReportApi };
