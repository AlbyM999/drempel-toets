<template>
    <div class="rooms">
        <div class="overview" v-for="room in rooms" v-bind:key="room.id">
            <router-link :to="`/roomview/${room.id}`">
                <h2>{{room.name}}</h2>
                <p>{{room.room_number}}</p>
            </router-link>
        </div>
    </div>
</template>
<script>

 import roomCRUD from "../controller/room"

export default {
    components: {
    },
    computed:{

    },
    data(){
        return{
            rooms:[]
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
