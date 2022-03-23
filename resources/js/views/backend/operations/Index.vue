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
                                                <li class="active">Utilsateurs</li>
                                              </ol>


                                                <h1 class="page-title">Utilsateurs</h1>
                                                <p class="page-subtitle"></p>
                                                <div class="line thin"></div>
                                                <div class="page-description">
                                                    <div class="row">
                                                           <div class="col-md-12">
                                                               <div class="dashboard-list-box">
                                                                <h4 class="gray">
                                                                     <i class="ion ion-ios-list-outline"></i>
                                                                    Categories
                                                                    <button class="pull-right btn btn-sm btn-primary btn-rounded">
                                                                        <i class="ion ion-plus text-dark"></i>
                                                                    </button>
                                                                </h4>
                                                                <div class="table-box table-responsive">
                                                                    <table class="basic-table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col">Nom</th>

                                                                                <th scope="col">Action</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr  v-for="item in users.data">
                                                                                <td><a href="">{{ item.nom }}</a></td>

                                                                                 <td>
                                                                                    <div class="btn-group">
                                                                                         <button class="pull-right btn btn-dark btn-rounded">
                                                                                            <i class="ion ion-eye"></i>
                                                                                        </button>

                                                                                         <button class="pull-right btn btn-warning btn-rounded">
                                                                                            <i class="ion ion-edit"></i>
                                                                                        </button>

                                                                                         <button class="pull-right btn btn-danger btn-rounded">
                                                                                            <i class="ion ion-trash-a"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                 </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
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
import {mapGetters,mapActions} from 'vuex';
import {ValidationObserver, ValidationProvider} from "vee-validate";

export default {
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
           ...mapActions('users',['fetch'])

        }
        
    }
</script>
</script>

<style>
section{
    margin-top: 7%;
}
</style>
