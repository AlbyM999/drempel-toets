<template>
    <div class="login">
        <form>
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
            email:"",
            password:"",

            message:false,
            msg:''
        }
    },
    computed:{
    },
    methods: {
        async login(){
            var user = await userCRUD.login(this.password,this.email)
            if(user.data.length == 1){
                console.log('login succesful')
                this.$store.dispatch('setEmail',this.email)
                this.$store.dispatch('setPassword',this.password)
                this.$store.dispatch('setAuth',true)

                this.$router.push({name:'dashboard'})
            }else{
                console.log('login failed')
                this.msg='user not found'
                this.message = true
            }
        },
        logout(){
            this.$store.dispatch('getEmail','')
            this.$store.dispatch('getPassword','')
            this.$store.dispatch('getAuth','')
        }
    },
    mounted(){
    },
    created() {

        },
};
</script>
