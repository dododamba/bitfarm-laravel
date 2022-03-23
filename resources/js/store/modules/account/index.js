import ApiService from "../../../api/api";
import JwtService from "../../../services/jwt.service"

const state = {
    categories: []
};

const getters = {
    getCategories: state => state.categories,
};

const mutations = {
    setCategories(state,data) {
        state.categories = data;
    }
};

const actions = {
    fetch(context){
        if (JwtService.getToken()) {
            ApiService.setHeader();
            ApiService.get("api/categories")
                .then((response) => {
                    
                    context.commit("setCategories",response.data);
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
