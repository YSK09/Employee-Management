<template lang="">
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create </h1>
        </div>
        <div class="row">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Create New Employees
                                <router-link :to="{name: 'EmployeesIndex'}" class="float-right">Back</router-link>
                                <!-- <a href="/create" class="float-right" >Back</a> -->
                            </div>
                            <div class="card-body">
                                <form method="" action="">


                                    <div class="row mb-3">
                                        <label for="first_name" class="col-md-4 col-form-label text-md-end">First Name</label>

                                        <div class="col-md-6">
                                            <input id="first_name" type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="middle_name" class="col-md-4 col-form-label text-md-end">Middle Name</label>

                                        <div class="col-md-6">
                                            <input id="middle_name" type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="last_name" class="col-md-4 col-form-label text-md-end">Last Name</label>

                                        <div class="col-md-6">
                                            <input id="last_name" type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="address" class="col-md-4 col-form-label text-md-end">Address</label>

                                        <div class="col-md-6">
                                            <input id="address" type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="country" class="col-md-4 col-form-label text-md-end">Country</label>

                                        <div class="col-md-6">
                                            <select name="country" class="form-control" aria-label="Default select example">
                                                <option selected>
                                                    Open this select menu
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="state" class="col-md-4 col-form-label text-md-end">State</label>

                                        <div class="col-md-6">
                                            <select name="state" class="form-control" aria-label="Default select example">
                                                <option selected>
                                                    Open this select menu
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="department" class="col-md-4 col-form-label text-md-end">Department</label>

                                        <div class="col-md-6">
                                            <select name="department" class="form-control" aria-label="Default select example">
                                                <option selected>
                                                    Open this select menu
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="city" class="col-md-4 col-form-label text-md-end">City</label>

                                        <div class="col-md-6">
                                            <select name="city" class="form-control" aria-label="Default select example">
                                                <option selected>
                                                    Open this select menu
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="zip_code" class="col-md-4 col-form-label text-md-end">Zip Code</label>

                                        <div class="col-md-6">
                                            <input id="zip_code" type="text" class="form-control" name="name" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="birt_date" class="col-md-4 col-form-label text-md-end">Birth Date</label>

                                        <div class="col-md-6">
                                            <Datepicker v-model="data"></Datepicker>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="birth_hired" class="col-md-4 col-form-label text-md-end">Birth Hired</label>

                                        <div class="col-md-6">
                                            <Datepicker v-model="date"></Datepicker>
                                        </div>
                                    </div>


                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Store
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- <button @click="getCountries">XHR</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

import Datepicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'
export default {
    components: { Datepicker },
        data() {
            return {
                date: null,
                data: null
            };
        },
        data(){
            return {
                countries: [],
                states: [],
                departments: [],
                cities: [],
            }
        },
        created(){
            this.getCountries();
        },
        // methods: {
        //     async getCountries(){
        //         // axios.get('api/employees/countries')
        //         // .then(res =>{
        //         //     this.countries = res.data
        //         // }).catch(error => {
        //         //     console.log(console.error)
        //         // })
        //         const res = await fetch('api/employees/countries').then((res)=>res.json())
        //         console.log (res)
        //     }
        // }
        methods: {
            getCountries(){
                axios.get('api/employees/countries')
                .then(res =>{
                    this.countries = res.data
                }).catch(error => {
                    console.log(console.error)
                })
            }
        },
}
</script>
<style lang="">

</style>
