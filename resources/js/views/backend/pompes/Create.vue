<template>


<section class="page mt-5">
            <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                             


                                                <h2 class="page-title">Pompes</h2>
                                                <div class="line thin"></div>
                                                <div class="page-description">
                                                <div class="row">
                                                    <div class="col-md-12 card">
                                                            
                                                            

                                                        <div id="add-listing">
                                                            <div class="add-listing-section">  
                                                            <ValidationObserver  ref="form" v-slot="{ invalid }">   
                                                                <div class="form-group errorsBlock" id="categoriesCreateError"
                                                               >
                                                                
                                                                </div>                                         
                                                                <form class="row contact" id="contact-form" v-on:submit.prevent="onSubmit(form.libelle,form.site_id,form.date_installation,form.lng,form.lat,form.description)">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <ValidationProvider placeholder="Nom"
                                                                                                name="Nom"
                                                                                                rules="required|min:3|max:254"
                                                                                                v-slot="{ errors }">


                                                                                            <input type="text"  v-model="form.libelle" class="form-control mt-5" placeholder="Nom">

                                                                                        <div class="text-danger">
                                                                                            <template v-show="errors.length > 0">
                                                                                                <i class="fa fa-warning"></i>
                                                                                                <span class="help is-danger">
                                                                                                    {{ errors[0] }}
                                                                                                </span>
                                                                                            </template>
                                                                                        </div>
                                                                            </ValidationProvider>
                                                                        </div>
                                                                    </div>


                                                                  <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <ValidationProvider placeholder="Nom"
                                                                                                name="Nom"
                                                                                                rules="required|min:3|max:254"
                                                                                                v-slot="{ errors }">
                                                                                         <select class="form-control"   v-model="form.site_id" >
                                                                                            <option selected disabled>Selectioner le Site</option>
                                                                                            <option v-for="site in sites" v-bind:value="site.id"><small>{{site.nom}} ({{site.ville}})</small></option>

                                                                                         </select>


                                                                                        <div class="text-danger">
                                                                                            <template v-show="errors.length > 0">
                                                                                                <i class="fa fa-warning"></i>
                                                                                                <span class="help is-danger">
                                                                                                    {{ errors[0] }}
                                                                                                </span>
                                                                                            </template>
                                                                                        </div>
                                                                            </ValidationProvider>
                                                                        </div>
                                                                    </div>


                                                                      <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <ValidationProvider placeholder="Nom"
                                                                                                name="Nom"
                                                                                                rules="required|min:3|max:254"
                                                                                                v-slot="{ errors }">


                                                                                            <input type="date"  v-model="form.date_installation" class="form-control" placeholder="Date d'installation">

                                                                                        <div class="text-danger">
                                                                                            <template v-show="errors.length > 0">
                                                                                                <i class="fa fa-warning"></i>
                                                                                                <span class="help is-danger">
                                                                                                    {{ errors[0] }}
                                                                                                </span>
                                                                                            </template>
                                                                                        </div>
                                                                            </ValidationProvider>
                                                                        </div>
                                                                    </div>



                                                                                                                                   <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <ValidationProvider placeholder="Nom"
                                                                                                name="Nom"
                                                                                                rules="required|min:3|max:254"
                                                                                                v-slot="{ errors }">


                                                                                            <input type="text"  v-model="form.lng" class="form-control" placeholder="Lng">

                                                                                        <div class="text-danger">
                                                                                            <template v-show="errors.length > 0">
                                                                                                <i class="fa fa-warning"></i>
                                                                                                <span class="help is-danger">
                                                                                                    {{ errors[0] }}
                                                                                                </span>
                                                                                            </template>
                                                                                        </div>
                                                                            </ValidationProvider>
                                                                        </div>
                                                                    </div>


                                                                 <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <ValidationProvider placeholder="Nom"
                                                                                                name="Nom"
                                                                                                rules="required|min:3|max:254"
                                                                                                v-slot="{ errors }">


                                                                                            <input type="text"  v-model="form.lat" class="form-control " placeholder="Lat">

                                                                                        <div class="text-danger">
                                                                                            <template v-show="errors.length > 0">
                                                                                                <i class="fa fa-warning"></i>
                                                                                                <span class="help is-danger">
                                                                                                    {{ errors[0] }}
                                                                                                </span>
                                                                                            </template>
                                                                                        </div>
                                                                            </ValidationProvider>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-12">
                                                                        <ValidationProvider placeholder="Description"
                                                                                            name="Description"
                                                                                            rules="min:3|max:254"
                                                                                            v-slot="{ errors }">


                                                                                        <textarea v-model="form.description" class="form-control" placeholder="Description"></textarea>

                                                                                    <div class="text-danger">
                                                                                        <template v-show="errors.length > 0">
                                                                                            <i class="fa fa-warning"></i>
                                                                                            <span class="help is-danger">
                                                                                                {{ errors[0] }}
                                                                                            </span>
                                                                                        </template>
                                                                                    </div>
                                                                        </ValidationProvider>
                                                                    </div>

                                                                    <div class="col-md-12 mb-5">
                                                                        <button class="btn btn-primary"> Enregistrer</button> 
                                                                        <button class="btn btn-secondary"> 
                                                                            <router-link to="/pompes">
                                                                            Retour
                                                                            </router-link>
                                                                        </button>
                                                                    </div>
                                                                </form> 
                                                            </ValidationObserver>       
                                                           </div>

                                                        </div>

                        


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
</section>



</template>

<script>
import {mapGetters, mapActions} from 'vuex';
import {ValidationObserver, ValidationProvider} from "vee-validate";

export default {
title: 'Pompe  | CriptoPompe',
components: {
            ValidationObserver,
            ValidationProvider
        },
       data() {
            return {
                form : {
                    libelle: '',
                    site_id: '',
                     date_installation: '',
                    lng: '',
                    lat: '',
                    description: ''
                }
            }
        },
        computed: {
              ...mapGetters('sites', {
                sites: 'getsites'
            })
        },
        created() {
            this.fetch();
        },
        methods: {
           ...mapActions('pompes',['createpompes']),
           ...mapActions('sites',['fetch']),

           onSubmit(){
               this.createpompes(this.form).then(() => this.$router.push({ name: "pompes" }) )
           }

        }
    }
</script>

<style>
section{
    margin-top: 7%;
}
</style>
