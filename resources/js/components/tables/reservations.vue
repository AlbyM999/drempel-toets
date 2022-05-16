<template>
    <div class="reservationsTable">
        <modulertable editButtons :selectedKeys="keys" :tableData="reservations"></modulertable>
    </div>
</template>
<script>
import reservationCRUD from '../../controller/reservation'

import modulertable from './modularTable.vue'

export default {
    components:{
        modulertable
    },
    computed:{
    },
    data(){
        return{
            reservations:{},
            keys:["room_id","first_name","last_name","phone_number","city","street","postal_code","start","end"]
        }
    },
    computed:{
    },
    methods: {
        async getReservations(){
            let reservationData = await reservationCRUD.get()
            this.reservations = reservationData.data
        }
    },
    mounted(){
        this.getReservations()
    },
    created() {

        },
};
</script>
