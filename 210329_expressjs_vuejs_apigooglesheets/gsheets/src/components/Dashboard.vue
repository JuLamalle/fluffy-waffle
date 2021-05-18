<template>
  <div class="col-md-10 sm-8" id="menu_admin_right" >
    <p id="dashboard_p" align="">DASHBOARD</p>

    <div class="contrainer-fluid" id="premier_block">
      <div class="row">
        <div class="col-md-12">
          <div class="container" id="container_premier_block">
            <p id="p_dash_title">Bonjour NOM DU CLIENT</p>
            <p id="p_dash_body">
              Vous avez x campagnes actives et x leads non traités
            </p>
          </div>
        </div>
        <div class="row">

          <!-- Résumé des leads -->
          <div class="col" id="troisieme_block">
            <p id="p_data_title">Résumé des leads</p>
            <div class="row">
              <div class="col-md-3" align="center" id="col_data_icon2">
                <img
                  id="img_data_icon3"
                  
                />
              </div>
              <div class="col-md-9" align="left" id="col_data_icon2">
                <p id="p_data_intit">Leads avec début d'intérêt</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-6" align="left">
                <p id="p_data_intit">Quantité</p>
              </div>
              <div class="col-md-4" align="left">
                <p id="p_data_number">{{datas_dashleads[0][2]}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-6" align="left">
                <p id="p_data_intit">Traités</p>
              </div>
              <div class="col-md-4" align="left">
                <p id="p_data_number">{{datas_dashleads[1][2]}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-6" align="left">
                <p id="p_data_intit">% traités</p>
              </div>
              <div class="col-md-4" align="left">
                <p id="p_data_number">{{datas_dashleads[2][2]}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-6" align="left">
                <p id="p_data_intit">% en attente</p>
              </div>
              <div class="col-md-4" align="left">
                <p id="p_data_number">{{datas_dashleads[3][2]}}</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3" align="center" id="col_data_icon2">
                <img
                  id="img_data_icon3"
                  
                />
              </div>
              <div class="col-md-9" align="left" id="col_data_icon2">
                <p id="p_data_intit">Leads sans intérêt immédiat</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-6" align="left">
                <p>Quantité</p>
              </div>
              <div class="col-md-4" align="left">
                <p id="p_data_number">{{datas_dashleads[4][2]}}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-6" align="left">
                <p id="p_data_intit">En attente de recontact</p>
              </div>
              <div class="col-md-4" align="left">
                <p id="p_data_number">{{datas_dashleads[5][2]}}</p>
              </div>
            </div>
          </div>
          <button v-on:click="submit">Submit</button>
        </div>
      </div>
    </div>


  </div>
</template>

<script>
const API_URL_DASHLEADS = "http://localhost:8888/dashleads";


export default {
data: () => ({
    datas_dashleads: [],

  }),

  mounted() {
    fetch(API_URL_DASHLEADS)
      .then((response) => response.json())
      .then((result_dashleads) => {
        this.datas_dashleads = result_dashleads;
      });


  },
  methods: {
    submit:function () {
      alert('Bonjour ' + this.newdata + ' ! '+this.placeholder)
    }
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap");

@media screen and (max-width: 3840px) and (max-height: 2160px) {
  #menu_admin_left {
    height: 100vh;
    background-color: #ffffff;
  }

  #menu_admin_right {
    height: 100%;
    background-color: rgba(233, 234, 232, 0.5);
  }

  #menu_admin_right2 {
    height: 100%;
    background-color: rgba(233, 234, 232, 0.5);
  }

  #btn_logout {
    border-radius: 12px;
    width: 180px;
    height: 40px;

    color: #ffffff;
    font-size: 13px;
    padding: 0 0 0 0;
    background-color: #00365f;
    border: 0px solid #005892;
    margin-top: 35vh;
  }

  #p_dashboard_menu {
    font-size: 130%;
    color: #00365f;
    vertical-align: middle;
    padding: 20% 0 0 5%;
  }
  #p_campagnes_menu,
  #p_leads_menu {
    font-size: 130%;
    color: #00365f;
    vertical-align: middle;
    padding: 10% 0 0 5%;
  }

  #img_dashboard_menu {
    width: 11%;
    padding: 15% 0 0 0;
    margin-left: 17%;
  }
  #img_campagnes_menu,
  #img_leads_menu {
    width: 11%;
    padding: 5% 0 0 0;
    margin-left: 17%;
  }

  #logo_left {
    padding: 20% 0 0 0;
    width: 80%;
  }

  #dashboard_p {
    font-size: 40px;
    color: #0099b3;
    padding: 5% 0 0 12.5%;
    font-family: "DM Serif Display", serif;
  }

  #create_workspace {
    margin-top: 50px;
    border-radius: 12px;
    width: 80%;
    height: 10%;
    color: #005892;
    font-size: 20px;
    background-color: rgba(233, 234, 232, 0.4);
    border: 0px solid #005892;
  }

  #today_p {
    font-size: 40px;
    color: #005892;
    padding: 0% 0 0 12.6%;
    font-family: "DM Serif Display", serif;
  }

  #premier_block {
    margin-top: -80px;
    margin-left: 180px;
    max-width: 60%;
    width: auto;
    border-radius: 12px;
  }

  #container_premier_block {
    margin-top: -160px;
    margin-left: 30px;
    margin-bottom: 60px;
    width: 260px;
    font-size: 100%;
    line-height: 25px;
  }

  #second_block {
    background-color: #ffffff;
    margin-top: 40px;
    margin-left: 29px;
    height: 92.3%;
    width: 858px;
    border-radius: 12px;
  }

  #troisieme_block {
    background-color: #ffffff;
    margin-top: 40px;
    margin-left: 17px;
    margin-right: 17px;
    max-height: 100%;
    height: 435px;
    border-radius: 12px;
  }

  #btn_boutique {
    height: 150px;
    margin-top: -115px;
    margin-left: -120px;
  }

  #create_workspace_1 {
    padding: 20px 0 0 0;
    margin-left: 40%;
    text-align: left;
    color: #005892;
    font-size: 17px;
  }

  #p_dash_title {
    color: #005892;
    font-size: 19px;
  }
  #p_dash_body {
    color: #00365f;
  }

  #col_data_icon {
    height: 30px;
  }

  #col_data_icon2 {
    height: 50px;
  }

  #img_data_icon {
    width: 40%;
    margin-top: 35px;
  }

  #img_data_icon2 {
    width: 40%;
    margin-top: 4px;
  }

  #img_data_icon3 {
    width: 55%;
    margin-top: -3px;
    margin-left: 30px;
  }
  #p_data_title {
    color: #0099b3;
    font-size: 20px;
    padding: 4% 0 3% 4%;
  }

  #p_data_intit {
    color: #00365f;
    font-size: 16px;
  }
  #p_data_intit2 {
    margin-top: -15px;
    margin-bottom: 25px;
    color: #00365f;
    font-size: 16px;
  }
  #p_data_number {
    color: #0099b3;
    font-size: 16px;
    display: inline;
  }

  #p_data_number2 {
    margin-top: -15px;
    margin-bottom: 25px;
    color: #52adc0;
    font-size: 16px;
  }
}
</style>