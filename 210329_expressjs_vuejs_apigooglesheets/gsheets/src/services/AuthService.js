import Api from '@/services/Api.js'

export default {
    updateD (newdata) {
        //Axios sends a post request at the updateleadswithint endpoint
        return Api().post('updateleadswithint', newdata)
    }
}
 