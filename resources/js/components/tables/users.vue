<template>
    <div class="usersTable">
        <modulertable editButtons :selectedKeys="keys" :tableData="users" :CRUD="userCRUD"></modulertable>
    </div>
</template>
<script>
import userCRUD from '../../controller/user'

import modulertable from './modularTable.vue'

export default {
    computed:{
    },
    components:{
        modulertable,
    },
    data(){
        return{
            users:{},
            keys:["id","name","email","updated_at","created_at"]
        }
    },
    computed:{
    },
    methods: {
        async getUsers(){
            let userData = await userCRUD.get()
            console.log(userData)
            this.users = userData.data
        }
    },
    mounted(){
        this.getUsers()
    },
    created() {

        },
};
</script>
