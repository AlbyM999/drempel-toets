<template>
    <div class="tableComponent">
        <table class="table">
            <thead class="table-header">
                <tr class="table-header-row">
                    <th class="table-header-keys"  v-for="key in selectedKeys" v-bind:key="key">
                        {{ key }}
                    </th>
                </tr>
            </thead>
            <tbody class="table-body">
                <tr class="table-body-row" v-for="content in tableData" v-bind:key="content.id">
                    <td class="table-body-data" v-for="key in selectedKeys" v-bind:key="key">
                        {{ content[key] }}
                    </td>
                    <button class="update" v-if="editButtons">
                        update
                    </button>
                    <button class="delete" @click="delete(content.id)" v-if="editButtons">
                        delete
                    </button>
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
        {
            editButtons:Boolean,
            tableData:Array,
            selectedKeys:Array,
            CRUD:Object
        },
    data(){
        return{
            adminStatus:this.editButtons,
            tableContent:this.tableData,
            keys:[],
            tableContent:{}
        }
    },
    computed:{
    },
    methods: {
        async delete(id){
            this.CRUD.delete(id)
        },
        update(){

        }
    },
    mounted(){
    }
};
</script>
