<template>

 <div class="cp_smart_login">
     <section class="slice py-6 pt-lg-7 pb-lg-8 bg-gradient-primary">
            <div class="container d-flex align-items-center text-center text-lg-left">
                <div class="col px-0">
                    <div class="row row-grid align-items-center">
                        <div class="col-lg-6">
                            <h1 class="h1 text-white text-center text-lg-left my-4">
                               <router-link to="/"> Home</router-link> | Login
                            </h1>
                            <p class="lead text-white text-center text-lg-left opacity-8">
                             « We cannot become an emerging continent with more than half of our people having a single meal a day. Criptopompe is the answer that will give Africa its food security through low cost Smart Irrigation System (SiSy) » <br>
                              Djerassem Le Bemadjiel                  </p>
                            
                           
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



     <section class="slice">
          <div class="container">

             <div class="row">

                 <div class="col-lg-2">
                 </div>
                 <div class="col-lg-8">
                    <div v-if="loginErrors">
                      <p class="text-muted text-dnager" v-for="text in loginErrors">{{ text }}</p>
                    </div>
                     <ValidationObserver ref="form" v-slot="{ invalid }">
                                            <form  v-on:submit.prevent="signIn(form.email,form.password)">


                                            <div class="form-group errorsBlock" id="loginErrors"
                                            v-show="loginErrors.length > 0">
                                            <ul v-for="error in loginErrors">
                                                    <li>
                                                    {{ error.message }}
                                                    </li>
                                                </ul>
                                            </div>

								<div class="form-group">
                                    <ValidationProvider placeholder="Login"
                                                    name="Login"
                                                    rules="required|email|min:3|max:254"
                                                    v-slot="{ errors }">


                                                <label>Email</label>
                                                <input type="text"  v-model="form.email" class="form-control form-control-lg">

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


                                <div class="form-group">
                                    <ValidationProvider placeholder="Password"
                                                    name="Password"
                                                    rules="required|alpha_num|min:3|max:36"
                                                    v-slot="{ errors }">


                                                <label>Password</label>
                                                <input type="password"  v-model="form.password" class="form-control form-control-lg">

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



								<div class="form-group text-right">
									<button class="btn btn-primary btn-block" :disabled="invalid" type="submit">Login</button>
								</div>

							</form>
                             </ValidationObserver>
                 </div>
                    <div class="col-lg-2">
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
      title: 'Login | CriptoPompe',

components: {
            ValidationObserver,
            ValidationProvider
        },
        data() {
            return {
                form: {
                   email: '',
                    password: ''
                }
            }
        },
        computed: {
            ...mapGetters("auth", {
                loginErrors: "getLoginErrors"
            })
        },
        methods: {
             ...mapActions('auth',['sendMessage']),
            signIn() {
                this.$store
                    .dispatch("auth/login", {
                        email: this.form.email,
                        password: this.form.password
                    })
                    .then(() => this.$router.push({name: "dashboard"}));
            }
        }
    }
</script>

<style>
section.slice {
	margin-top: 0px;
}
</style>
