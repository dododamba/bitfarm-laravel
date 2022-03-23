import ApiService from "../../../api/api";
import JwtService from "../../../services/jwt.service";
import {API_PICT} from "../../../services/pict.service";

const state = {
    sites: [],
};

const getters = {
    getsites : state =>  state.sites,
  
};

const mutations = {
   
    setsites(state,data) {
        state.sites = data;
    },
 

};

const actions = {
   
    fetch(context){
        if (JwtService.getToken()) {
            ApiService.setHeader();
            ApiService.get("api/sites")
                .then((response) => {
                    console.log(response)
                    context.commit("setsites",response.data.items);
                });
        } else {

        }
    },
    createsites(context,forms){
        return new Promise((resolve, reject) => {
            ApiService.post("api/sites/store", forms)
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
