import './bootstrap';

import Alpine from 'alpinejs';

import "trix";

import { createIcons, icons } from 'lucide';
createIcons({icons});

window.Alpine = Alpine;

Alpine.start();
