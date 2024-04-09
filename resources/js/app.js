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

// var sliders = document.querySelectorAll(" ,slide");
// var center = Math. floor(sliders.length / 2);
// var leftEndBack = center - 3 >= 0? center - 3: undefined;
// var leftEnd = center - 2 >= 0? center - 2: undefined;
// var leftMid = center - 1 >= 0? center - 1 : undefined;
// var rightMid = center + 1 < sliders. length? center + 1 : undefined;
// var rightEnd = center + 2 < sliders. length? center + 2 : undefined;
// var rightEndBack = center + 3 < sliders. length? center + 3: undefined;
// let touchstart = 0
// let touchendX = 0
// let container = document.getElementById('slider-content');
// if (LeftEndBack != undefined) sliders[leftEndBack].classlist.add("position-none"); if (leftEnd != undefined) sliders[leftEnd].classList.add("position-1"); if (leftMid != undefined) sliders[leftMid].classList.add ("position-2"); if (center != undefined) sliders[center].classlist.add("position-3"); if (rightMid != undefined) sliders[rightMid].classList.add("position-4"); if (rightEnd != undefined) sliders[rightEnd].classList.add("position-5"); if (rightEndBack != undefined) sliders[rightEndBack] classlist.add("position-none");
// if (sliders.length > 0) $('.slide').addClass('position-none');

