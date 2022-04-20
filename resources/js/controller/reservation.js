import CRUD from './CRUD.js'

const URL = `/api/reservation`
class reservationCrud {
    async create(payload){
        return await CRUD.create(`${URL}`,payload)
    }
    async update(id,payload){
        return await CRUD.update(`${URL}/${id}`,payload)
    }
    async get(){
        return await CRUD.get(`${URL}`)
    }
    async getOnId(id){
        return await CRUD.get(`${URL}/${id}`)
    }
    async delete(id){
        return await CRUD.delete(`${URL}/${id}`)
    }
}
export default new reservationCrud
