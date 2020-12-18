require('./bootstrap');
import {$,jQuery} from 'jquery';

// export for others scripts to use
window.$ = $;
window.jQuery = jQuery;

import * as popper from 'popper.js';
window.popper = popper;
