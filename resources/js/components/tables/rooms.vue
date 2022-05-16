<template>
    <div class="roomsTable">
        <modulertable editButtons :selectedKeys="keys" :tableData="rooms" :CRUD="roomCRUD"></modulertable>
    </div>
</template>
<script>
import roomCRUD from '../../controller/room'

import modulertable from './modularTable.vue'

export default {
    components:{
        modulertable
    },
    computed:{
    },
    data(){
        return{
            rooms:{},
            keys:["id","room_number","name","description","updated_at","created_at"]
        }
    },
    computed:{
    },
    methods: {
        async getRooms(){
            let roomData = await roomCRUD.get()
            this.rooms = roomData.data
        }
    },
    mounted(){
        this.getRooms()
    },
    created() {

        },
};
</script>
