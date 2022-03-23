<template>
<div class="app-about">
  <section class="slice py-6 pt-lg-7 pb-lg-8 bg-gradient-primary">
            <div class="container d-flex align-items-center text-center text-lg-left">
                <div class="col px-0">
                    <div class="row row-grid align-items-center">
                        <div class="col-lg-6">
                            <h1 class="h1 text-white text-center text-lg-left my-4">
                               <router-link to="/"> {{ $t('banners.banner-1-d')}}</router-link> | {{ $t('banners.banner-1-a')}}
                            </h1>
                            <p class="lead text-white text-center text-lg-left opacity-8">
                           {{$t('quotes.message-1-a')}} <br>
                              Djerassem Le Bemadjiel              </p>
                            
                           
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

        
        


         <section class="slice pt-md-8 pb-md-0  delimiter-bottom">
           
            <div class="container position-relative zindex-100 pt-lg-6">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 order-md-2 mb-5 mb-md-0 d-none d-md-block">
                        <div class="position-relative left-5 left-md-0">
                            <figure>
                                <img alt="Image placeholder" src="images/10.jpg" class="img-fluid mw-md-130 mw-lg-100 rounded perspective-md-right">
                            </figure>
                        </div>
                       
                    </div>
                    <div class="col-12 col-md-6 order-md-1 pr-lg-5 mt-5 mt-md-n7">
                        
                         <h3 class="mt-4">
                             {{ $t('about.section-1-k')}}
                        </h3>


                       <div class="media d-flex mb-4 mt-4">
                            <div class="media-body ml-4">
                                <h6 class="h6 mb-1">{{ $t('about.section-1-a')}}</h6>
                                <p class="text-muted">{{ $t('about.section-1-b')}} </p>
                                <p class="text-muted">{{ $t('about.section-1-c')}} </p>
                                <p class="text-muted">{{ $t('about.section-1-d')}}</p>
                            </div>
                        </div>


                          <div class="media d-flex mb-4">
                            <div class="media-body ml-4">
                                <h6 class="h6 mb-1">{{ $t('about.section-1-e')}} </h6>
                                <p class="text-muted"> {{ $t('about.section-1-f')}} </p>
                                <p class="text-muted"> {{ $t('about.section-1-g')}} </p>
                                <p class="text-muted"> {{ $t('about.section-1-h')}} </p>
                            </div>
                        </div>


                          <div class="media d-flex mb-4">
                            <div class="media-body ml-4">
                                <h6 class="h6 mb-1">{{ $t('about.section-1-i')}} </h6>
                                <p class="text-muted"> {{ $t('about.section-1-j')}} </p>
                                <p class="text-muted"> {{ $t('about.section-1-k')}} </p>
                                <p class="text-muted"> {{ $t('about.section-1-l')}} </p>
                            </div>
                        </div>




                     
                       
                    </div>
                </div>
            </div>
           
        </section>
       
        <section class="slice slice-lg">
            <div class="container container-lg">
                <div class="row row-grid align-items-center">
                     <div class="col-md-5">
                         <div class="position-relative left-5 left-md-0">
                            <figure>
                                <img alt="Image placeholder" src="images/front/6.png" class="img-fluid mw-md-130 mw-lg-100 rounded perspective-md-right">
                            </figure>
                        </div>
                     </div>
                    <div class="col-md-7">
                        <span class="badge badge-primary badge-pill">{{$t('overview.section-5-a')}}</span>
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

                 <div class="container container-lg">
              
                         <h3 class="mt-4 text-center mb-6">
                           {{ $t('about.section-2-a')}} 
                        </h3>

                <div class="row row-grid align-items-center">
                    <div class="col-md-6">
                         <h3 class="h3">
                           Criptopompe
                        </h3>

                        <ul class="list-unstyled">
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-primary mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0"> {{ $t('about.section-2-b')}} </p>
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
                                        <p class="mb-0"> {{ $t('about.section-2-c')}}.</p>
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
                                        <p class="mb-0">  {{ $t('about.section-2-d')}} .</p>
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
                                        <p class="mb-0">  {{ $t('about.section-2-e')}} </p>
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
                                        <p class="mb-0">  {{ $t('about.section-2-f')}} </p>
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
                                        <p class="mb-0"> {{ $t('about.section-2-g')}} </p>
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
                                        <p class="mb-0"> {{ $t('about.section-2-h')}} </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                         <h3 class="h3">
                         {{ $t('about.section-2-i')}}  
                        </h3>

                        <ul class="list-unstyled">
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-danger mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0"> {{ $t('about.section-2-j')}}  </p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-danger mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">
                                        {{ $t('about.section-2-k')}} 
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-danger mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0"> {{ $t('about.section-2-l')}}</p>
                                    </div>
                                </div>
                            </li>

                             <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-danger mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">  {{ $t('about.section-2-m')}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-danger mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0">  {{ $t('about.section-2-n')}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-danger mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0"> {{ $t('about.section-2-o')}}</p>
                                    </div>
                                </div>
                            </li>

                             <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="badge badge-circle badge-danger mr-3">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-0"> {{ $t('about.section-2-p')}}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
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


        <section class="slice slice-lg  delimiter-bottom">
            <div class="container">
                <div class="row mb-5 justify-content-center text-center">
                    <div class="col-lg-8 col-md-10">
                        <h2 class="mt-4"> {{ $t('about.section-3-a')}}</h2>
                        <div class="mt-2">
                            <p class="lead lh-180">
                               {{ $t('about.section-3-b')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">

                      
                        <div class="col-lg-3 col-sm-6">
                          <div class="card card-overlay card-hover-overlay hover-shadow-lg hover-translate-y-n10">
                                <figure class="figure">
                                    <img alt="Image placeholder" src="images/dev/image27.png" class="img-fluid"  style="width: 300px; height: 200px;">
                                </figure>
                                <div class="card-img-overlay d-flex flex-column align-items-center p-0">
                                <div class="overlay-text w-75 mt-auto p-4">
                                    <p class="lead">
                                        {{ $t('about.section-3-c')}} 
                                    </p>
                                    <a href="#!" class="link link-underline-white font-weight-bold">
                                    {{ $t('about.section-3-d')}} </a>
                                </div>
                              
                            </div>
                         </div>
                         </div>




                          <div class="col-lg-3 col-sm-6">
                          <div class="card card-overlay card-hover-overlay hover-shadow-lg hover-translate-y-n10">
                            <figure class="figure">
                                <img alt="Image placeholder" src="images/dev/image38.png" class="img-fluid" style="width: 300px; height: 200px;">
                            </figure>
                            <div class="card-img-overlay d-flex flex-column align-items-center p-0">
                                <div class="overlay-text w-75 mt-auto p-4">
                                    <p class="lead">
                                       {{ $t('about.section-3-e')}}  
                                    </p>
                                    <a href="#!" class="link link-underline-white font-weight-bold">
                                    {{ $t('about.section-3-f')}} </a>
                                </div>
                              
                            </div>
                        </div>
                         </div>




                          <div class="col-lg-3 col-sm-6">
                          <div class="card card-overlay card-hover-overlay hover-shadow-lg hover-translate-y-n10">
                            <figure class="figure">
                                <img alt="Image placeholder" src="images/dev/image35.png" class="img-fluid"  style="width: 300px; height: 200px;">
                            </figure>
                            <div class="card-img-overlay d-flex flex-column align-items-center p-0">
                                <div class="overlay-text w-75 mt-auto p-4">
                                    <p class="lead">
                                        {{ $t('about.section-3-g')}}
                                    </p>
                                    <a href="#!" class="link link-underline-white font-weight-bold">
                                    {{ $t('about.section-3-h')}} </a>
                                </div>
                              
                            </div>
                        </div>
                        </div>
                      



                          <div class="col-lg-3 col-sm-6">
                          <div class="card card-overlay card-hover-overlay hover-shadow-lg hover-translate-y-n10">
                            <figure class="figure">
                                <img alt="Image placeholder" src="images/dev/image37.png" class="img-fluid"  style="width: 300px; height: 200px;">
                            </figure>
                            <div class="card-img-overlay d-flex flex-column align-items-center p-0">
                                <div class="overlay-text w-75 mt-auto p-4">
                                    <p class="lead">
                                     {{ $t('about.section-3-i')}}  
                                    </p>
                                    <a href="#!" class="link link-underline-white font-weight-bold">(2010 – 2012)
                                    {{ $t('about.section-3-j')}}</a>
                                </div>
                              
                            </div>
                        </div>
                        </div>
                       


                        
                </div>
            </div>
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
        
      
</div>
</div>
</template>
<script>
export default {
  title: 'About | CriptoPompe',
}
</script>

<style>
section.slice {
	margin-top: 0px;
}
</style>
