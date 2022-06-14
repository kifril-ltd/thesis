<template>
  <div class="d-flex flex-column mt-3">
    <div class="item" v-for="(item, key) in summary" :key="key">
      <template v-if="item.columns && item.columns.length">
        <h5>{{ item.caption }}</h5>
        <div class="columns ms-3 d-flex flex-column">
          <p v-for="(col, id) in item.columns" :key="id">
            <template v-if="col.isChecked">
              {{ col.caption }}
            </template>
          </p>
        </div>
      </template>
    </div>
  </div>
</template>

<script>
export default {
  name: 'SummaryComponent',
  props: {
    summaryData: {
      type: Array,
      required: false,
    },
  },
  computed: {
      summary() {
          let result = [];
          for(let key = 0; key < this.summaryData.length; key++) {
              let columns = [];
              for(let i = 0; i < this.summaryData[key].columns.length; i++) {
                  if(this.summaryData[key].columns[i].isChecked) {
                      columns.push(this.summaryData[key].columns[i]);
                  }
              }
              if (columns && columns.length) {
                  result.push({
                      caption: this.summaryData[key].caption,
                      columns: columns,
                  })
              }
          }
          return result;
      }
  },
};
</script>

<style scoped></style>
