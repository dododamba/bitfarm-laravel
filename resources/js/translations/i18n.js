    const state=  {
        i18n,
        languages: [],
        language,
    };

    const getters = {
       
        translate: state => 
        (assetId, values = {}) => {
        if (!state.i18n) return null;
        let i18n = state.i18n()[state.language];
          assetId.split('.').forEach(key => {
            if (!!i18n && !!i18n[key]) {
                i18n = i18n[key];
            } else {
                i18n = null;
            }
        });
        if (!!values && !!i18n) {
            Object.keys(values).forEach(key => {
                const rx = new RegExp('{{\\s*' + key + '\\s*}}', 'gm');
                i18n = i18n.replace(rx, values[key]);
            });
        }
        return i18n || assetId;
    },
    };

    const mutations =  {
        INITIALIZE(state, i18n) {
            state.i18n = JSON.stringify(i18n);
            state.languages = Object.keys(i18n);
            state.language = Object.keys(i18n)[0] || 'en';
        },
        CHANGE_LANGUAGE(state, language = state.languages[0]) {
            state.language = language;
        }
    },

    const actions=  {
        initializeI18n(context) {
          import('./i18n.json')
            .then(res => context.commit('INITIALIZE', res.default));
        },
      },
