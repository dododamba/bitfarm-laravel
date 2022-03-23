import ApiService from "../../../api/api";
import JwtService from "../../../services/jwt.service";
import {API_PICT} from "../../../services/pict.service";

const state = {
    maintenances: [],
};

const getters = {
    getmaintenances : state =>  state.maintenances,
  
};

const mutations = {
   
    setmaintenances(state,data) {
        state.maintenances = data;
    },
 

};

const actions = {
   
    fetch(context){
        if (JwtService.getToken()) {
            ApiService.setHeader();
            ApiService.get("api/maintenances")
                .then((response) => {
                    context.commit("setmaintenances",response.data.items);
                });
        } else {

        }
    },
    createmaintenances(context,forms){
        return new Promise((resolve, reject) => {
            ApiService.post("api/maintenances/store", forms)
                .then(({data}) => {
                    context.commit("setArticleAdded", true);
                    context.commit("setSuccessMessageResponse", data.message);

                    resolve(data);
                })
                .catch(({response}) => {

                    if(response.status === 422) {

                        context.commit("setArticleAdded", false);
                        context.commit("setFailedMessageResponse", data.message);
                    }
                    reject(response);
                });
        });
    }
};

export default {
    namespaced: true,
    getters,
    actions,
    mutations,
    state
}
