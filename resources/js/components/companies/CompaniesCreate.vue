<template>

<div v-if="errors">
        <div v-for="(v, k) in errors" :key="k" class="mb-4 shadow-sm py-2 px-4 pr-0">
            <p v-for="error in v" :key="error" class="text-sm">
                {{ error }}
            </p>
        </div>
    </div>


    <form class="space-y-6" @submit.prevent="saveCompany">

        <div  class="space-y-4 rounded-md shadow-sm">

            <div class="mt-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <div class="mt-1">
                    <input  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
                        type="text"
                        name="name"
                        id="name"
                        v-model="form.name"
                    >
                </div>
            </div>


            <div class="mt-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <div class="mt-1">
                    <input  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
                        type="text"
                        name="email"
                        id="email"
                        v-model="form.email"
                    >
                </div>
            </div>

            <div class="mt-4">
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <div class="mt-1">
                    <input  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
                        type="text"
                        name="address"
                        id="address"
                        v-model="form.address"
                    >
                </div>
            </div>

            <div class="mt-4">
                <label for="website" class="block text-sm font-medium text-gray-700">Website</label>
                <div class="mt-1">
                    <input  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm"
                        type="text"
                        name="website"
                        id="website"
                        v-model="form.website"
                    >
                </div>
            </div>



        </div>

        <button type="submit"
                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md ring-gray-300 hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring disabled:opacity-25">
            Create
        </button>
    </form>

</template>

<script setup>

  import useCompanies from '../../composables/companies'

  import { reactive } from 'vue'

 const form = reactive({
    name: '',
    email: '',
    address: '',
    website: ''
});

  const { errors, storeCompany } = useCompanies()


const saveCompany = async () => {
console.log('saveme');
await storeCompany({ ...form })

}

</script>
