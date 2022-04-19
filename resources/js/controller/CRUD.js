import axios from "axios";
class Crud {
    async create(path,payload){
        return await axios.post(path,payload)
        .then((response)=>{
            console.log(response)
        }).catch((error)=>{
            console.error(error)
        })
    }
    async update(path,payload){
        return await axios.put(path,payload)
        .then((response)=>{
            console.log(response)
            return response
        })
        .catch((error)=>{console.error(error)})
    }
    async get(path){
        return await axios.get(path)
        .then((response)=>{
            console.log(response)
            return response
        })
        .catch((error)=>{
            console.log(error)
        })
    }
    async delete(path){
        return axios
            .delete(path)
            .then()
            .catch(error=>console.error(error))
    }
}

export default new Crud
