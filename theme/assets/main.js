import './styles/main.css'
import.meta.glob('../blocks/**/*.css', { eager: true })
import Alpine from 'alpinejs'
import triggerMenu from './scripts/triggerMenu'
window.Alpine = Alpine
import.meta.glob('../blocks/**/*.js', { eager: true })
ready

document.addEventListener('DOMContentLoaded', function () {

  triggerMenu();
});

window.Alpine.start()

