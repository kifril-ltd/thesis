import { inject, reactive } from 'vue';
import { RelationFilterApi } from '@/api/relationFilter';

export const tableSymbol = Symbol('tables');
export const useStateTables = () => inject(tableSymbol);
export const createStateTables = () => {
    const state = reactive({
        tables: [],
    });

    const fetchTables = async () => {
        const { result } = await RelationFilterApi.getTables();
        if (result) state.tables.push(...result);
        return result;
    };

    return {
        fetchTables,
        state
    };
};

export const stateTables = createStateTables();
