/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
// import VueRouter from 'vue-router';
// Vue.use(VueRouter);

const app = createApp({});

//Componentes
import App from './components/App.vue';
app.component('App', App);

import Consulta from './components/Consulta.vue';
app.component('Consulta', Consulta);

import RegistroCodigo from './components/RegistroCodigo.vue';
app.component('registro-codigo', RegistroCodigo);

import TablaConsulta from './components/TablaConsulta.vue';
app.component('tabla-consulta', TablaConsulta);

//Rutas
// const routers = [
//     {
//         path: '/consulta',
//         component: 'Consulta'
//     }
// ];

app.mount('#app');
