import ApiService from "../../../api/api";
import JwtService from "../../../services/jwt.service"

const state = {
    categories: [],
    categorieAdded: false,
    errors: {
        store: [],
        update: []
    }
};

const getters = {
    getCategories: state => state.categories,
    getCategoriesCreateError: state => state.errors.store,

};

const mutations = {
    setCategories(state,data) {
        state.categories = data;
    },

    setCategorieAdded(state){
        state.categorieAdded = true
    },
    setCategoriesCreateError(state, {target, errors}) {

        Vue.set(state.errors, target, []);

        for (let key in errors)
            state.errors[target].push(errors[key][0]);
    },
};

const actions = {


createCategorie(context, forms) {
        return new Promise((resolve, reject) => {
            ApiService.post("api/categories/store", forms)
                .then(({data}) => {
                    context.commit("setCategorieAdded", true);
                    resolve(data);
                })
                .catch(({response}) => {

                    if(response.status === 422) {

                        context.commit(
                            "setCategoriesCreateError",
                            {target: 'store', errors: response.data.errors}
                        );
                    }
                    reject(response);
                });
        });
    },


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
