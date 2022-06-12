<template>
  <energy-modal ref="modal">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">Выбор отчета</h5>
      <button type="button" class="btn-close" @click="closeModal" aria-label="Close"></button>
    </div>
    <div class="modal-body p-3">
      <div class="d-flex flex-column justify-content-center">
        <energy-select @change-value="changeType" class="me-3 mt-3" :hints="reportTypes"></energy-select>
        <!-- Здесь должен быть список котельных -->
        <template v-if="type === 'passport'">
          <energy-select @change-value="changeBoiler" class="me-3 mt-3" :hints="tmpBoiler"></energy-select>
        </template>

        <template v-if="type === 'expenditures'">
          <energy-select @change-value="changeMunicipality" class="me-3 mt-3" :hints="tmpMunicipality"></energy-select>
          <div class="d-flex mt-3 align-items-center">
            <energy-checkbox @change="changeCheckbox" class="me-1"> </energy-checkbox>
            <p class="ms-2 mb-0">Сформировать по области</p>
          </div>

          <div class="d-flex mt-3 justify-content-start">
            <energy-input @change-text="changeStartDate" placeholder="Год начала" class="w-25 me-3"></energy-input>
            <energy-input @change-text="changeEndDate" placeholder="Год окончания" class="w-25"></energy-input>
          </div>

          <h4>Типы затрат:</h4>

          <div class="d-flex mt-3">
            <energy-checkbox @change="changeEnergy" class="me-1"> </energy-checkbox>
            <p class="ms-2 mb-0">Закупка энергоресурсов</p>
          </div>

          <div class="d-flex mt-3">
            <energy-checkbox @change="changeSalary" class="me-1"> </energy-checkbox>
            <p class="ms-2 mb-0">Зарплата персонала</p>
          </div>

          <div class="d-flex mt-3">
            <energy-checkbox @change="changeOperational" class="me-1"> </energy-checkbox>
            <p class="ms-2 mb-0">Эксплутационные затраты</p>
          </div>
        </template>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" @click="closeModal" class="btn btn-danger closebtn">Закрыть</button>
      <energy-button v-if="checkBoiler || checkExpenditures" @click="makeReport" class="btn-success"
        >Сформировать отчет</energy-button
      >
      <energy-button v-else disabled class="btn-success">Сформировать отчет</energy-button>
    </div>
  </energy-modal>
</template>

<script>
import { EnergyButton, EnergyCheckbox, EnergyInput, EnergyModal, EnergySelect } from '@/ui';

export default {
  name: 'ReportModal',
  components: {
    EnergyModal,
    EnergyButton,
    EnergySelect,
    EnergyCheckbox,
    EnergyInput,
  },
  data() {
    return {
      reportTypes: [
        {
          caption: '',
          value: '',
        },
        {
          caption: 'Отчет по затратам',
          value: 'expenditures',
        },
        {
          caption: 'Паспорт котельной',
          value: 'passport',
        },
      ],
      tmpBoiler: [
        {
          caption: '',
          value: '',
        },
        {
          caption: 'Котельная 1',
          value: 'boiler 1',
        },
        {
          caption: 'Котельная 2',
          value: 'boiler 2',
        },
      ],
      tmpMunicipality: [
        {
          caption: '',
          value: '',
        },
        {
          caption: 'Муниципалитет 1',
          value: 'mun1',
        },
        {
          caption: 'Муниципалитет 1',
          value: 'mun2',
        },
      ],
      boiler: null,
      type: null,
      checkbox: false,
      municipality: null,
      startYear: null,
      endYear: null,
      types: {
        energy: false,
        salary: false,
        operational: false,
      },
      report: {},
      errors: [],
    };
  },
  methods: {
    closeModal() {
      this.$refs.modal.closeModal();
    },
    openModal() {
      this.$refs.modal.openModal();
    },
    makeReport() {
      if (this.type === 'passport') {
        this.report = {
          reportType: 'passport',
          boilerRoomId: this.boiler,
        };
      } else if (this.type === 'expenditures') {
        this.report = {
          reportType: 'expenditures',
          municipality: '',
          startYear: this.startYear,
          endYear: this.endYear,
          types: {
            energy: this.types.energy,
            salary: this.types.salary,
            operational: this.types.operational,
          },
        };
        if (this.checkbox) {
          this.report.municipality = '';
        } else {
          this.report.municipality = this.municipality;
        }
      }
      console.log(this.report);
    },
    changeCheckbox(flag) {
      this.checkbox = flag;
    },
    changeType(type) {
      this.type = type;
    },
    changeBoiler(boiler) {
      this.boiler = boiler;
    },
    changeMunicipality(municipality) {
      this.municipality = municipality;
    },
    changeStartDate(startYear) {
      this.startYear = startYear;
    },
    changeEndDate(endYear) {
      this.endYear = endYear;
    },
    changeEnergy(energy) {
      this.types.energy = energy;
    },
    changeSalary(salary) {
      this.types.salary = salary;
    },
    changeOperational(operational) {
      this.types.operational = operational;
    },
  },
  computed: {
    checkBoiler() {
      if (this.type === 'passport' && this.boiler && this.boiler !== '') {
        return true;
      } else return false;
    },
    checkExpenditures() {
      if ((this.checkbox || this.municipality) && this.type === 'expenditures' && this.startYear && this.endYear) {
        return true;
      } else return false;
    },
  },
};
</script>

<style scoped>
.modal-body {
  overflow-y: auto;
}
</style>
