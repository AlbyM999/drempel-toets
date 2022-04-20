<template>
    <div class="reservationForm">
        <form>
            <div>
                <label>room</label>
                <select>
                    <option v-for="room in rooms" v-bind:key="room.id" :value='room.id'>
                        {{ room.name }}
                    </option>
                </select>
            </div>
            <div>
                <label>room</label>
                <select>

                </select>
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
                <input v-model="start" name="start" type="date">
            </div>
            <div>
                <label>end</label>
                <input v-model="end" name="end" type="date">
            </div>
        </form>
    </div>
</template>
<script>
import reservationCRUD from '../../controller/reservation'

import roomCRUD from '../../controller/room.js'

export default {
    computed:{

    },
    data(){
        return{
            rooms:[],
            room_id:0,
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
    methods: {
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

            reservationCRUD.create(payload).then().catch(
                (error)=>{
                    console.error(error)
                }
            )
        },
        async getRooms(){
            this.rooms = await roomCRUD.get().then().catch((error)=>{console.error(error)})
        }
    },
    mounted(){
        this.getRooms()
    },
    created() {

        },
};
</script>
