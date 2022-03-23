<template>
  <div class="app-home">
     
        <section class="slice py-5 py-lg-7">
            <div class="container">
                <div class="row align-items-center">

                <div class="col-12 col-md-6 col-lg-6 order-md-2 mb-5 mb-md-0">
                        <div class="card border-0 shadow-lg zindex-100 mb-0">
                             <figure>
                                  <video
                            id="my-video"
                            class="vjs-matrix video-js vjs-big-play-centered vjs-default-skin card-img"
                            poster="images/front/2.png"
                            controls="controls"
                            preload="auto"
                            height="400"
                            width="720"           
                            >
                               <source src="images/en.mp4" type="video/mp4"/>
                            </video>
                            </figure>
                            
                        </div>
                        <div class="w-75 position-absolute bottom-n5 right-n5 rotate-180">
                            <img alt="Image placeholder" src="images/dot-map-z.svg" class="svg-inject fill-secondary">
                        </div>
                    </div>


                  
                    <div class="col-12 col-md-6 col-lg-6 order-md-1 pr-md-5">
                        <h6 class="">- {{$t(`overview.section-1-a`)}}</h6>
                        <h1 class="h1 mb-4">
                            Criptopompe
                        </h1>
                        <p class="lead text-muted">{{$t(`overview.section-1-b`)}}.</p>
                    
                    </div>
                </div>
            </div>
        </section>

     

        <section class="slice slice-lg delimiter-top"  >
            <div class="container">
                <div class="row mb-6 justify-content-center text-center" style="background-image:url(images/pixel_effect_7.png)">
                    <div class="col-lg-8 col-md-10">
                        <span class="badge badge-primary badge-pill">{{$t(`overview.section-2-a`)}}</span>
                        <h3 class="mt-4">
                            {{$t('overview.section-2-b')}}
                        </h3>

                        
                    </div>
                </div>
                <div class="row row-grid">
                    <div class=col-md-4>
                        <div class=pb-4>
                            <div class=icon>
                                <img alt="Image placeholder" src="images/1.pg" class="svg-inject img-fluid">
                            </div>
                        </div>
                        <h5>{{$t('overview.section-2-c')}}</h5>
                        <p class="text-muted mb-0">
                           {{$t('overview.section-2-d')}}.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="pb-4">
                            <div class="icon">
                                <img alt="Image placeholder" src="images/7.jpg" class="svg-inject img-fluid">
                            </div>
                        </div>
                        <h5>{{$t('overview.section-2-e')}}</h5>
                        <p class="text-muted mb-0">
                         {{$t('overview.section-2-f')}}
                        </p>
                    </div>
                    <div class=col-md-4>
                        <div class=pb-4>
                            <div class=icon>
                                <img alt="Image placeholder" src="images/6.jpg" class="svg-inject img-fluid">
                            </div>
                        </div>
                        <h5 class=""> {{$t('overview.section-2-g')}}</h5>
                        <p class="text-muted mb-0"> {{$t('overview.section-2-h')}}</p>
                    </div>
                </div>
            </div>
        </section>
       

        <section class="slice slice-lg delimiter-bottom">
            <div class=container>
                <div class="row row-grid align-items-center justify-content-between">
                   

                    <div class="col-md-6 col-lg-5 order-lg-1">
                       
                        <div class="media d-flex mb-4">
                            <div class="media-body ml-4">
                                <h5 class="h5 mb-1"> {{$t('overview.section-2-i')}} !</h5>
                                <p class="text-muted"> {{$t('overview.section-2-j')}}</p>
                            </div>
                        </div>
                        <div class="media d-flex mb-4">
                            <div class="media-body ml-4">
                                <h5 class="h5 mb-1">{{$t('overview.section-2-k')}}</h5>
                                <p class="text-muted">{{$t('overview.section-2-l')}} ... </p>
                            </div>
                        </div>
                      

                        <div class="media d-flex mb-4">
                            <div class="media-body ml-4">
                                <h5 class="h5 mb-1">{{$t('overview.section-2-m')}}</h5>
                                <p class="text-muted mb-0">
                                {{$t('overview.section-2-n')}}
                                  
                                </p>
                            </div>
                        </div>
                        
                    </div>


                    <div class="col-md-6 order-md-1">
                        <div class="row mx-n2">
        
                            <div class="col-6 mt-6 px-2">
                                <img alt="Image placeholder" src="images/3.jpg" class="img-fluid mb-3 rounded">
                                <img alt="Image placeholder" src="images/2.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-6 px-2">
                                <img alt="Image placeholder" src="images/5.jpg" class="img-fluid mb-3 rounded">
                                <img alt="Image placeholder" src="images/4.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

   

        <section class="slice pt-md-8 pb-md-0">
           
            <div class="container position-relative zindex-100 pt-lg-6">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 order-md-2 mb-5 mb-md-0 d-none d-md-block">
                        <div class="position-relative left-5 left-md-0">
                            <figure>
                                <img alt="Image placeholder" src="images/10.jpg" class="img-fluid mw-md-130 mw-lg-100 rounded perspective-md-right">
                            </figure>
                        </div>
                        <div class="w-75 position-absolute bottom-n5 right-n5 rotate-180">
                            <img alt="Image placeholder" src="images/dot-map-x.svg" class="svg-inject fill-secondary">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 order-md-1 pr-lg-5 mt-5 mt-md-n7">
                       <h6 class="">- CriptoPompe</h6>
                         <h3 class="mt-4">
                              {{$t('overview.section-3-a')}}
                             
                        </h3>


                        <div class="mt-5">
                            <router-link to="/about" class="btn btn-primary btn-icon">
                                <span class="btn-inner--text">{{$t('overview.section-3-b')}} </span>
                                <span class="btn-inner--icon">
                                    <i data-feather="arrow-right"></i>
                                </span>
                            </router-link>
                        </div>

                     
                       
                    </div>
                </div>
            </div>
           
        </section>
        <section class="slice slice-lg">
            <div class="container pt-lg-8">
                <div class="row mb-5 justify-content-center text-center">
                    <div class="col-lg-8 col-md-10">
                        <h2 class="mt-4">{{$t('overview.section-4-a')}}</h2>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div id="accordion-1" class="accordion accordion-spaced">
                            <div class="card">
                                <div class="card-header py-4" >
                                    <h6 class="mb-0">
                                       {{$t('overview.section-4-b')}} 
                                    </h6>
                                </div>
                                
                            </div>
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-2" data-toggle="collapse" role="button" data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                    <h6 class="mb-0">
                                     {{$t('overview.section-4-c')}} 
                                    </h6>
                                </div>
                                
                            </div>
                            <div class="card">
                                <div class="card-header py-4" id="heading-1-3" data-toggle="collapse" role="button" data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                    <h6 class="mb-0">
                                       {{$t('overview.section-4-d')}}
                                    </h6>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div id="accordion-2" class="accordion accordion-spaced">
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-1" data-toggle="collapse" role="button" data-target="#collapse-2-1" aria-expanded="false" aria-controls="collapse-2-1">
                                    <h6 class="mb-0">
                                       {{$t('overview.section-4-e')}} 
                                    </h6>
                                </div>
                               
                            </div>
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-2" data-toggle="collapse" role="button" data-target="#collapse-2-2" aria-expanded="false" aria-controls="collapse-2-2">
                                    <h6 class="mb-0">
                                      {{$t('overview.section-4-f')}} 
                                    </h6>
                                </div>
                                
                            </div>
                            <div class="card">
                                <div class="card-header py-4" id="heading-2-3" data-toggle="collapse" role="button" data-target="#collapse-2-3" aria-expanded="false" aria-controls="collapse-2-3">
                                    <h6 class="mb-0">
                                      {{$t('overview.section-4-g')}}
                                    </h6>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                     <div class="mt-5">
                            
                            <router-link to="/contact" class="btn btn-neutral btn-icon d-none d-lg-inline-block">{{$t('overview.section-4-h')}}</router-link>
                        </div>
                </div>
            </div>
        </section>

        <section class="slice slice-lg">
            <div class="container container-lg text-center">
                <div class="row row-grid align-items-center">
                    <div class="col-md-12">
                        <span class="badge badge-primary badge-pill btn-lg">{{$t('overview.section-5-a')}}</span>
                        <h5 class="h5 lh-180 mt-4 mb-5">{{$t('overview.section-5-b')}}</h5>
                        <ul class="list-unstyled">
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-primary mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">{{$t('overview.section-5-c')}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-primary mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">{{$t('overview.section-5-d')}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-primary mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">{{$t('overview.section-5-e')}} .</p>
                                    </div>
                                </div>
                            </li>

                             <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-primary mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">{{$t('overview.section-5-f')}}.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-primary mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">{{$t('overview.section-5-g')}} .</p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-primary mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">{{$t('overview.section-5-h')}}.</p>
                                    </div>
                                </div>
                            </li>

                             <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-primary mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">{{$t('overview.section-5-i')}} .</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </section>

         <section class="slice slice-lg">
            <div class="container">
                <div class="jumbotron bg-dark-x shadow-lg mb-0">
                    <img src="images/dot-map-x.svg" alt="Image placeholder" class="img-fluid img-as-bg opacity-7">
                    <div class="container">
                        <div class="row py-6">
                            <div class="col-lg-10">
                                <h1 class="h3 lh-170 text-white  text-center">
                                    <strong class="text-warning"> {{$t('overview.section-6-a')}}</strong>
        
                                </h1>

                                 <h2 class="h3 lh-170 text-white">
                                  
                                    <strong class="text-warning">*</strong> {{$t('overview.section-6-b')}} . <br>
                                </h2>

                                 <h2 class="h3 lh-170 text-white">
                                  
                                    <strong class="text-warning">*</strong>
                                     {{$t('overview.section-6-c')}}
                                    .<br>
                                </h2>


                                 <h2 class="h3 lh-170 text-white">
                                  
                                    <strong class="text-warning">*</strong>
                                     {{$t('overview.section-6-d')}}
                                     <br>
                                </h2>

                                 <h2 class="h3 lh-170 text-white">
                                  
                                    <strong class="text-warning">*</strong>
                                     {{$t('overview.section-6-e')}}
                            . <br>
                                </h2>
                                    
                                 </div>
                                 </div>
                                 </div></div></div>
        </section>

      <section class="slice slice-lg" >
            <div class="container">
                <div class="row mb-6 justify-content-center text-center">
                    <div class="col-lg-8 col-md-10">
                        <h3 class="mt-4">{{ $t('about.section-4-a')}}</h3>
                        <div class="mt-3">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card bg-cover bg-size--cover" style="background-image:url(images/price1.png)">
                            <span class="mask bg-dark opacity-5"></span>
                            <div class="card-body pt-10 mt-auto position-relative">
                                <a href="#" class="d-block h5 mb-3 text-white stretched-link">
                                  {{ $t('about.section-4-b')}} 
                                </a>
                                
                            </div>
                        
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-cover bg-size--cover" style="background-image:url(images/price2.png)">
                            <span class="mask bg-dark opacity-5"></span>
                            <div class="card-body pt-10 mt-auto position-relative">
                                <a href="#" class="d-block h5 mb-3 text-white stretched-link">
                                    {{ $t('about.section-4-c')}}
                                </a>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card bg-cover bg-size--cover" style="background-image:url(images/price3.png)">
                            <span class="mask bg-dark opacity-5"></span>
                            <div class="card-body pt-10 mt-auto position-relative">
                                <a href="#" class="d-block h5 mb-3 text-white stretched-link">
                                    {{ $t('about.section-4-d')}} 
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
        <section class="slice slice-lg">
            <div class="container position-relative">
                <div class="card shadow-lg border-0 zindex-100">
                    <div class="card-body px-5 py-5 text-center text-md-left">
                        <div class="row align-items-center">
                            <div class=col-md-6>
                                <h4 class="h5 mb-2">{{$t('overview.section-8-a')}}  ?</h4>
                                <p class=mb-0>{{$t('overview.section-8-b')}}.</p>
                            </div>
                            <div class="col-12 col-md-6 mt-4 mt-md-0 text-md-right">
                                <router-link to="/contact" class="btn btn-primary btn-icon rounded-pill">
                                    <span class=btn-inner--icon>
                                        <i data-feather=phone></i>
                                    </span>
                                    <span class="btn-inner--text">   {{$t('header.contact')}} </span>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>




      


     
   </div>
</template>

<script>
import {mapGetters, mapActions} from 'vuex';
import {ValidationObserver, ValidationProvider} from "vee-validate";
import carousel from 'vue-owl-carousel'



export default {
      title: 'Overview | CriptoPompe',

components: {
            ValidationObserver,
			ValidationProvider,
			carousel
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
           
        },
        created(){
            this.fetchHome();
            this.getLang()
        },
        methods: {
             ...mapActions('articles',['fetchHome']),
               _getUrlPhoto(item) {
                return this.pict_directory + '/images/' + item;
            },

             getLang() {
                 if(localStorage.getItem(locale)){
                    localStorage.setItem("locale",locale)

                 }else{
                    const locale = navigator.language || navigator.userLanguage || "en";
                    localStorage.setItem("locale",locale)
                    this.$root.$i18n.locale = locale;
                 }
            
        
        },


              _toSingle(slug){
                  return '/article/' + slug + '/detail';
              }
        }
    }
    </script>
<style>
section.slice {
	margin-top: 0px;
}

.video-js {
    display: block;
    vertical-align: top;
    box-sizing: border-box;
    color: #fff;
    background-color: #d8eef9;
    position: relative;
    padding: 0;
    font-size: 10px;
    line-height: 1;
    font-weight: normal;
    font-style: normal;
    font-family: Arial, Helvetica, sans-serif;
    word-break: initial;
}
.card-img, .card-img-top {
    border-top-left-radius: calc(8.75rem - 1px);
    border-top-right-radius: calc(-1.25rem - 1px);
}

.bg-dark-x {
    background-color: #2c5697!important;
}

.card-img, .card-img-bottom {
    border-bottom-right-radius: calc(9.75rem - 1px);
}

.vjs-matrix.video-js {
  color: #00ff00;
}

/* Change the border of the big play button. */
.vjs-matrix .vjs-big-play-button {
  border-color: #00ff00;
}

/* Change the color of various "bars". */
.vjs-matrix .vjs-volume-level,
.vjs-matrix .vjs-play-progress,
.vjs-matrix .vjs-slider-bar {
  background: #00ff00;
}
</style>
