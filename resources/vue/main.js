import { createApp } from 'vue';
import App from './App.vue';

import 'metro4/build/css/metro.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'jquery';
import '@popperjs/core';
import 'metro4/build/js/metro';
import 'bootstrap/dist/js/bootstrap.bundle';
import '@fortawesome/fontawesome-free/css/all.css';
import router from '@/router';
import withUUID from 'vue-uuid';
import Datepicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';
import {
  stateUser,
  userSymbol,
  menuSymbol,
  stateMenu,
  notificationSymbol,
  stateNotification,
  listSymbol,
  stateList,
} from '@/store';
window.$ = window.jQuery = require('jquery');

const app = withUUID(createApp(App));
app.use(router);
app.provide(menuSymbol, stateMenu);
app.provide(notificationSymbol, stateNotification);
app.provide(userSymbol, stateUser);
app.provide(listSymbol, stateList);
app.component('DatePicker', Datepicker);
app.mount('#app');
