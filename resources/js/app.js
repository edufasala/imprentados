import './bootstrap';
import { createApp } from 'vue';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
const app = createApp({});

// Componentes vue
import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);




Alpine.start();
app.mount('#app');
