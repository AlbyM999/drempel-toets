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
            <input type="file" accept="image/*" @change="onChange" />
            <div id="preview" class="preview">
                <img v-if="item.imageUrl" :src="item.imageUrl" />
            </div>
            <div >
                <label>description</label>
                <input v-model="description" name="description" type="text">
            </div>
            <div>
                <button @click="create()" :disabled="!number||!name" type="button">add</button>
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
        name: 'imageUpload'
        return{
            number:0,
            name:'',
            image:"",
            description:'',

            message:false,
            msg:'',

            item:{
                image : null,
                imageUrl: null
            }
        }
    },
    computed:{
    },
    methods: {
        async create(){
            let payload = {
                room_number:this.number,
                name:this.name,
                image_path:this.item.imageUrl,
                description:this.description
            }

            roomCRUD.create(payload).then().catch(
                (error)=>{
                    console.error(error)
                }
            )
        },
        onChange(e) {
            const file = e.target.files[0]
            this.image = file
            this.item.imageUrl = URL.createObjectURL(file)
        }
    },
    mounted(){
    },
    created() {

        },
};
</script>
