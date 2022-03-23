import ApiService from "../../../api/api";
import JwtService from "../../../services/jwt.service"

const state = {
    message_contact_send: false,
    response:  {
        store: [],
        failed: []
    }
};

const getters = {
    getSuccessMessageResponse: state => state.response.store,
    getFailledMessageResponse: state => state.response.failed,
    getMessageContactSendstatus: state => state.message_contact_send,

};

const mutations = {

    setMessageContactSended(state,data){
        state.message_contact_send = data;
    },

    setSuccessMessageResponse (state,data) {
        state.response.store = data;
    },

    setFailedMessageResponse (state,data) {
        state.response.failed = data;
    }
};

const actions = {
    sendMessage(context,forms){
        return new Promise((resolve, reject) => {
            ApiService.post("api/contact-message/store", forms)
                .then(({data}) => {
                    context.commit("setMessageContactSended", true);
                    context.commit("setSuccessMessageResponse", data.message);

                    resolve(data);
                })
                .catch(({response}) => {

                    if(response.status === 422) {

                        context.commit("setMessageContactSended", false);
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
