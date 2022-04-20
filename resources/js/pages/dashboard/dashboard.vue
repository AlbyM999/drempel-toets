<template>
    <div class="dashboard">
        <div>
            <router-link to="/dashboard">
                home
            </router-link>
            <router-link to="/dashboard/users">
                users
            </router-link>
            <router-link to="/dashboard/rooms">
                rooms
            </router-link>
            <router-link to="/dashboard/reservations">
                reservations
            </router-link>
        </div>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
export default {
    components: {
    },
    computed:{

    },
    data(){
        return{
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
