<template>
    <div class="usersTable">
        <table>
            <thead>
                <tr>
                    <th>
                        id
                    </th>
                    <th>
                        name
                    </th>
                    <th>
                        email
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
                <tr v-for="user in users" v-bind:key="user.id">
                    <td>
                        {{ user.id }}
                    </td>
                    <td>
                        {{ user.name }}
                    </td>
                    <td>
                        {{ user.email }}
                    </td>
                    <td>
                        {{ user.created_at }}
                    </td>
                    <td>
                        {{ user.updated_at }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
import userCRUD from '../../controller/user'

export default {
    computed:{
    },
    data(){
        return{
            users:{}
        }
    },
    computed:{
    },
    methods: {
        async getUsers(){
            let userData = await userCRUD.get()
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
