<template>

</template>

<script>
import {mapGetters} from 'vuex';
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
            ...mapGetters("auth", {
                loginErrors: "getLoginErrors"
            })
        },
        methods: {

        }
    }
</script>

<style>
section.slice {
    margin-top:0px;
}
</style>
