<!-- Our basic Javascript inside this component. The component was used just because it is the default way laravel sets up Vue-->
<!-- For our AJAX calls We use the axios library because it is already included in laravel -->

<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                      <div class="row">
                      <div class="col-9">
                        <h3>Simple Currency Converter</h3>
                      </div> <!-- here ends col-10 -->
                      <div class="col-3">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_currency_modal">manage currencies</button>
                      </div> <!-- here ends col-2 -->
                    </div> <!-- here ends row -->
                  </div><!-- here ends card-header -->
                    <div class="card-body">

                      <form>
<!-- We enter the currency from which we are converting. We use the array in our db to populate the select list with v-for directive. If the user enters a new currency we call afunction to calculate the ratio  -->
                        <label for="currency_from">Convert FROM</label>
                        <select id="currency_from" class="form-control" v-model="currency_from" @change="searchRatio()" name="currency_from">
                          <option v-for="currency in currencies" :value="currency.id">{{ currency.name }}</option>
                        </select>

<!-- We enter the desired amount to be converted -->
                        <label for="ammount" class="mt-3">Amount</label>
                        <input id="amount" class="form-control" type="number" name="amount" v-model="amount" @change="searchRatio()" required="required">

<!-- We choose the currency to which we are converting to We use the array in our db to populate the select list -->
                        <label for="currency_to" class="mt-3">Convert TO</label>
                        <select id="currency_to" class="form-control" v-model="currency_to" @change="searchRatio()" name="currency_to">
                          <option v-for="currency in currencies" :value="currency.id">{{ currency.name }}</option>
                        </select>

<!-- The recorded ratio appears here if existing. We can enter a new value and it will be updated dynamically-->
<!-- Wecan choose to persist a new value to our database -->
                        <label for="ratio" class="mt-3">Ratio</label>
                        <div class="row form-group">
                          <div class="col">
                            <input id="amount" class="form-control" type="number" name="ratio" step=".1" v-model="ratio" @change="ratioChanged" required="requird">
                          </div>
                          <div class="col ">
                            <button v-if="ratio_changed && currencies_not_same" class="btn btn-sm btn-warning form-control" name="set_ratio" id="set_ratio" type="submit" v-on:click.prevent="setRatio">set as new default ratio</button>
                          </div><!-- here ends col -->
                        </div><!-- here ends row -->

                      </form>
                    </div> <!-- here ends card-body -->

                    <div class="card-footer">
                      <p class="py-3">Results</p>
                      <p>{{ results }}</p>
                      <p class="text-danger"><small>{{ message }}</small></p>
                    </div> <!-- here ends card-footer -->

                </div> <!-- here ends card -->
            </div> <!-- here ends col -->
        </div> <!-- here ends row -->

<!-- a standard bootstrap modal to manage currencies. For simplicity reasons and because there is not really much to modify, edit & update have been omitted -->
        <div class="modal fade" id="add_currency_modal" tabindex="-1" role="dialog" aria-labelledby="add_currency_modal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="add_currency_modal_label">Manage Currencies</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div><!-- here ends modal-header -->

            <div class="modal-body">
              <table class="table">
                <tr v-for="currency in currencies">
                  <td>{{ currency.name}}</td>
                  <td>
                    <form>
                      <input type="hidden" name="to_be_deleted" v-bind:value="currency.id">
                      <button class="btn btn-sm btn-danger" type="button" name="delete_currency" v-on:click="deleteCurrency(currency.id)">delete</button>
                    </form>
                  </td>
                </tr>
              </table>
            </div><!-- here ends modal-body -->

            <div class="modal-footer">
              <form >
                <div class="row">
                  <div class="col">
                    <input type="text" name="new_currency" v-model="new_currency" placeholder="enter a new currency" class="form-control" required="required">
                  </div><!-- here ends col -->
                  <div class="col">
                    <button type="button" class="btn btn-primary" v-on:click="addCurrency">add as new currency</button>
                  </div><!-- here ends col -->
                </div><!-- here ends row -->
              </form>

            </div><!-- here ends modal-footer -->
          </div><!-- here ends modal-content -->
        </div><!-- here ends modal-dialogue -->
      </div><!-- here ends modal -->

    </div> <!-- here ends container -->
</template>

<script>
import axios from 'axios';
    export default {
// since we are in a component, our data must be a function
        data: function() {
          return {
            currencies: '',
            currency_from: '',
            currency_to: '',
            new_currency: '',
            currencies_not_same: false,
            ratio: '',
            amount: 1,
            results: '',
            ratio_changed: false,
            message: ''
          }
        },
        computed: {
// a computed property to treat negative numbers as positive
          returnAbs: function() {
            return Math.abs(this.amount)
          }
        },
        methods: {
// a method to check for the ratio_changed property
          ratioChanged: function() {
            if (this.ratio != null || this.radio != '') {
              this.ratio_changed = true;
            } else {
              this.ratio == false;
            }
          },
// a method to check for the currencies_not_same property
            currenciesNotSame: function() {
              if (this.currency_from == this.currency_to) {
                this.currencies_not_same = false;
              } else {
                this.currencies_not_same = true;
              }
            },
// a method to reset properties
              resetProperties: function() {
                this.results = '';
                this.ratio = '';
                this.ratio_changed = false;
                this.currenciesNotSame();
              },
// a method to produce a list of all currencies
          currenciesList: function() {
            axios.get('http://localhost:8000/api/currencies')
            .then((res) => {
              this.currencies = res.data;
            }).catch((err) => {
              this.message = err.message;
            });
          },
// a method to fetch a currencies pair ratio
          searchRatio: function() {
// check if both fields are filled
            if (this.currency_from != '' && this.currency_to != '') {
// check if fields contain the same currency
              if (this.currency_from == this.currency_to) {
                this.message = 'A currency cannot be converted to itself. Please select a different pair of currencies.'
                this.resetProperties();
              } else {
// if everything is fine perform the request
                this.currencies_not_same = true;
                axios.post('http://localhost:8000/api/ratios', {
                    currency_from: this.currency_from,
                    currency_to: this.currency_to,
                  })
// if promise resolved assign ratio to property
                  .then((res) => {
                    this.ratio = res.data.ratio;
// but if the response is empty prompt for a new default ratio
                    if (this.ratio == null || this.ratio == '') {
                      this.message = 'There is no default ratio for the current pair of currencies. Please enter a default ratio.'
                      this.results = '';
// if not empty perform the conversion and reset properties
                      } else {
                        let product = this.returnAbs * this.ratio;
                        this.results = product.toFixed(4);
                        this.ratio_changed = false;
                        this.message = '';
                    }
                  }).catch((err) => {
                    this.message = err.message;
                    this.resetProperties();
                  });
              }
            }
          },
// a method to remove currencies from db
          deleteCurrency: function(id) {
            axios.delete('http://localhost:8000/api/currencies' + id)
            .then((res) => {
              this.message = 'Currency deleted';
            }).catch((err) => {
              this.message = err.message;
              this.resetProperties();
            });
            this.currenciesList();
          },
// a method to insert/update currencies ratios
          setRatio: function() {
              axios.post('http://localhost:8000/api/ratios/set', {
                currency_from: this.currency_from,
                currency_to: this.currency_to,
                ratio: this.ratio
              }).then((res) => {
                this.message = 'Ratio set';
              }).catch((err) => {
                this.message = err.message;
                this.resetProperties();
              });
              let product = this.returnAbs * this.ratio;
              this.results = product.toFixed(4);
              this.ratio_changed = false;
          },
// a method to add new currencies
          addCurrency: function() {
            axios.post('http://localhost:8000/api/currencies', {
              name: this.new_currency
            }).then((res) => {
              this.message = 'Currency added';
            }).catch((err) => {
              this.message = err.message;
              this.resetProperties();
            });
            this.new_currency = '';
            this.currenciesList();
          }
        },
        mounted() {
// As soon as the component is mounted we retrieve all currencies from our Database and pass it to the respective property
          this.currenciesList();
        }
    }
</script>
