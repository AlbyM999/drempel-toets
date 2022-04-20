<template>
    <div class="overlay" v-if="overlay">
        <form>
            <div>
                <button type="button" @click="overlay = !overlay">cancel</button>
            </div>
            <div>
                <label>first name</label>
                <input v-model="first_name" name="first_name" type="text">
            </div>
            <div>
                <label>last name</label>
                <input v-model="last_name" name="last_name" type="text">
            </div>
            <div>
                <label>phone number</label>
                <input v-model="phone_number" name="phone_number" type="text">
            </div>
            <div>
                <label>city</label>
                <input v-model="city" name="last_name" type="text">
            </div>
            <div>
                <label>street</label>
                <input v-model="street" name="street" type="text">
            </div>
            <div>
                <label>zip code</label>
                <input v-model="postal_code" name="postal_code" type="text">
            </div>
            <div>
                <label>start</label>
                <input v-model="start" name="start" type="date" :min="today">
            </div>
            <div>
                <label>end</label>
                <input v-model="end" name="end" type="date" :min="today">
            </div>
            <button @click="this.create(),overlay = !overlay,this.print()" type="button">finish</button>
        </form>
    </div>
    <div class="roomview">
        <div class="header_roomview">
            <p>{{ room.name }}</p>
            <p>{{ room.room_number }}</p>
        </div>
        <div class="image">
            <img>
        </div>
        <div class="description">
            <p>{{room.description}}</p>
        </div>
        <div>
            <button type="button" @click="overlay = !overlay">reserve</button>
        </div>
    </div>
</template>
<script>

const today = new Date().toLocaleDateString()

import reservationCRUD from '../controller/reservation'

import roomCRUD from "../controller/room"

export default {
    components: {
    },
    computed:{

    },
    data(){
        return{
            overlay:false,

            room:[],

            room_id:this.ID,
            first_name:'',
            last_name:'',
            phone_number:'',
            city:'',
            street:'',
            postal_code:'',
            start:'',
            end:'',

            message:false,
            msg:''
        }
    },
    computed:{
    },
    props:["ID"],
    methods: {
        async getRooms(){
            let roomData = await roomCRUD.getOnId(this.ID)
            this.room = roomData.data[0]
        },
         async create(){
            let payload = {
                room_id:this.room_id,
                first_name:this.first_name,
                last_name:this.last_name,
                phone_number:this.phone_number,
                city:this.city,
                street:this.street,
                postal_code:this.postal_code,
                start:this.start,
                end:this.end,
            }

            reservationCRUD.create(payload).then(
                (response)=>[
                    console.log(response)
                ]
            ).catch(
                (error)=>{
                    console.error(error)
                }
            )
        },
        print(){

            let payload = {
                room_id:this.room_id,
                first_name:this.first_name,
                last_name:this.last_name,
                phone_number:this.phone_number,
                city:this.city,
                street:this.street,
                postal_code:this.postal_code,
                start:this.start,
                end:this.end,
            }

            window.print(payload)
        }
    },
    mounted(){
        this.getRooms()
    },
    created() {

        },
};
</script>
