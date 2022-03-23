<template>


<section class="page mt-5">
            <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                              <ol class="breadcrumb">
                                                 <li>
                                                    <router-link to="/dashboard">
                                                        Tableau de bord
                                                    </router-link>
                                                </li>
                                                 <li>
                                                    <router-link to="/categories">
                                                        Tableau de bord
                                                    </router-link>
                                                </li>
                                                <li class="active">Catégories</li>
                                              </ol>


                                                <h1 class="page-title">Catégories</h1>
                                                <p class="page-subtitle">Nouvelle Categorie</p>
                                                <div class="line thin"></div>
                                                <div class="page-description">
                                                <div class="row">
                                                    <div class="col-md-12 card">
                                                            
                                                            <div class="dashboard-list-box">
                                                                <h4 class="gray">
                                                                     <i class="ion ion-folder"></i>
                                                                    Categories                           
                                                                </h4>
                                                            </div>

                                                        <div id="add-listing">
                                                            <div class="add-listing-section">  
                                                            <ValidationObserver  ref="form" v-slot="{ invalid }">   
                                                                <div class="form-group errorsBlock" id="categoriesCreateError"
                                                                v-show="categoriesCreateError.length > 0">
                                                                <ul v-for="error in categoriesCreateError">
                                                                        <li>
                                                                        {{ error.message }}
                                                                        </li>
                                                                    </ul>
                                                                </div>                                         
                                                                <form class="row contact" id="contact-form" v-on:submit.prevent="onSubmit(form.nom,form.description)">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <ValidationProvider placeholder="Nom"
                                                                                                name="Nom"
                                                                                                rules="required|min:3|max:254"
                                                                                                v-slot="{ errors }">


                                                                                            <label>Nom</label>
                                                                                            <input type="text"  v-model="form.nom" class="form-control">

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


                                                                                        <label>Description</label>
                                                                                        <textarea v-model="form.description" class="form-control"></textarea>

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

                                                                    <div class="col-md-12">
                                                                        <button class="btn btn-primary"> Enregistrer</button> 
                                                                        <button class="btn btn-secondary"> 
                                                                            <router-link to="/categories">
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
components: {
            ValidationObserver,
            ValidationProvider
        },
       data() {
            return {
                form : {
                    nom: '',
                    description: ''
                }
            }
        },
        computed: {
            ...mapGetters('categories', {
                categoriesCreateError: 'getCategoriesCreateError'
            })
        },
        created() {
            
        },
        methods: {
           ...mapActions('categories',['createCategorie']),
           onSubmit(){
               this.createCategorie(this.form).then(() => this.$router.push({ name: "categories" }) )
           }

        }
    }
</script>

<style>
section{
    margin-top: 7%;
}
</style>
