<template>

<div class="slice slice-sm bg-section-secondary">
            <div class=container>
                <div class="row justify-content-center">
               

                                            
                    <div class=col-lg-9>
                        <div class="row align-items-center mb-4 mt-5">
                            <div class=col>
                                <h5 class="h5 mb-0">Techniciens</h5>
                            </div>

                            <div class="col-auto">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-primary btn-icon-only rounded-circle">
                                        <span class="btn-inner--icon">
                                            <h3>
                                               <router-link to="/users-create" class="text-white">+</router-link>
                                            </h3>
                                        </span>
                                    </button>
                                </div>
                            </div>
                       
                        </div>


                        <div class="table-responsive">
                                        <table class="table table-stripped table-hover table-cards align-items-center">
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Telephone</th>
                                            <th>Addresse</th>
                                            <th>Stats</th>
                                            <th></th>
                                            
                                            <tbody>

                                                <tr v-for="item in users">
                                                 
                                                 <td>
                                                     <p class="d-block font-weight-bold">
                                                            {{item.name}}  {{item.surname}}
                                                     </p>
                                                            
                                                 </td>

                                                 <td>
                                                     <p class="d-block font-weight-bold">
                                                            {{item.email}}
                                                     </p>
                                                            
                                                 </td>

                                                 <td>
                                                     <p class="d-block font-weight-bold">
                                                            {{item.phone}}
                                                     </p>
                                                            
                                                 </td>

                                                 <td>
                                                     <p class="d-block font-weight-bold">
                                                            {{item.adress}}
                                                     </p>
                                                            
                                                 </td>

                                                   <td>
                                                    <button type="button" class="btn btn-sm btn-primary btn-icon-only">
                                                            <router-link to="pompesCreate" class="text-white">Voir</router-link>
                                                        </span>
                                                     </button>
                                                            
                                                 </td>

                                                   <td>
                                                     <p class="d-block font-weight-bold">
                                                           <i class="fa fa-trash"></i>
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
      title: 'Users | CriptoPompe',
components: {
            ValidationObserver,
            ValidationProvider
        },
        data() {
            return {
                
            }
        },
         computed: {
            ...mapGetters('users', {
                users: 'getUsers'
            })
        },
        created() {
            this.fetch();
        },
        methods: {
           ...mapActions('users',['fetch']),

            

        }
        
    }
</script>
</script>

<style>
section{
    margin-top: 7%;
    
}
</style>
