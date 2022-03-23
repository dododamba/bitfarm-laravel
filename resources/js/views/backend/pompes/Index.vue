<template>

<div class="slice slice-sm bg-section-secondary">
            <div class=container>
                <div class="row justify-content-center">


                                            
                    <div class=col-lg-9>
                        <div class="row align-items-center mb-4 mt-5">
                            <div class=col>
                                <h5 class="h5 mb-0">Pompes</h5>
                            </div>
                            <div class="col-auto">
                                <div class="dropdown">
                                    <button type=button class="btn btn-primary btn-icon-only rounded-circle">
                                        <span class=btn-inner--icon>
                                            <h2>
                                               <router-link to="/pompes-create" class="text-white">+</router-link>
                                            </h2>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <div class=table-responsive>
                                        <table class="table table-stripped table-hover table-cards align-items-center">
                                            
                                            <th>Nom</th>
                                            <th>Site</th>
                                            <th>Ville</th>
                                            <th></th>
                                            
                                            <tbody>
                                                <tr v-for=" item in pompes">
                                                  <td>
                                                     <p class="d-block font-weight-bold">
                                                            {{item.nom}}
                                                     </p>
                                                            
                                                 </td>

                                                 <td>
                                                     <p class="d-block font-weight-bold">
                                                            {{item.site.nom}}
                                                     </p>
                                                            
                                                 </td>

                                                 <td>
                                                     <p class="d-block font-weight-bold">
                                                            {{item.site.ville}}
                                                     </p>
                                                            
                                                 </td>

                                                 <td>
                                                     <p class="d-block font-weight-bold">
                                                     </p>
                                                            
                                                 </td>
                    
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>


                 

              </div>
            </div>

              </div>
            </div>




</template>

<script>
import {mapGetters,mapActions} from 'vuex';
import {ValidationObserver, ValidationProvider} from "vee-validate";

export default {
      title: 'Pompes | CriptoPompe',
components: {
            ValidationObserver,
            ValidationProvider
        },
        data() {
            return {
                
            }
        },
         computed: {
            ...mapGetters('pompes', {
                pompes: 'getpompes'
            })
        },
        created() {
            this.fetch();
        },
        methods: {
           ...mapActions('pompes',['fetch']),

            

        }
        
    }
</script>
</script>

<style>
section{
    margin-top: 7%;
}
</style>
