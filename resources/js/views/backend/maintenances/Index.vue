<template>

<div class="slice slice-sm bg-section-secondary">
            <div class=container>
                <div class="row justify-content-center">


                                            
                    <div class=col-lg-9>
                        <div class="row align-items-center mb-4 mt-5">
                            <div class=col>
                                <h5 class="h5 mb-0">Maintenances</h5>
                            </div>
                       
                        </div>


                        <div class="table-responsive">
                                        <table class="table table-stripped table-hover table-cards align-items-center">
                                            <th>Libellé</th>
                                            <th>Technicien</th>
                                            <th>Date</th>
                                            <th>Operations</th>
                                            <th></th>
                                            
                                            <tbody>


                                               <tr v-for="item in maintenances">

                                                 <td>
                                                     <p class="d-block font-weight-bold">
                                                            {{item.libelle}}
                                                     </p>
                                                            
                                                 </td>

                                                 <td>
                                                     <p class="d-block font-weight-bold">
                                                             {{item.technicien.name}} {{item.technicien.surname}} 
                                                     </p>
                                                            
                                                 </td>


                                                 <td>
                                                     <p class="d-block font-weight-bold">
                                                          {{item.date}} 
                                                     </p>
                                                            
                                                 </td>

                                                 <td>
                                                    
                                                    <router-link class="btn btn-sm btn-rounded"></router-link>
                                                            
                                                 </td>

                                                  <td>
                                                    
                                                            
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
      title: 'Maintenances | CriptoPompe',
components: {
            ValidationObserver,
            ValidationProvider
        },
        data() {
            return {
                
            }
        },
         computed: {
            ...mapGetters('maintenances', {
                maintenances: 'getmaintenances'
            })
        },
        created() {
            this.fetch();
        },
        methods: {
           ...mapActions('maintenances',['fetch']),

            

        }
        
    }
</script>
</script>

<style>
section{
    margin-top: 7%;
    
}
</style>
