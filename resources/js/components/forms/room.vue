<template>
    <div class="roomForm">
        <form>
            <div class="user_name">
                <label>name</label>
                <input v-model="name" name="email" type="email">
            </div>
            <div class="login_email">
                <label>email</label>
                <input v-model="email" name="email" type="email">
            </div>
            <div class="login_password">
                <label>password</label>
                <input v-model="password" name="password" type="password">
            </div>
            <div>
                <button @click="login()" :disabled="!email||!password" type="button">login</button>
                <p v-if="message">{{msg}}</p>
            </div>
        </form>
    </div>
</template>
<script>
import userCRUD from '../../controller/user'

export default {
    computed:{

    },
    data(){
        return{
            name:"",
            email:"",
            password:"",

            message:false,
            msg:''
        }
    },
    computed:{
    },
    methods: {
        async create(){
            let payload = {
                name:this.name,
                email:this.email,
                password:this.password
            }

            userCRUD.create(payload).then().catch(
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
