import Vue from 'vue';
import axios from 'axios';
import jQuery from 'jquery';
import Popper from 'popper.js';
import 'bootstrap';
import toastr from 'toastr';
import Cleave from 'cleave.js';
import autosize from 'autosize';
import Trix from 'trix';
import ToggleButton from 'vue-js-toggle-button';
import SocialSharing from 'vue-social-sharing';

window.Vue = Vue;
window.axios = axios;
window.$ = window.jQuery = jQuery;
window.Popper = Popper.default;
window.toastr = toastr;
window.Cleave = Cleave;
window.autosize = autosize;
window.Trix = Trix;

Vue.use(ToggleButton);
Vue.use(SocialSharing);

require('owl.carousel');
