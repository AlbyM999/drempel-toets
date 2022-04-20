<template>
    <div class="roomsTable">
        <table>
            <thead>
                <tr>
                    <th>
                        id
                    </th>
                    <th>
                        room number
                    </th>
                    <th>
                        name
                    </th>
                    <th>
                        image_path
                    </th>
                    <th>
                        description
                    </th>
                    <th>
                        created at
                    </th>
                    <th>
                        updated at
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="room in rooms" v-bind:key="room.id">
                    <td>
                        {{ room.id }}
                    </td>
                    <td>
                        {{ room.room_number }}
                    </td>
                    <td>
                        {{ room.name }}
                    </td>
                    <td>
                        {{ room.description }}
                    </td>
                    <td>
                        {{ room.created_at }}
                    </td>
                    <td>
                        {{ room.updated_at }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
import roomCRUD from '../../controller/room'

export default {
    computed:{
    },
    data(){
        return{
            rooms:{}
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
