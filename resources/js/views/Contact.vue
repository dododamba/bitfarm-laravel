<template>

<div class="cp_smart_contact">
<section class="slice py-6 pt-lg-7 pb-lg-8 bg-gradient-primary">
            <div class="container d-flex align-items-center text-center text-lg-left">
                <div class="col px-0">
                    <div class="row row-grid align-items-center">
                        <div class="col-lg-6">
                            <h1 class="h1 text-white text-center text-lg-left my-4">
                               <router-link to="/"> {{$t('banners.banner-1-d')}}</router-link> | {{$t('banners.banner-1-c')}}
                            </h1>
                            <p class="lead text-white text-center text-lg-left opacity-8">
                            {{$t('quotes.message-1-a')}}

                              Djerassem Le Bemadjiel
                            </p>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-container shape-line shape-position-bottom">
                <svg width=2560px height=100px xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink preserveAspectRatio=none x=0px y=0px viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space=preserve class="">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="slice slice-lg">
            <div class=container>
                <div class="row  align-items-center">
                    <div class="col-md-5">
                        <h3>
                           CRIPT  {{ $t('contact.section-1-a')}}
                        </h3>
                        <p class="lead my-4">
                            {{ $t('contact.section-1-b')}} : <a href=#>contact@criptopompe.com</a>
                            <br>  {{ $t('contact.section-1-c')}} : (+235) 66 00 00 20
                        </p>
                    </div>

                    <div class="col-md-7">
                                 <ValidationObserver  ref="form" v-slot="{ invalid }">
                                                            <form class="row contact" id="contact-form" v-on:submit.prevent="onSubmit(form.nom,form.email,form.sujet,form.message)">

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                         <ValidationProvider placeholder="Nom"
                                                                                                name="Nom"
                                                                                                rules="required|min:3|max:254"
                                                                                                v-slot="{ errors }">


                                                                                            <label> {{ $t('contact.section-1-d')}}  <span class="required"></span></label>
                                                                                            <input type="text"  v-model="form.nom" class="form-control form-control-lg">

                                                                                        <div class="text-danger">
                                                                                            <template v-show="errors.length > 0">
                                                                                                <i class="ion ion-aler"></i>
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
                                                                       <ValidationProvider placeholder="Email"
                                                                                                name="Email"
                                                                                                rules="email|max:254"
                                                                                                v-slot="{ errors }">


                                                                                            <label>  {{ $t('contact.section-1-e')}} </label>
                                                                                            <input type="email"  v-model="form.email" class="form-control form-control-lg">

                                                                                        <div class="text-danger">
                                                                                            <template v-show="errors.length > 0">
                                                                                                <i class="ion ion-aler"></i>
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


                                                                                            <label> {{ $t('contact.section-1-f')}}  <span class="required"></span></label>
                                                                                            <input type="text"  v-model="form.phone" class="form-control form-control-lg">

                                                                                        <div class="text-danger">
                                                                                            <template v-show="errors.length > 0">
                                                                                                <i class="ion ion-aler"></i>
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
                                                                        <ValidationProvider placeholder="Sujet"
                                                                                                name="Sujet"
                                                                                                rules="min:3|max:254"
                                                                                                v-slot="{ errors }">


                                                                                            <label>  {{ $t('contact.section-1-g')}}</label>
                                                                                            <input type="text"  v-model="form.sujet" class="form-control form-control-lg">

                                                                                        <div class="text-danger">
                                                                                            <template v-show="errors.length > 0">
                                                                                                <i class="ion ion-aler"></i>
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
                                                                       <ValidationProvider placeholder="Message"
                                                                                            name="Message"
                                                                                            rules="required|min:3|max:254"
                                                                                            v-slot="{ errors }">


                                                                                        <label>  {{ $t('contact.section-1-h')}}  <span class="required"></span></label>
                                                                                        <textarea v-model="form.message" class="form-control form-control-lg"></textarea>

                                                                                    <div class="text-danger">
                                                                                        <template v-show="errors.length > 0">
                                                                                            <i class="ion ion-aler"></i>
                                                                                            <span class="help is-danger">
                                                                                                {{ errors[0] }}
                                                                                            </span>
                                                                                        </template>
                                                                                    </div>
                                                                        </ValidationProvider>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <button class="btn btn-primary btn-block" :disabled="invalid" type="submit">  {{ $t('contact.section-1-i')}}  </button>
                                                                </div>
                                                            </form>
                                                            </ValidationObserver>
                    </div>
                    
                </div>
            </div>
        </section>
      
</div>
  
</template>

<script>
import {mapGetters, mapActions} from 'vuex';
import {ValidationObserver, ValidationProvider} from "vee-validate";

export default {
  title: 'Contact | CriptoPompe',

components: {
            ValidationObserver,
            ValidationProvider
        },
       data() {
            return {
                form : {
                    nom: '',
                    email: '',
                    sujet: '',
                    phone: '',
                    message: ''
                }
            }
        },
        computed: {
            ...mapGetters('contact', { messageContactStatus: 'getMessageContactSendstatus'}),
            ...mapGetters('contact', { messageSuccessMessage: 'getMessageContactSendstatus'}),
            ...mapGetters('contact', { messageFailedMessage: 'getFailledMessageResponse'}),
        },
        created() {

        },
        methods: {
           ...mapActions('contact',['sendMessage']),
           onSubmit(){
               this.sendMessage(this.form).then(() => {
                   if(this.messageContactStatus){
                      this.$swal({
                            title: 'Succès!',
                            text: this.messageSuccessMessage,
                            icon: 'success',
                            confirmButtonText: 'Quiter'
                            })


                   }else{
                       this.$swal({
                            title: 'Erreur!',
                            text: this.messageFailedMessage,
                            icon: 'error',
                            confirmButtonText: 'Quiter'
                            })


                   }
               } )
           }

        }
    }
</script>

<style>
section.slice {
	margin-top: 0px;
}
</style>
