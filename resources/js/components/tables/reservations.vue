<template>
    <div class="reservationsTable">
        <table>
            <thead>
                <tr>
                    <th>
                        id
                    </th>
                    <th>
                        room id
                    </th>
                    <th>
                        first name
                    </th>
                    <th>
                        last name
                    </th>
                    <th>
                        tel
                    </th>
                    <th>
                        city
                    </th>
                    <th>
                        street
                    </th>
                    <th>
                        zip
                    </th>
                    <th>
                        start
                    </th>
                    <th>
                        end
                    </th>
                    <th>
                        created at
                    </th>
                    <th>
                        updated at
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="reservation in reservations" v-bind:key="reservation.id">
                    <td>
                        {{ reservation.id }}
                    </td>
                    <td>
                        {{ reservation.first_name }}
                    </td>
                    <td>
                        {{ reservation.last_name }}
                    </td>
                    <td>
                        {{ reservation.phone_number }}
                    </td>
                    <td>
                        {{ reservation.city }}
                    </td>
                    <td>
                        {{ reservation.street }}
                    </td>
                    <td>
                        {{ reservation.postal_code }}
                    </td>
                    <td>
                        {{ reservation.start }}
                    </td>
                    <td>
                        {{ reservation.end }}
                    </td>
                    <td>
                        {{ reservation.created_at }}
                    </td>
                    <td>
                        {{ reservation.updated_at }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
import reservationCRUD from '../../controller/reservation'

export default {
    computed:{
    },
    data(){
        return{
            reservations:{}
        }
    },
    computed:{
    },
    methods: {
        async getReservations(){
            let reservationData = await reservationCRUD.get()
            this.reservations = reservationData.data
        }
    },
    mounted(){
        this.getReservations()
    },
    created() {

        },
};
</script>
