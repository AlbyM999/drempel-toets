<template>
    <div v-if="overlay" class="overlay">
        <button @click="overlay = !overlay">close</button>
        <roomForm></roomForm>
    </div>
    <div>
        <button @click="overlay = !overlay">
            add
        </button>
    </div>
    <div class="users">
        <roomTable></roomTable>
    </div>
</template>
<script>

import roomTable from '../../components/tables/rooms.vue'
import roomForm from '../../components/forms/room.vue'

export default {
    components: {
        roomTable,
        roomForm
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
