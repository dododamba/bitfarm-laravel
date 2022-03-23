<template>
<header class="" id="header-main">
            <nav class="navbar navbar-main navbar-expand-lg navbar-light" id="navbar-main">
                <div class="container">
                    <router-link class="navbar-brand" to="/">
                        <img alt="Image placeholder" src="images/logo.png" id="navbar-logo">
                    </router-link>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-collapse navbar-collapse-overlay collapse" id="navbar-main-collapse" style="">
                        <div class="position-relative">
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle="hover">
                                <router-link to="/" class="nav-link">{{$t('header.overview')}}</router-link>
                            </li>
                              <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle="hover">
                                <router-link to="/about" class="nav-link" >{{$t('header.about')}}</router-link>
                            </li>
                              <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle="hover">
                                <router-link to="/realisations" class="nav-link" >{{$t('header.realisations')}}</router-link>
                            </li>
                              <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle="hover">
                                <router-link to="/contact" class="nav-link">{{$t('header.contact')}}</router-link>
                            </li>
                           
                       
                            
                        </ul>
                        <ul class="navbar-nav align-items-lg-center d-none d-lg-flex ml-lg-auto">
                           

                    <template v-if="isAuthenticated">

                       <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle="hover">
                                <a class="nav-link" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Dashboard</a>
                                <div class="dropdown-menu dropdown-menu-xl p-0">
                                    <div class="row no-gutters">
                                        
                                        <div class="">
                                            <div class="dropdown-body">
                                                <div class="list-group list-group-flush">
                                                    <div class="list-group-item border-0">
                                                        <div class="media d-flex">
                                                            <div class="media-body ml-3">
                                                               <router-link to="/pompes" class="d-block h6 mb-0">Pompes</router-link>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="list-group-item border-0">
                                                        <div class="media d-flex">
                                                            <div class="media-body ml-3">
                                                               <router-link to="/maintenances" class="d-block h6 mb-0">Maintenances</router-link>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="list-group-item border-0">
                                                        <div class="media d-flex">
                                                            <div class="media-body ml-3">
                                                               <router-link to="/users" class="d-block h6 mb-0">Techniciens</router-link>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                   <div class="list-group-item border-0">
                                                        <div class="media d-flex">
                                                            <div class="media-body ml-3">
                                                               <router-link to="/logs" class="d-block h6 mb-0">Logs</router-link>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="list-group-item border-0">
                                                        <div class="media d-flex">
                                                            <div class="media-body ml-3">
                                                                <a href="javascript:void(0)" class="d-block h6 mb-0" @click="doLogout">Deconnection</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                      
                    </template>
                          <li class="nav-item nav-item-spaced dropdown dropdown-animate" data-toggle="hover">
                               <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)"  aria-haspopup="true" aria-expanded="false">
                                    <img alt="Image placeholder" src="images/language.svg" id="navbar-logo"> -Langues
                               </a>
                              <ul class="dropdown-menu">

                              <li> 

                                <a class="dropdown-item" href="javascript:void(0)" @click="setLocale('en')">
                                    <img alt="Image placeholder" src="images/us.svg" id="navbar-logo"> - US
                                </a>

                                </li>
                                 <li> 

                                   <a class="dropdown-item" href="javascript:void(0)" @click="setLocale('fr')">
                                         <img alt="Image placeholder" src="images/fr.svg" id="navbar-logo"> - FR
                                   </a>
                                 
                                 </li>

                                   
                                 <li> 

                                   <a class="dropdown-item" href="javascript:void(0)" @click="setLocale('ar')">
                                         <img alt="Image placeholder" src="images/ma.svg" id="navbar-logo"> - AR
                                   </a>
                                 
                                 </li>

                                   
                                 <li> 

                                   <a class="dropdown-item" href="javascript:void(0)" @click="setLocale('es')">
                                         <img alt="Image placeholder" src="images/es.svg" id="navbar-logo"> - ES
                                   </a>
                                 
                                 </li>


                                 <li> 

                                   <a class="dropdown-item" href="javascript:void(0)" @click="setLocale('pt')">
                                         <img alt="Image placeholder" src="images/pt.svg" id="navbar-logo"> - PT
                                   </a>
                                 
                                 </li>


                                 <li> 

                                   <a class="dropdown-item" href="javascript:void(0)" @click="setLocale('swh')">
                                         <img alt="Image placeholder" src="images/ken.svg" id="navbar-logo"> - SWH
                                   </a>
                                 
                                 </li>


                                 
                                 
                                 
                                 </ul>
                          </li>
                          
                        </ul>
                       
                    </div>
                </div>
            </nav>
        </header>
  </template>

<script>
 import {mapGetters, mapActions} from 'vuex';

export default {
 computed: {
            ...mapGetters("auth", {
                isAuthenticated: "isAuthenticated"
            })
        },

        data() {
            return {
                current_lang: '',
                languages: [en,fr,ar,es]
            }
        },
          
          created(){
              this.getCurrentLang()
          },

        methods: {
            ...mapActions('auth',['logout']),

            setLocale(locale) {
                this.$root.$i18n.locale = locale;

                this.getCurrentLang()

                if (locale == "en") {
                    this.$material.locale = ENGLISH_DATEPICKER_LOCALE;
                } else if (locale == "fr") {
                    this.$material.locale = FRENCH_DATEPICKER_LOCALE;
                }
                localStorage.setItem("locale", locale);
                },


                getCurrentLang(){
                   this.current_lang = localStorage.getItem(locale)
                },

                setLangues(){
                    var index = this.languages.indexOf(value);
                    if (index > -1) {
                      this.languages.splice(index, 1);
                    }
                    return this.languages;
                },



            doLogout(){

                this.logout()
                    .then(() =>  this.$router.push({name: "login"}));
            },
        },
        
}
</script>
 
<style>

</style>
