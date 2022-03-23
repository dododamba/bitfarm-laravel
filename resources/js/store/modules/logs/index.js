import ApiService from "../../../api/api";
import JwtService from "../../../services/jwt.service"

const state = {
    logs: []
};

const getters = {
    getLogs: state => state.logs,
};

const mutations = {
    setLogs(state,data) {
        state.logs = data;
    }
};

const actions = {
    fetch(context){
        if (JwtService.getToken()) {
            ApiService.setHeader();
            ApiService.get("api/logs")
                .then((response) => {
                    context.commit("setLogs",response.data.items);
                });
        } else {

        }
    },

};

export default {
    namespaced: true,
    getters,
    actions,
    mutations,
    state
}
