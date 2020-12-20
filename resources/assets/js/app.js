require('./bootstrap');
import {$,jQuery} from 'jquery';

// export for others scripts to use
window.$ = $;
window.jQuery = jQuery;

import * as popper from 'popper.js';
window.popper = popper;



document.addEventListener('DOMContentLoaded', function () {
    const Swiper = require('swiper/swiper-bundle');

    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
});
