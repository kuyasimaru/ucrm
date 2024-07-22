<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import FlashMessage from '@/Components/FlashMessage.vue'
import Pagination from '@/Components/Pagination.vue'
import { ref } from 'vue'
import { Inertia } from '@inertiajs/inertia'


defineProps({
    costmers: Object
})

const search =ref('')

const searchCustomer = () =>{
    Inertia.get(route('costmers.index', { search: search.value }))
}

</script>

<template>
    <Head title="顧客一覧" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">顧客一覧</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <section class="text-gray-600 body-font">
                    <div class="container px-5 py-8 mx-auto">
                        <FlashMessage />
                        <div class="flex pl-4 my-4 lg:w-2/3 w-full mx-auto">
                            <div>
                                <input type="text" name="search" v-model="search">
                                <button class="bg-blue-400 text-white py-2 px-2" @click="searchCustomer">検索</button>
                            </div>
                            <Link as="button" :href="route('costmers.create')" class="flex ml-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded">顧客登録</Link>
                        </div>
                        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                            <tr>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">id</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">氏名</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">カナ</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">電話番号</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="costmer in costmers.data" :key="costmer.id">
                                <td class="border-b-2 border-gray-200px-4 py-3">
                                    {{ costmer.id }}
                                    </td>
                                <td class="border-b-2 border-gray-200px-4 py-3">{{ costmer.name }}</td>
                                <td class="border-b-2 border-gray-200px-4 py-3">{{ costmer.kana }}</td>
                                <td class="border-b-2 border-gray-200px-4 py-3">{{ costmer.tel }}</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                        
                    </div>
                    <Pagination class="mt-6" :links="costmers.links" />
                    </section>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
