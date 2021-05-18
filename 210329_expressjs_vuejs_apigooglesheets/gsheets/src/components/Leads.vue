<template>
  <div class="col-md-10 sm-8 overflow-auto" id="menu_admin_right">
    <div id="second_block">
      <table class="table">
        <thead>
          <tr>
            <th
              scope="col"
              v-for="data_1 in datas_leadswithint2"
              v-bind:key="data_1"
            >
              {{ data_1[0] }}
            </th>
          </tr>
        </thead>
        <tbody>
          <tr
            v-for="(data_2, rowIndex) in datas_leadswithint"
            v-bind:key="rowIndex"
          >
            <td
              v-for="(data_2_2, columnIndex) in data_2"
              v-bind:key="columnIndex"
            >
              <div
                v-if="
                  columnEditingIndex == columnIndex &&
                  rowEditingIndex == rowIndex
                "
              >
                <textarea
                  v-model="updatedData"
                  placeholder="Editing.."
                  @keyup.enter="updateData(rowIndex, columnIndex)"
                  @keyup.esc="untarget()"
                ></textarea>
              </div>
              <div v-else @click="setToEditing(rowIndex, columnIndex)">
                {{ data_2_2 }}
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
const API_URL_LEADSWITHINT = "http://localhost:8888/leadswithint";
const API_URL_LEADSWITHINT2 = "http://localhost:8888/leadswithint2";

// const API_URL_DASHCAMPAGNE = "http://localhost:8888/dashcampagne";
import AuthService from '@/services/AuthService.js'
export default {
  data: () => ({
    rowEditingIndex: null,
    columnEditingIndex: null,
    updatedData: "",
    datas_leadswithint: [],
    datas_leadswithint2: [],
    testrow: "testtrow",
    testcol: "testtcol",

    // datas_dashcampagne: [],
  }),

  mounted() {
    fetch(API_URL_LEADSWITHINT)
      .then((response) => response.json())
      .then((result_leadswithint) => {
        this.datas_leadswithint = result_leadswithint;
      });

    fetch(API_URL_LEADSWITHINT2)
      .then((response) => response.json())
      .then((result_leadswithint2) => {
        this.datas_leadswithint2 = result_leadswithint2;
      });

    //   fetch(API_URL_DASHCAMPAGNE)
    // .then((response) => response.json())
    // .then((result_dashcampagne) => {
    //   this.datas_dashcampagne = result_dashcampagne;
    // });
  },
  methods: {
    setToEditing(rowIndex, columnIndex) {
      this.rowEditingIndex = rowIndex;
      this.columnEditingIndex = columnIndex;
    },
    async updateData(rowIndex, columnIndex){
      this.datas_leadswithint[rowIndex][columnIndex] = this.updatedData;
      let resp = await AuthService.updateD({newdata:this.datas_leadswithint});
      console.log("Coucou"+resp);
      console.log(this.datas_leadswithint);
    },
    // async updateData(rowIndex, columnIndex){
    //   try {
    //   this.datas_leadswithint[rowIndex][columnIndex] = this.updatedData;
    //   let resp = await AuthService.updateD({row: this.testrow, colonne: this.testcol});
    //   console.log("Coucou"+resp.data);
    //   console.log(this.datas_leadswithint);
    //   } catch (error) {
    //     console.log(error.response.data.error)
    //   }
    // },
    untarget() {
      this.rowEditingIndex = null;
      this.columnEditingIndex = null;
    }
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap");

#menu_admin_right {
  height: 100vh;
  background-color: rgba(233, 234, 232, 0.5);
}

#second_block {
  background-color: #ffffff;
  margin-top: 60px;
  height: auto;
  width: auto;
  border-radius: 12px;
}

#btn_plus {
  height: 150px;
  margin-top: -115px;
  margin-left: -90px;
}

.thead {
  height: auto;
  width: auto;
}

th {
  background-color: #addadb;
  color: #00365f;
  font-size: 12px;
  border-bottom: 1px solid #00365f;
  vertical-align: middle;
  padding: 0.3rem;
}

th:first-child {
  border-top-left-radius: 12px;
}

th:last-child {
  border-top-right-radius: 12px;
}

td {
  border: 1px solid #00365f;
  color: #00365f;
  font-size: 12px;
  vertical-align: middle;
  padding: 0.2rem;
}

.table thead th {
  border-bottom: 0px solid #00365f;
}
tr:nth-child(2n + 1) {
  border-bottom: 1px solid rgba(173, 218, 219, 1);
}

tr:nth-child(2n + 2) {
  background: rgba(173, 218, 219, 0.4);
}

#edit_dashboard,
#pause_dashboard,
#del_dashboard {
  display: inline;
  height: 35px;
}

textarea {
  width: 100%;
  height: 100%;
}

@media screen and (max-width: 600px) {
  #graphique_01 {
    visibility: hidden;
    display: none;
  }
}
</style>

