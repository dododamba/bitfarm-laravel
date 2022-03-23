<template>
    <div  id="content">
        <HeaderNav />
        <router-view></router-view>
        <Partnairs/>
        <FooterNav />
    </div>
</template>
<script>
    import HeaderNav from "./layouts/Header";
    import  FooterNav from "./layouts/Footer";
    import Partnairs from "./layouts/Partenairs"

    export default {
        name: 'App',
        components: {
            HeaderNav,
            FooterNav,
            Partnairs
        }
    }
</script>
<style>
   .navbar-expand-lg .navbar-brand img {
                height: 3.5rem;
            }

            .navbar-light .navbar-nav .nav-link {
                    color: #2c5697;
            }

            .navbar-light .navbar-nav .nav-link:hover  {
                    color: #280071;
            }

            .badge-primary {
                color: #fff;
                background-color: #2c5697;
            }

            .btn-primary {
                color: #fff;
                background-color: #2c5697;
                border-color: #2c5697;
                box-shadow: none;
            }

            section.slice{
                background-color: #fbfbfb;
            }

            .btn-neutral {
                background-color: transparent;
                color: #2c5697;
                border: 2px solid #2c5697;
            }

            .btn-neutral:hover {
                background-color: transparent;
                color: #280071;
                border: 2px solid #280071;
            }


           
            .mt-4, .my-4 {
                    margin-top: 3.5rem!important;
                }
                .bg-gradient-primary {
                    background: linear-gradient(50deg,#2c5697 0,#280071 100%)!important;

                }

</style>
