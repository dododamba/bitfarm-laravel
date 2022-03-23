<template>
   
  <footer class="position-relative" id="footer-main">
        <div class="footer pt-lg-7" style="background-image:url(images/dot-map-z.svg)">
            
            <div class="container pt-4">
           
            
            <div class="row">
            <div class="col-lg-12 mb-5 mb-lg-0 text-center">
            <router-link to="/">
              <img alt="Image placeholder" src="images/logo.png" id="footer-logo" style="height: 7pc;">
            </router-link>
            <h1 class="mt-4 text-lg  opacity-8 pr-lg-4">
                 Criptopompe 
            </h1>

            <h3 class="mt-4 text-lg  opacity-8 pr-lg-4">
                  {{$t('footer.section-1-a')}}
            </h3>

            <p class="mt-4 text-lg  opacity-8 pr-lg-4">
                  {{$t('footer.section-1-b')}}. 
            </p>


            <ul class="nav justify-content-center  mt-3 mt-md-0">

            <li class="nav-item"><a class="nav-link" href="" target="_blank"><i class="fab fa-youtube"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="" target="_blank"><i class="fab fa-linkedin"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="" target="_blank"><i class="fab fa-facebook"></i></a></li>
           
              </ul>
            
            </div></div>
              
              
            
              
              
              <hr class="divider divider-fade my-4 bg-dark">
              
              <div class="row align-items-center justify-content-md-between pb-4">
                 <div class="col-md-5">
                     <div class="copyright text-sm font-weight-bold text-center text-md-left">© 2021 <a href="https://webpixels.io" class="font-weight-bold" target="_blank">CriptoPompe</a>. All rights reserved</div></div>
                     
                     <div class="col-md-7">
                     
                     <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">


                     <li class="nav-item"> 

<a class="nav-link" href="javascript:void(0)" @click="setLocale('en')">
    <img alt="Image placeholder" src="images/us.svg" id="navbar-logo"> - US
</a>

</li>
 <li class="nav-item"> 

   <a class="nav-link" href="javascript:void(0)" @click="setLocale('fr')">
         <img alt="Image placeholder" src="images/fr.svg" id="navbar-logo"> - FR
   </a>
 
 </li>

   
 <li class="nav-item"> 

   <a class="nav-link" href="javascript:void(0)" @click="setLocale('ar')">
         <img alt="Image placeholder" src="images/ma.svg" id="navbar-logo"> - AR
   </a>
 
 </li>

   
 <li class="nav-item"> 

   <a class="nav-link" href="javascript:void(0)" @click="setLocale('es')">
         <img alt="Image placeholder" src="images/es.svg" id="navbar-logo"> - ES
   </a>
 
 </li>


 <li class="nav-item"> 

   <a class="nav-link" href="javascript:void(0)" @click="setLocale('pt')">
         <img alt="Image placeholder" src="images/pt.svg" id="navbar-logo"> - PT
   </a>
 
 </li>


 <li> 

   <a class="nav-link" href="javascript:void(0)" @click="setLocale('swh')">
         <img alt="Image placeholder" src="images/ken.svg" id="navbar-logo"> - SWH
   </a>
 
 </li>

                     
                    
             
                        
                     
                     </ul>
                     
                     
                     </div></div></div></div></footer>
    
  
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
.bg-dark {

    background-color: #2c5697!important;
}
</style>
