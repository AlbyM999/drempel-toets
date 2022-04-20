import CRUD from './CRUD.js'
class reservationCrud {
    async create(payload){
        return await CRUD.create(`api/reservation`,payload)
    }
    async update(id,payload){
        return await CRUD.update(`api/reservation/${id}`,payload)
    }
    async get(){
        return await CRUD.get(`api/reservation`)
    }
    async getOnId(id){
        return await CRUD.get(`api/reservation/${id}`)
    }
    async delete(id){
        return await CRUD.delete(`api/reservation/${id}`)
    }
}
export default new reservationCrud
