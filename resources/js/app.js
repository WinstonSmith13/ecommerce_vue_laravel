import './bootstrap';

//Breeze utilise Alpine. 
import Alpine from 'alpinejs';
import { createApp } from 'vue';

window.Alpine = Alpine;

Alpine.start();


//Pour creer une instance de vue.
const app = createApp();

//Ensuite il faut monter cela sur le dom avec app. A greffer dans le layout. 
app.mount('#app');
