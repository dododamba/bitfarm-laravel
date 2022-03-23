import ApiService from "../../../api/api";
import JwtService from "../../../services/jwt.service";
import {API_PICT} from "../../../services/pict.service";

const state = {
    pompes: [],
};

const getters = {
    getpompes : state =>  state.pompes,
  
};

const mutations = {
   
    setpompes(state,data) {
        state.pompes = data;
    },
 

};

const actions = {
   
    fetch(context){
        if (JwtService.getToken()) {
            ApiService.setHeader();
            ApiService.get("api/pompes")
                .then((response) => {
                    console.log(response)
                    context.commit("setpompes",response.data.items);
                });
        } else {

        }
    },
    createpompes(context,forms){
        return new Promise((resolve, reject) => {
            if (JwtService.getToken()) {
                ApiService.setHeader();
              
                ApiService.post("api/pompes", forms)
                .then(({data}) => {
                    context.commit("setSuccessMessageResponse", data.message);
            
                    resolve(data);
                })
                .catch(({response}) => {
            
                    if(response.status === 422) {
            
                        context.commit("setFailedMessageResponse", data.message);
                    }
                    reject(response);
                });

            } else {
    
            }
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
