<template>
    <div v-if="overlay">
        <div>
            <reservationsForm></reservationsForm>
        </div>
    </div>
    <button @click="overlay = !overlay">add</button>
    <div class="reservations">
        <reservations></reservations>
    </div>
</template>
<script>

import reservations from '../../components/tables/reservations.vue'

import reservationsForm from '../../components/forms/reservation.vue'

export default {
    components: {
        reservations,
        reservationsForm,

    },
    computed:{

    },
    data(){
        return{
            overlay:false
        }
    },
    computed:{
    },
    methods: {
    },
    mounted(){
    },
    created() {

        },
};
</script>
