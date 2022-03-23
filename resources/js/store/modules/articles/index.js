import ApiService from "../../../api/api";
import JwtService from "../../../services/jwt.service";
import {API_PICT} from "../../../services/pict.service";

const state = {
    articles: [],
    carousel: [],
    latest: [],
    oldest: [],
    categories: [],
    communiques: [],
    pict_dir: '',
    articleAdded: false,
    response: {
        store: [],
        update: []
    }
};

const getters = {
    getArticles : state =>  state.articles,
    getCarousel: state => state.carousel,
    getCategories: state => state.categories,
    getCommuniques: state => state.communiques,
    getPictDir: state => state.pict_dir,
    getLatest: state => state.latest,
    getOldest: state => state.oldest,
    getSuccessMessageResponse: state => state.response.store,
    getFailledMessageResponse: state => state.response.failed,
    getArticleAdded: state => state.articleAdded
};

const mutations = {
    setCarousel(state,data){
        state.carousel = data.carousel;
    },
    setArticles(state,data) {
        state.articles = data;
    },
    setOldest(state, data){
        state.oldest = data.oldest;
    },
    setCategories(state,data) {
        state.categories = data.categories;
    },
    setCommuniques(state,data) {

        state.communiques = data.communiques;
    },
    setPictDir(state){
        state.pict_dir = API_PICT;
     },
    setLatest(state,data){
        state.latest = data.latest;
    },

    setArticleAdded(state,data){
        state.articleAdded = data
    },
    setSuccessMessageResponse (state,data) {
        state.response.store = data;
    },

    setFailedMessageResponse (state,data) {
        state.response.failed = data;
    },

};

const actions = {
    fetchHome(context){
        ApiService.get("api/home")
                .then((response) => {
                    context.commit("setLatest",response.data);
                    context.commit("setCategories",response.data);
                    context.commit("setCommuniques",response.data);
                    context.commit("setOldest",response.data);
                    context.commit("setCarousel",response.data);

                });
    },
    fetch(context){
        if (JwtService.getToken()) {
            ApiService.setHeader();
            ApiService.get("api/articles")
                .then((response) => {
                    context.commit("setArticles",response.data);
                });
        } else {

        }
    },
    createArticles(context,forms){
        return new Promise((resolve, reject) => {
            ApiService.post("api/articles/store", forms)
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
