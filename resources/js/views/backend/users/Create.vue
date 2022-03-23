<template>


<section class="page mt-5">
            <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                             


                                                <h2 class="page-title">Nouveau Technicien</h2>
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
                                                                <form class="row contact" id="contact-form" v-on:submit.prevent="onSubmit(form.name,form.surname,form.email,form.phone,form.adress)">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <ValidationProvider placeholder="Nom"
                                                                                                name="Nom"
                                                                                                rules="required|min:3|max:254"
                                                                                                v-slot="{ errors }">


                                                                                            <input type="text"  v-model="form.name" class="form-control mt-5" placeholder="Nom">

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


                                                                                            <input type="text"  v-model="form.surname" class="form-control" placeholder="Prenom">

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


                                                                                            <input type="email"  v-model="form.email" class="form-control" placeholder="Email">

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


                                                                                            <input type="text"  v-model="form.phone" class="form-control " placeholder="Telephone">

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


                                                                                        <textarea v-model="form.adress" class="form-control" placeholder="Address"></textarea>

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
                                                                            <router-link to="/users">
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
title: 'Nouveau technicien | CriptoPompe',
components: {
            ValidationObserver,
            ValidationProvider
        },
       data() {
            return {
                form : {
                    name: '',
                    surname: '',
                     email: '',
                    phone: '',
                    adress: '',
                }
            }
        },
        computed: {
        },
        created() {
            
        },
        methods: {
           ...mapActions('users',['addTechnicien']),
           onSubmit(){
               this.addTechnicien(this.form).then(() => this.$router.push({ name: "users" }) )
           }

        }
    }
</script>

<style>
section{
    margin-top: 7%;
}
</style>
