import ApiService from "../../../api/api";
import JwtService from "../../../services/jwt.service"

const state = {
    users: []
};

const getters = {
    getUsers: state => state.users,
};

const mutations = {
    setUsers(state,data) {
        state.users = data;
    }
};

const actions = {
    fetch(context){
        if (JwtService.getToken()) {
            ApiService.setHeader();
            ApiService.get("api/users")
                .then((response) => {
                    
                    context.commit("setUsers",response.data.items);
                });
        } else {

        }
    },








    addTechnicien(context,forms){
        return new Promise((resolve, reject) => {
            if (JwtService.getToken()) {
                ApiService.setHeader();
              
                ApiService.post("api/user-add-technicien", forms)
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
