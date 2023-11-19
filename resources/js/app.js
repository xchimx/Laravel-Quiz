require('./bootstrap');
import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.start()
if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
    window.location.replace("/");
}

