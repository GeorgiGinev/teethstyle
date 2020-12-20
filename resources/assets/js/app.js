require('./bootstrap');
import * as $ from 'jquery';

// export for others scripts to use
window.$ = $;
window.jQuery = $;

import * as popper from 'popper.js';
window.popper = popper;

import * as toastr from 'toastr';
window.toastr = toastr;

$(document).ready(() => {
    const Swiper = require('swiper/swiper-bundle');

    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            992: {
                slidesPerView: 3,
            }
        }
    });

    // Create scroll to
    let scrollToForm = document.getElementById('scrollToForm');
    scrollToForm.addEventListener('click', function() {
        document.getElementById('subscribeForm').scrollIntoView({behavior: 'smooth'});
    });
})
