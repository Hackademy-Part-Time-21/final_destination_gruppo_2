import 'bootstrap';
import '@fortawesome/fontawesome-free/css/all.min.css';


function adjustNavbarHeight() {
    
    var navbar = document.getElementById('navbarheight');

    
    if (window.innerWidth >= 768) {
       
        navbar.style.height = '30px';
    } else {
        
        navbar.style.height = '';
    }
}

window.onload = adjustNavbarHeight;

window.onresize = adjustNavbarHeight;

