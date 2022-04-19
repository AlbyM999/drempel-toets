import { createStore, storeKey } from 'vuex'

  export default new createStore({
    state:{
        name:"",
        email:"",
        password:"",
        auth:false
    },
    mutations:{
        UPDATE_NAME(state,payload){
            state.name = payload
        },
        UPDATE_EMAIL(state,payload){
            state.email = payload
        },
        UPDATE_PASSWORD(state,payload){
            state.password = payload
        },
        UPDATE_AUTH(state,payload){
            state.auth = payload
        }
    },
    actions:{
        setName({commit},name){
            commit('UPDATE_NAME',name)
        },
        setEmail({commit},email){
            commit('UPDATE_EMAIL',email)
        },
        setPassword({commit},password){
            commit('UPDATE_PASSWORD',password)
        },
        setAuth({commit},auth){
            commit('UPDATE_AUTH',auth)
        },
    },
    modules:{},
    getters:{
        name:state=>state.name,
        email:state=>state.email,
        password:state=>state.password,
        auth:state=>state.auth
    }
  })
