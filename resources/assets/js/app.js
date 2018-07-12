import Vue from 'vue';
//Se importa extension Vue
 Vue.component('formulario-cp', require('./components/FormularioCP.vue'));
 //Crea un componente, con el archivo formularioCP.vue antes requerido o llamado

 const cp = new Vue({
     el: '#cp'
     //Funcion cp de Vue
 });
