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
                <tr v-for="content in tableContent" v-bind:key="content.id">
                    <td>
                        {{ content.id }}
                    </td>
                    <td>
                        {{ content.name }}
                    </td>
                    <td>
                        {{ content.email }}
                    </td>
                    <td>
                        {{ content.created_at }}
                    </td>
                    <td>
                        {{ content.updated_at }}
                    </td>
                    <div v-if="admin">
                        <button>
                            update
                        </button>
                        <button @click="delete(content.id)">
                            delete
                        </button>
                    </div>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    computed:{
    },
    props:
        ["admin","tableData"],
    data(){
        return{
            adminOptions:this.admin,
            table:this.tableData,
            keys:[],
            tableContent:{}
        }
    },
    computed:{
    },
    methods: {
        getKeys(){

        },
        getContent(){
            this.tableContent = this.table.data
        },
        async delete(id){

        },
    },
    mounted(){
        this.getUsers()
    },
    created() {

        },
};
</script>
