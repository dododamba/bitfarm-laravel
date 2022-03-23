<template>

<div class="slice slice-sm bg-section-secondary">
            <div class=container>
                <div class="row justify-content-center">


                                            
                    <div class=col-lg-9>
                        <div class="row align-items-center mb-4 mt-5">
                            <div class="col">
                                <h5 class="h5 mb-0">Logs</h5>
                            </div>
                       
                        </div>


                        <div class="table-responsive">
                                        <table class="table table-stripped table-hover table-cards align-items-center">
                                            <th>IP</th>
                                            <th>Action</th>
                                            <th>Location</th>
                                            <th>Table</th>
                                            <th>Date</th>
                                            
                                            <tbody>


                                               <tr v-for="item in logs">

                                                 <td>
                                                     <p class="d-block font-weight-bold">
                                                            {{item.adresseIp}}
                                                     </p>
                                                            
                                                 </td>

                                                 <td>
                                                     <p class="d-block font-weight-bold">
                                                             {{item.action}}
                                                     </p>
                                                            
                                                 </td>


                                                 <td>
                                                     <p class="d-block font-weight-bold">
                                                          {{item.location}} 
                                                     </p>
                                                            
                                                 </td>

                                                 <td>
                                                      <p class="d-block font-weight-bold">
                                                          {{item.table}} 
                                                     </p>
                                                            
                                                 </td>

                                                  <td>
                                                    
                                                      <p class="d-block font-weight-bold">
                                                          {{item.created_at}} 
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
      title: 'logs | CriptoPompe',
components: {
            ValidationObserver,
            ValidationProvider
        },
        data() {
            return {
                
            }
        },
         computed: {
            ...mapGetters('logs', {
                logs: 'getLogs'
            })
        },
        created() {
            this.fetch();
        },
        methods: {
           ...mapActions('logs',['fetch']),

            

        }
        
    }
</script>
</script>

<style>
section{
    margin-top: 7%;
    
}
</style>
