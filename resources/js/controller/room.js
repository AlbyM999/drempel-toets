import CRUD from './CRUD.js'
class roomCrud {
    async create(payload){
        return await CRUD.create(`/api/room`,payload)
    }
    async update(id,payload){
        return await CRUD.update(`/api/room/${id}`,payload)
    }
    async get(){
        return await CRUD.get(`/api/room`)
    }
    async getOnId(id){
        return await CRUD.get(`/api/room/${id}`)
    }
    async delete(id){
        return await CRUD.delete(`/api/room/${id}`)
    }
}
export default new roomCrud
