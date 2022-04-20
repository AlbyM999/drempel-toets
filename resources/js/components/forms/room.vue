<template>
    <div class="roomForm">
        <form>
            <div>
                <label>room number</label>
                <input v-model="number" name="number" type="number">
            </div>
            <div >
                <label>name</label>
                <input v-model="name" name="name" type="text">
            </div>
            <div >
                <label>image</label>
                <input v-model="image" name="image" type="text">
            </div>
            <div >
                <label>description</label>
                <input v-model="description" name="description" type="text">
            </div>
            <div>
                <button @click="create()" :disabled="!number||!name" type="button">login</button>
                <p v-if="message">{{msg}}</p>
            </div>
        </form>
    </div>
</template>
<script>
import roomCRUD from '../../controller/room'

export default {
    computed:{

    },
    data(){
        return{
            number:0,
            name:'',
            image:"",
            description:'',

            message:false,
            msg:''
        }
    },
    computed:{
    },
    methods: {
        async create(){
            let payload = {
                room_number:this.number,
                name:this.name,
                image_path:this.image,
                description:this.description
            }

            roomCRUD.create(payload).then().catch(
                (error)=>{
                    console.error(error)
                }
            )
        }
    },
    mounted(){
    },
    created() {

        },
};
</script>
