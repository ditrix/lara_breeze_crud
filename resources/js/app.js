import './bootstrap';

/* Alpine не нужен. в общ вещь бесполезная в данном прожекте. стили таблицы не более */
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import { createApp } from 'vue';
import router from './router'

import CompaniesIndex from '@/components/companies/CompaniesIndex.vue';

createApp({
    components: {
        CompaniesIndex
    }
}).use(router).mount('#app')
