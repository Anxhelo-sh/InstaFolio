import './bootstrap';

import { createApp } from 'vue';

import Toaster from '@meforma/vue-toaster';
import Home from "./components/Home";
import Profile from "./components/User-Profile/Profile";

const app = createApp({}).use(Toaster, {
    position: "top",
});

app.component('home', Home);
app.component('profile', Profile);

app.mount('#app');
