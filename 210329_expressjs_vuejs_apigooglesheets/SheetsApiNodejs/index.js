const express = require('express');
const cors = require('cors');

const app = express();

app.use(cors());
app.use(express.json());
app.use(express.urlencoded({
  extended: true
}));

const {google} = require('googleapis');
const keys = require('./keys.json');

// Instance Google Authorization client and scope
const client = new google.auth.JWT(
    keys.client_email,
    null,
    keys.private_key,
    ['https://www.googleapis.com/auth/spreadsheets']

);

// Assign token to api calls
client.authorize(function(err,tokens){
    if(err){
        console.log(err);
        return;
    } else {
        console.log('Connected to Google Api !');
    }

}); 

//Instance of Google Sheets API
const gsapi = google.sheets({version:'v4', auth: client});

app.get("/dashcampagne", async (req, res) => {

    // GSheet Donnees Campagne for Dashboard
    const opt = {
        spreadsheetId : '1kSr9QeyB9OasX8Z7PT8EKvgTaP8N2fo2Ndl73LbzKp0',
        range : 'RÉSUMÉ!E3:G15',
    };

    let data = await gsapi.spreadsheets.values.get(opt);

    res.send(data.data.values);

});

app.get("/campagnes2021", async (req, res) => {

    // GSheet Donnees Campagne 2021
    const opt = {
        spreadsheetId : '1kSr9QeyB9OasX8Z7PT8EKvgTaP8N2fo2Ndl73LbzKp0',
        range : 'DONNEES CAMPAGNES 2021 !A3:BB',
        majorDimension: "COLUMNS",
    };

    let data = await gsapi.spreadsheets.values.get(opt);

    res.send(data.data.values);

});

app.get("/campagnes2020", async (req, res) => {

    // GSheet Donnees Campagne 2020
    const opt = {
        spreadsheetId : '1kSr9QeyB9OasX8Z7PT8EKvgTaP8N2fo2Ndl73LbzKp0',
        range : 'DONNEES CAMPAGNES 2020 !A3:BB',
        majorDimension: "COLUMNS",
    };

    let data = await gsapi.spreadsheets.values.get(opt);

    res.send(data.data.values);

});

app.get("/dashleads", async (req, res) => {

    // GSheet Suivi des Leads for Dashboard
    const opt = {
        spreadsheetId : '1fd1IVi0n-YT2U0aIruxde66WbT7m0RzZ0hLH5EunDtw',
        range : 'Résumé!A2:C7',
    };

    let data = await gsapi.spreadsheets.values.get(opt);

    res.send(data.data.values);

});

app.get("/leadswithint", async (req, res) => {

    // GSheet Suivi des Leads avec debut d interet 
    const opt = {
        spreadsheetId : '1fd1IVi0n-YT2U0aIruxde66WbT7m0RzZ0hLH5EunDtw',
        range : 'Leads avec début d\'intérêt!A:M',
    };

    let data = await gsapi.spreadsheets.values.get(opt);

    res.send(data.data.values);

});

app.post("/updateleadswithint", async (req, res) => {
    // GSheet Suivi des Leads avec debut d interet 
    const opt = {
        spreadsheetId : '1fd1IVi0n-YT2U0aIruxde66WbT7m0RzZ0hLH5EunDtw',
        range : 'Leads avec début d\'intérêt!A1',
        valueInputOption: 'USER_ENTERED',
        resource: { values: req.body.newdata }
    };

    await gsapi.spreadsheets.values.update(opt);

    res.send({
        message: `Successfully submitted ${req.body.row}!`,
    });
    console.log(res.message);

});

app.get("/leadsnoint", async (req, res) => {

    // GSheet Suivi des Leads sans interet immediat 
    const opt = {
        spreadsheetId : '1fd1IVi0n-YT2U0aIruxde66WbT7m0RzZ0hLH5EunDtw',
        range : 'Leads sans intérêt immédiat!A:L',
    };

    let data = await gsapi.spreadsheets.values.get(opt);

    res.send(data.data.values);

});

app.get("/leadsactu", async (req, res) => {

    // GSheet Suivi des Leads Actu des Donnees 
    const opt = {
        spreadsheetId : '1fd1IVi0n-YT2U0aIruxde66WbT7m0RzZ0hLH5EunDtw',
        range : 'Actu des données!A:B',
    };

    let data = await gsapi.spreadsheets.values.get(opt);

    res.send(data.data.values);

});




app.listen(8888,(req, res) => console.log("Running on http://localhost:8888/"));