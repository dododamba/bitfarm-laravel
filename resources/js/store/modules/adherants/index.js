import ApiService from "../../../api/api";
import JwtService from "../../../services/jwt.service"

const state = {
    adherants: [],
    adhesion_is_done: false,
    response:  {
        store: [],
        failed: []
    }
};

const getters = {
    getAdherants: state => state.adherants,
    getSuccessMessageResponse: state => state.response.store,
    getFailledMessageResponse: state => state.response.failed,
    getAdhesionIsDone: state => state.adhesion_is_done,
};

const mutations = {
    setAdherants(state,data) {
        state.adherants = data;
    },
    setSuccessMessageResponse (state,data) {
        state.response.store = data;
    },

    setFailedMessageResponse (state,data) {
        state.response.failed = data;
    },
    setAdhesionIsDone(state,data){
        state.adhesion_is_done = data
    }
};

const actions = {
    fetch(context){
        if (JwtService.getToken()) {
            ApiService.setHeader();
            ApiService.get("api/adherants")
                .then((response) => {
                    context.commit("setAdherants",response.data);
                });
        } else {

        }
    },
    doAdhesion(context,forms){
        return new Promise((resolve, reject) => {
            ApiService.post("api/adherants/store", forms)
                .then(({data}) => {
                    context.commit("setAdhesionIsDone", true);
                    context.commit("setSuccessMessageResponse", data.message);

                    resolve(data);
                })
                .catch(({response}) => {

                    if(response.status === 422) {

                        context.commit("setAdhesionIsDone", false);
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
