<template>
<div class="channeldata">
   <h2>RAW JSON</h2><br>
   <div>
       {{questions}}
   </div>
   <hr>
    <div v-for="question in questions" v-bind:key="question">
        <p>
            {{ question.values[0][0] }} <br>
            {{ question.values[1] }} <br>
            {{ question.values[2] }} <br>
            {{ question.values[3] }} <br>
            {{ question.values[4] }} <br>
        </p>
    </div>
</div>
</template>

<script>
import axios from "axios";

export default {
    name: 'TestSheet',
    components: {
    },
    mounted() {
        this.getData(this.api.baseUrl)
    },
    data() {
        return {
            questions: [],
            api: {
                baseUrl: "https://sheets.googleapis.com/v4/spreadsheets/1Qa2pQB__fbG2WpzDH0PZSdgkDU6pLIzsIcbvGep5zhk/values:batchGet?ranges=A1%3AE100&valueRenderOption=FORMATTED_VALUE&key=AIzaSyBesotaNgSaTUIhrSKjEaExdi-ksKInhoE",
            },
        };
    },
    methods: {
        getData(apiUrl) {
            axios.get(apiUrl).then((res) => {
                this.questions = res.data.valueRanges;
                console.log(this.questions)
            });
            // .catch(error => console.log(error));
        },
    },
};
</script>

