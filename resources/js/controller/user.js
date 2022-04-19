import CRUD from './CRUD.js'
class userCrud {
    async create(payload){
        return await CRUD.create(`/api/user`,payload)
    }
    async update(id,payload){
        return await CRUD.update(`/api/user/${id}`,payload)
    }
    async get(){
        return await CRUD.get(`/api/user`)
    }
    async getOnId(id){
        return await CRUD.get(`/api/user/${id}`)
    }
    async login(email,pwd){
        return await CRUD.get(`/api/user/${email}/${pwd}`)
    }
    async delete(id){
        return await CRUD.delete(`/api/user/${id}`)
    }
}
export default new userCrud
